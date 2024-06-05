<?php

declare(strict_types=1);

namespace Domain\Bot\DTOs;

use Support\Traits\Makeable;

final class MessageDTO
{
    use Makeable;

    public function __construct(
        public string $message,
        public int $user_id,
        public bool $is_user,
    )
    {

    }

    public static function formRequest(array $data): MessageDTO
    {
        return self::make(...array_intersect_key(
            $data,
            array_flip(['message', 'user_id', 'is_user'])
        ));
    }
}
