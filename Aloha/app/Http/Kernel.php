<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'authadm' => \App\Http\Middleware\AuthenticateAdmin::class,
        // Outros middlewares
    ];
}