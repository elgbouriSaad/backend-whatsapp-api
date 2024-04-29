<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [

        // \App\Http\Middleware\Cors::class,
        'cors' => \App\Http\Middleware\Cors::class,
    ];

}
