<?php

declare(strict_types=1);

namespace Domain\Bot\Providers;

use Domain\Bot\Actions\CreateMessage;
use Illuminate\Support\ServiceProvider;
use Domain\Bot\Contracts\CreateMessageContract;

class ActionsServiceProvider extends ServiceProvider
{
    public array $bindings = [
        CreateMessageContract::class => CreateMessage::class
    ];
}
