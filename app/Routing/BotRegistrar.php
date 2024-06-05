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
        Route::middleware('web')->group(function () {
            Route::name('bot.')->prefix('bot')->middleware(['auth', 'verified'])->controller(BotController::class)->group(function () {
                Route::get('/', 'renderPage')->name('index');
                Route::get('/get-messages', 'getMessages')->name('getMessages');
                Route::get('/get-available-messages-count', 'getAvailableMessagesCount')->name('getAvailableMessagesCount');
                Route::post('/send-message', 'sendMessage')->name('sendMessage');
            });
        });
    }
}
