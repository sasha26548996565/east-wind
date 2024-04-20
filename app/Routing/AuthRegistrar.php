<?php

declare(strict_types=1);

namespace App\Routing;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Contracts\RouteRegistrarContract;
use Illuminate\Contracts\Routing\Registrar;

final class AuthRegistrar implements RouteRegistrarContract
{
    public function map(Registrar $registrar): void
    {
        Route::middleware('web')->group(function () {
            Auth::routes();
        });
    }
}
