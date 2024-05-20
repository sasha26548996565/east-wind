@extends('layouts.auth')

@section('content')
    <x-forms.auth-forms title='Восстановить пароль' action="{{ route('password.update') }}" method="POST">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
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

        <x-forms.text-input type='password' name='password_confirmation' :isError="$errors->has('password_confirmation')" placeholder='Подтвердите пароль'
            required></x-forms.text-input>
        @error('password_confirmation')
            <x-forms.error>
                {{ $message }}
            </x-forms.error>
        @enderror

        <x-forms.primary-button>
            Восстановить пароль
        </x-forms.primary-button>

        <x-slot:socialAuth></x-slot:socialAuth>
        <x-slot:buttons></x-slot:buttons>
    </x-forms.auth-forms>
@endsection