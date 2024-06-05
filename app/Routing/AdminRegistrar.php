<?php

declare(strict_types=1);

namespace App\Routing;

use Illuminate\Support\Facades\Route;
use App\Contracts\RouteRegistrarContract;
use Illuminate\Contracts\Routing\Registrar;
use App\Http\Controllers\Admin\User\EditController;
use App\Http\Controllers\Admin\User\IndexController;
use App\Http\Controllers\Admin\User\UpdateController;

final class AdminRegistrar implements RouteRegistrarContract
{
    public function map(Registrar $registrar): void
    {
        Route::middleware(['web', 'auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
            Route::name('user.')->prefix('user')->group(function () {
                Route::get('/', IndexController::class)->name('index');
                Route::get('/edit/{user}', EditController::class)->name('edit');
                Route::post('/update/{user}', UpdateController::class)->name('update');
            });
        });
    }
}
