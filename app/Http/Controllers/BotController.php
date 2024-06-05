<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\Auth\Models\User;
use Domain\Bot\DTOs\MessageDTO;
use Illuminate\Contracts\View\View;
use Services\Openai\GPTBotApiContract;
use App\Http\Requests\Bot\MessageRequest;
use App\View\ViewModels\MessageViewModel;
use Domain\Bot\Contracts\CreateMessageContract;
use Symfony\Component\HttpFoundation\JsonResponse;

class BotController extends Controller
{
    public function __construct(
        private GPTBotApiContract $gptBotApi,
        private MessageViewModel $messageViewModel
    ) {
    }

    public function renderPage(): View
    {
        return view('bot.index');
    }

    public function sendMessage(MessageRequest $request, CreateMessageContract $action): JsonResponse
    {
        $params = $request->validated();
        $user = User::findOrFail(auth()->user()->id);

        if ($user->available_messages <= 0) {
            throw new \Exception('Доступных сообщений нет!');
        }

        $message = $this->gptBotApi->sendMessage($params['message']);

        $action(MessageDTO::formRequest([
            'message' => $params['message'],
            'user_id' => $user->id,
            'is_user' => true
        ]));

        $action(MessageDTO::formRequest([
            'message' => $message,
            'user_id' => $user->id,
            'is_user' => false
        ]));

        return response()->json([
            'message' => $message
        ]);
    }

    public function getMessages(): JsonResponse
    {
        return $this->messageViewModel->toResponse(request());
    }

    public function getAvailableMessagesCount(): JsonResponse
    {
        return response()->json([
            'count' => auth()->user()->available_messages
        ]);
    }
}
