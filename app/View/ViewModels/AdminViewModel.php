<?php

namespace App\View\ViewModels;

use Domain\Auth\Models\User;
use Spatie\ViewModels\ViewModel;
use Illuminate\Database\Eloquent\Collection;

class AdminViewModel extends ViewModel
{
    public function __construct(
        public User $user
    ) {
    }

    public function users(): Collection
    {
        return User::where('id', '!=', $this->user->id)->get();
    }
}
