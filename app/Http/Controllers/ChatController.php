<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Events\MessageBroadcast;

class ChatController extends Controller
{
    public function renderPage(): View
    {
        return view('chat.index');
    }

    public function receive(Request $request): View
    {
        return view('chat.receive', ['message' => $request->get('message')]);
    }

    public function broadcast(Request $request): View
    {
        broadcast(new MessageBroadcast($request->getMessage()))->toOthers();
        
        return view('chat.broadcast', ['message' => $request->get('message')]);
    }
}
