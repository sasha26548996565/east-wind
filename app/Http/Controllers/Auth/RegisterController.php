<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Domain\Auth\DTOs\RegisterUserDTO;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Domain\Auth\Contracts\RegisterUserContract;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/';

    private RegisterUserContract $registerUser;

    public function __construct(RegisterUserContract $registerUser)
    {
        $this->middleware('guest');

        $this->registerUser = $registerUser;
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        $user = ($this->registerUser)(RegisterUserDTO::formRequest($data));
        return $user;
    }
}
