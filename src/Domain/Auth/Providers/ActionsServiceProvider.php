<?php

declare(strict_types=1);

namespace Domain\Auth\Providers;

use Domain\Auth\Actions\RegisterUser;
use Illuminate\Support\ServiceProvider;
use Domain\Auth\Contracts\RegisterUserContract;

class ActionsServiceProvider extends ServiceProvider
{
    public array $bindings = [
        RegisterUserContract::class => RegisterUser::class
    ];
}
