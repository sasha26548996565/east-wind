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
        $messages = Message::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->limit(20)->get();
        $text = 'Последнии проблемы которые писал подросток:
            (учитывай их и не спрашивай заного что случилось если он уже описал что у него за проблема)';

        foreach ($messages as $message) {
            if ($message->is_user) {
                $text .= '...' . $message->message;
            }
        }

        return $text;
    }
}
