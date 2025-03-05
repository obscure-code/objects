<?php

/** @var array $data */

declare(strict_types=1);

use ObscureCode\Translator\Translator;

/** @var Translator $translator */
$translator = $data['translator'];
$keywords = $translator->getTranslation('keywords');
$description = $translator->getTranslation('description');
$title = $translator->getTranslation('title');

?>
<!DOCTYPE html>
<html lang="<?= $translator->getLanguage() ?>">

<head>
    <title><?= $title ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="<?= $keywords ?>"/>
    <meta name="description" content="<?= $description ?>"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/gif" href=""/>
    <link rel="stylesheet" href="/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

    <!--link rel="alternate" hreflang="x-default" href="https://objects-book.ru<?= $_SERVER['SCRIPT_NAME'] ?>"/-->
    <!--link rel="alternate" hreflang="ru" href="https://objects-book.ru<?= $_SERVER['SCRIPT_NAME'] ?>?lang=ru"/-->
    <!--link rel="alternate" hreflang="en" href="https://objects-book.ru<?= $_SERVER['SCRIPT_NAME'] ?>?lang=en"/-->
</head>
<body>
