<?php

declare(strict_types=1);

namespace App\Routing;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotController;
use App\Contracts\RouteRegistrarContract;
use Illuminate\Contracts\Routing\Registrar;

final class BotRegistrar implements RouteRegistrarContract
{
    public function map(Registrar $registrar): void
    {
        Route::middleware(['web', 'auth', 'verified'])->group(function () {
            Route::name('bot.')->prefix('bot')->controller(BotController::class)->group(function () {
                Route::get('/', 'renderPage')->name('index');
                Route::post('/send-message', 'sendMessage')->name('sendMessage');
            });
        });
    }
}
