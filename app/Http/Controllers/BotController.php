<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\Bot\MessageRequest;
use Symfony\Component\HttpFoundation\JsonResponse;

class BotController extends Controller
{
    public function renderPage(): View
    {
        return view('bot.index');
    }

    public function sendMessage(MessageRequest $request): JsonResponse
    {
        $params = $request->validated();

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('openai.token')
        ])->post('https://api.openai.com/v1/engines/gpt-3.5-turbo/completions', [
            'prompt' => $params['message'],
            'temperature' => 0.2,
            'max_tokens' => 2000
        ]);

        $message = $response->json();

        return response()->json([
            'message' => $message
        ]);
    }
}
