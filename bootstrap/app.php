<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpFoundation\Request;

return Application::configure(dirname(__DIR__))
    ->withRouting(function (): void {
        require __DIR__.'/../routes/web.php';
        require __DIR__.'/../routes/api.php';
        require __DIR__.'/../routes/console.php';
    })
    ->withMiddleware(function (Middleware $middleware): void {
        Request::setTrustedProxies(
            ['*'],
            Request::HEADER_X_FORWARDED_FOR |
            Request::HEADER_X_FORWARDED_HOST |
            Request::HEADER_X_FORWARDED_PORT |
            Request::HEADER_X_FORWARDED_PROTO
        );

        $middleware->append([
            \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
            \App\Http\Middleware\TrimStrings::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \App\Http\Middleware\EncryptCookies::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->create();