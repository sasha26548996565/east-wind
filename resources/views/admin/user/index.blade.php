@extends('layouts.app')

@section('content')
    @foreach ($users as $user)
        <div>
            <a href="{{ route('admin.user.edit', $user) }}">
                {{ $user->name }}
                {{ $user->email }} <hr>
            </a>
        </div>
    @endforeach
@endsection