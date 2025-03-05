<?php

/** @var array $data */

declare(strict_types=1);

use ObscureCode\Translator\LanguageRepository;

/** @var LanguageRepository $languageRepository */
$languageRepository = $data['languageRepository'];

if (isset($params[0])) {
    $languageRepository->saveLanguageToCookie($params[0]);
}

$location = ($_SERVER['HTTP_REFERER']) ?? '/';

header('Location: ' . preg_replace('/\\?.*/', '', $location));
exit;
