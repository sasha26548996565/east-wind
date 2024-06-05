<x-mail::message>
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Упс!')
@else
# @lang('Добро пожаловать!')
@endif
@endif

{{-- Intro Lines --}}
@lang('Пожалуйста, нажмите на кнопку и подтвердите свой e-mail')

{{-- Action Button --}}
@isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'primary',
    };
?>
<x-mail::button :url="$actionUrl" :color="$color">
Подтвердить
</x-mail::button>
@endisset

@lang('С уважением'),<br>
{{ config('app.name') }}

{{-- Subcopy --}}
@isset($actionText)
<x-slot:subcopy>
@lang(
    "Если у вас возникли проблемы с кнопкой Подтвердить E-mail, то\n".
    'перейдите по этой ссылки:',
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
</x-slot:subcopy>
@endisset
</x-mail::message>
