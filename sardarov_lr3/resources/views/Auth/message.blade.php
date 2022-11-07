@extends('layout')

@section('title')
    Сообщение
@endsection

@section('content')
    <h1>
        @if ($message == 'register_done')
            Успешная регистрация
        @elseif($message == 'register_done_but_auth_error')
            Успешная регистрация, но войти не удалось.
        @elseif($message == 'auth_error'){

        }
        @endif
    </h1>
@endsection
