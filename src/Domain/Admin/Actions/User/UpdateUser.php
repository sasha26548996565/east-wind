<?php

declare(strict_types=1);

namespace Domain\Admin\Actions\User;

use Domain\Auth\Models\User;
use Domain\Admin\DTOs\UpdateUserDTO;
use Domain\Admin\Contracts\UpdateUserContract;

class UpdateUser implements UpdateUserContract
{
    public function __invoke(User $user, UpdateUserDTO $updateUserDTO): void
    {
        $user->update([
            'available_messages' => $updateUserDTO->available_messages
        ]);
    }
}
