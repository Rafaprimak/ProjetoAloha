<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'is_admin' => \App\Http\Middleware\IsAdmin::class,
        // Outros middlewares
    ];
    
}