<?php

declare(strict_types=1);

namespace Domain\Bot\Providers;

use Illuminate\Support\ServiceProvider;

class BotServiceProvider extends ServiceProvider
{
    public function boot(): void
    {

    }

    public function register(): void
    {
        $this->app->register(
            ActionsServiceProvider::class
        );
    }
}
