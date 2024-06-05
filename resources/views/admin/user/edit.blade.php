@extends('layouts.app')

@section('content')
    <x-forms.auth-forms title='Редактировать' action="{{ route('admin.user.update', auth()->user()) }}" method="POST">
        @csrf

        <x-forms.text-input type='email' value="{{ $user->email }}" readonly placeholder='Email'></x-forms.text-input>

        <x-forms.text-input type='number' name='available_messages' :isError="$errors->has('available_messages')"
            placeholder='Доступные сообщения' value="{{ $user->available_messages }}" required></x-forms.text-input>
        @error('available_messages')
            <x-forms.error>
                {{ $message }}
            </x-forms.error>
        @enderror

        <x-forms.primary-button>
            Редактировать
        </x-forms.primary-button>

        <x-slot:buttons>
        </x-slot:buttons>
    </x-forms.auth-forms>
@endsection