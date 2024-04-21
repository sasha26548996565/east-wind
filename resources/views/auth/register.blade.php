@extends('layouts.auth')

@section('content')
    <x-forms.auth-forms title='Регистрация' action="{{ route('register') }}" method="POST">
        @csrf

        <x-forms.text-input type='text' name='name' value="{{ old('name') }}"
            isError="{{ isset($errors) ? $errors->has('name') : false }}" placeholder='Имя' required></x-forms.text-input>
        @if (isset($errors))
            @error('name')
                <x-forms.error>
                    {{ $message }}
                </x-forms.error>
            @enderror
        @endif

        <x-forms.text-input type='email' name='email' value="{{ old('email') }}"
            isError="{{ isset($errors) ? $errors->has('email') : false }}" placeholder='Email'
            required></x-forms.text-input>
        @if (isset($errors))
            @error('email')
                <x-forms.error>
                    {{ $message }}
                </x-forms.error>
            @enderror
        @endif

        <x-forms.text-input type='password' name='password'
            isError="{{ isset($errors) ? $errors->has('password') : false }}" placeholder='Пароль'
            required></x-forms.text-input>
        @if (isset($errors))
            @error('password')
                <x-forms.error>
                    {{ $message }}
                </x-forms.error>
            @enderror
        @endif

        <x-forms.text-input type='password' name='password_confirmation'
            isError="{{ isset($errors) ? $errors->has('password_confirmation') : false }}" placeholder='Подтвердите пароль'
            required></x-forms.text-input>
        @if (isset($errors))
            @error('password_confirmation')
                <x-forms.error>
                    {{ $message }}
                </x-forms.error>
            @enderror
        @endif

        <x-forms.primary-button>
            Зарегистрироваться
        </x-forms.primary-button>

        <x-slot:buttons>
            <div class="text-xxs md:text-xs">Есть аккаунт?
                <a href="{{ route('login') }}"
                    class="text-white hover:text-white/70 font-bold underline underline-offset-4">Войти</a>
            </div>
        </x-slot:buttons>

    </x-forms.auth-forms>
@endsection