<?php

/** @var array $data */

declare(strict_types=1);

use ObscureCode\Exceptions\NotFoundException;
use ObscureCode\Translator\Translator;

/** @var Translator $translator */
$translator = $data['translator'];

if (!isset($params[0])) {
    throw new NotFoundException();
}

$chapter = __DIR__ . '/../chapters/' . $translator->getLanguage() . '/' . $params[0] . '.php';

if (!file_exists($chapter)) {
    throw new NotFoundException();
}

include($chapter);
