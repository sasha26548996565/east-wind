<?php

declare(strict_types=1);

namespace Domain\Admin\DTOs;

use Support\Traits\Makeable;

final class UpdateUserDTO
{
    use Makeable;

    public function __construct(
        public int $available_messages,
    ) {
    }

    public static function formRequest(array $data): UpdateUserDTO
    {
        return self::make(...array_intersect_key(
            $data,
            array_flip(['available_messages'])
        ));
    }
}
