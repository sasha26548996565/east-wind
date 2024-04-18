<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;

class ChatController extends Controller
{
    public function renderPage(): View
    {
        return view('chat.index');
    }
}
