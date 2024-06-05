<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\View\ViewModels\AdminViewModel;

class IndexController extends Controller
{
    public function __invoke(): AdminViewModel
    {
        return (new AdminViewModel(Auth::user()))->view('admin.user.index');
    }
}
