<?php

declare(strict_types=1);

namespace App\Providers;

use Services\Openai\GPTBotApi;
use Services\Openai\GPTBotApiContract;
use Illuminate\Support\ServiceProvider;
use Domain\Bot\Providers\BotServiceProvider;
use Domain\Auth\Providers\AuthServiceProvider;
use Domain\Admin\Providers\AdminServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(
            AuthServiceProvider::class
        );

        $this->app->register(
            AdminServiceProvider::class
        );

        $this->app->register(
            BotServiceProvider::class
        );

        $this->app->bind(GPTBotApiContract::class, GPTBotApi::class);
    }
}
