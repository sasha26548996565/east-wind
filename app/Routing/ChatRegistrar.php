<?php

declare(strict_types=1);

namespace App\Routing;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Contracts\RouteRegistrarContract;
use Illuminate\Contracts\Routing\Registrar;

final class ChatRegistrar implements RouteRegistrarContract
{
    public function map(Registrar $registrar): void
    {
        // Route::middleware(['web', 'auth', 'verified'])->group(function () {
        //     Route::name('chat.')->prefix('chat')->controller(ChatController::class)->group(function () {
        //         Route::get('/', 'renderPage')->name('index');
        //         Route::post('/receive', 'receive')->name('receive');
        //         Route::post('/broadcast', 'broadcast')->name('broadcast');
        //     });
        // });
    }
}
