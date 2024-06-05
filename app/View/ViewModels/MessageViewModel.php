<?php

namespace App\View\ViewModels;

use Domain\Bot\Models\Message;
use Spatie\ViewModels\ViewModel;
use Illuminate\Database\Eloquent\Collection;

class MessageViewModel extends ViewModel
{
    public function messages(): Collection
    {
        return Message::where('user_id', auth()->user()->id)->get();
    }

    public function getLastMessagesInText(): string
    {
        $messages = Message::where('user_id', auth()->user()->id)->limit(10)->get();
        $text = '';

        foreach ($messages as $message) {
            if ($message->is_user) {
                $text .= ' Сообщение подростка: ' . $message->message;
            } else {
                $text .= ' Твое сообщение: ' . $message->message;
            }
        }

        return $text;
    }
}
