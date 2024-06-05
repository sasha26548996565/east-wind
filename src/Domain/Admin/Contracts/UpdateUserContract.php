<?php

declare(strict_types=1);

namespace Domain\Admin\Contracts;

use Domain\Auth\Models\User;
use Domain\Admin\DTOs\UpdateUserDTO;

interface UpdateUserContract
{
    public function __invoke(User $user, UpdateUserDTO $updateUserDTO): void;
}
