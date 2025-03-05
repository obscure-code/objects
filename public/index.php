<?php

declare(strict_types=1);

use App\Router;
use ObscureCode\Exceptions\NotFoundException;
use ObscureCode\Translator\Language;
use ObscureCode\Translator\LanguageRepository;
use ObscureCode\Translator\Translator;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../Router.php';

$config = include __DIR__ . '/../config.php';

$router = new Router(
    __DIR__ . '/include',
    $config,
);

/**
 * Simple dependency section
 */

$languageRepository = (new LanguageRepository())
    ->setAvailableLanguages([Language::RU, Language::EN])
    ->setDefaultLanguage(Language::RU);

$translator = (new Translator())
    ->setLanguage($languageRepository->readLanguage())
    ->setTranslations((array)include __DIR__ . '/translations.php');

$chapters = include __DIR__ . '/chapters.php';

try {
    ob_start();

    $router->call($_SERVER['SCRIPT_NAME'], [
        'translator' => $translator,
        'languageRepository' => $languageRepository,
        'chapters' => $chapters,
    ]);
} catch (NotFoundException $exception) {
    ob_clean();

    $router->call('error', [
        'message' => $translator->getTranslation('not_found'),
    ]);
} catch (RuntimeException $exception) {
    ob_clean();

    $router->call('error', [
        'message' => $exception->getMessage(),
    ]);
} finally {
    ob_end_flush();
}
