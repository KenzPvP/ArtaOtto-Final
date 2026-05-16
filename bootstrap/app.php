<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->redirectGuestsTo(function (Request $request) {
            if ($request->is('admin') || $request->is('admin/*')) {
                return route('admin.login');
            }
            
            // Default redirect for any other auth failures (since only admin has login currently)
            // Or return a 401 response if they expect JSON
            return $request->expectsJson() ? null : url('/');
        });
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (\Throwable $e, Request $request) {
            // Jika dalam mode debug, biarkan Laravel menampilkan detail error (untuk development)
            if (config('app.debug')) {
                return null;
            }

            // Untuk request API, biarkan default JSON error
            if ($request->is('api/*')) {
                return null;
            }

            // Jika error adalah HttpException (404, 403, dll), 
            // Laravel otomatis mencari view di resources/views/errors/{code}.blade.php
            if ($e instanceof \Symfony\Component\HttpKernel\Exception\HttpExceptionInterface) {
                return null; 
            }

            // Untuk error lainnya (500 internal server error), tampilkan view 500 kita
            return response()->view('errors.500', [], 500);
        });
    })->create();
