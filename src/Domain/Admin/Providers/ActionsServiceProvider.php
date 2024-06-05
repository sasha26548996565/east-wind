<?php

declare(strict_types=1);

namespace Domain\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Domain\Admin\Actions\User\UpdateUser;
use Domain\Admin\Contracts\UpdateUserContract;

class ActionsServiceProvider extends ServiceProvider
{
    public array $bindings = [
        UpdateUserContract::class => UpdateUser::class
    ];
}
