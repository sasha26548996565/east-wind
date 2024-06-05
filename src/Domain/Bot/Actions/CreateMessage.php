<?php

declare(strict_types=1);

namespace Domain\Bot\Actions;

use Domain\Auth\Models\User;
use Domain\Bot\Models\Message;
use Domain\Bot\DTOs\MessageDTO;
use Domain\Bot\Contracts\CreateMessageContract;

class CreateMessage implements CreateMessageContract
{
    public function __invoke(MessageDTO $messageDTO): void
    {
        Message::create([
            'message' => $messageDTO->message,
            'user_id' => $messageDTO->user_id,
            'is_user' => $messageDTO->is_user
        ]);

        if ($messageDTO->is_user) {
            $this->decrementUserMessages($messageDTO->user_id);
        }
    }

    private function decrementUserMessages(int $userId): void
    {
        User::findOrFail($userId)
            ->decrement('available_messages');
    }
}
