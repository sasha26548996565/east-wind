<?php

declare(strict_types=1);

namespace Domain\Auth\Contracts;

use Domain\Auth\Models\User;
use Domain\Auth\DTOs\RegisterUserDTO;

interface RegisterUserContract
{
    public function __invoke(RegisterUserDTO $params): User;
}
