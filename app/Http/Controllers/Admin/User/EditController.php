<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\User;

use Domain\Auth\Models\User;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke(User $user): View
    {
        return view('admin.user.edit', compact('user'));
    }
}
