@extends('layouts.auth')

@section('content')
    @if (session('resent'))
        <div class="bg-pink text-center text-white">
            Ссылка с подтверждением отправлена вам на почту!
        </div>
    @endif

    <x-forms.auth-forms title='Подтверждение почты' action="{{ route('verification.resend') }}" method="POST">
        @csrf

        <x-forms.primary-button>
            Отправить ссылку заново
        </x-forms.primary-button>

        <x-slot:buttons>
        </x-slot:buttons>
    </x-forms.auth-forms>
@endsection
