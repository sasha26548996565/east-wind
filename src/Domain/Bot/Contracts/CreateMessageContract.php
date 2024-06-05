<?php

declare(strict_types=1);

namespace Domain\Bot\Contracts;

use Domain\Bot\DTOs\MessageDTO;

interface CreateMessageContract
{
    public function __invoke(MessageDTO $messageDTO): void;
}
