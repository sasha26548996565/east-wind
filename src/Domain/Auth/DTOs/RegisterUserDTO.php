<?php

declare(strict_types=1);

namespace Domain\Auth\DTOs;

use Support\Traits\Makeable;

final class RegisterUserDTO
{
    use Makeable;

    public function __construct(
        public string $name,
        public string $email,
        public string $password,
    )
    {

    }

    public static function formRequest(array $data): RegisterUserDTO
    {
        return self::make(...array_intersect_key(
            $data,
            array_flip(['name', 'email', 'password'])
        ));
    }
}
