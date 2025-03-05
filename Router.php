<?php

declare(strict_types=1);

namespace App;

use ObscureCode\Router as AbstractRouter;

final class Router extends AbstractRouter
{
    public function patternDefault(string $path): void
    {
        $this->load('header');
        $this->load($path);
        $this->load('footer');
    }

    public function patternBlank(string $path): void
    {
        $this->load($path);
    }

    public function patternError(): void
    {
        http_response_code(404);
        $this->load('header');
        $this->load('error');
        $this->load('footer');
    }
}
