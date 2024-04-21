@extends('layouts.auth')

@section('content')
    <x-forms.auth-forms title='Вход в аккаунт' action="{{ route('login') }}" method="POST">
        @csrf

        <x-forms.text-input type='email' name='email' value="{{ old('email') }}" :isError="$errors->has('email')" placeholder='Email'
            required></x-forms.text-input>
        @error('email')
            <x-forms.error>
                {{ $message }}
            </x-forms.error>
        @enderror

        <x-forms.text-input type='password' name='password' :isError="$errors->has('password')" placeholder='Пароль'
            required></x-forms.text-input>
        @error('password')
            <x-forms.error>
                {{ $message }}
            </x-forms.error>
        @enderror

        <x-forms.primary-button>
            Войти
        </x-forms.primary-button>

        <x-slot:buttons>
            <div class="space-y-3 mt-5">
                <div class="text-xxs md:text-xs"><a href="{{ route('password.request') }}"
                        class="text-white hover:text-white/70 font-bold">Забыли пароль?</a></div>
                <div class="text-xxs md:text-xs"><a href="{{ route('register') }}"
                        class="text-white hover:text-white/70 font-bold">Регистрация</a></div>
            </div>
        </x-slot:buttons>
    </x-forms.auth-forms>
@endsection