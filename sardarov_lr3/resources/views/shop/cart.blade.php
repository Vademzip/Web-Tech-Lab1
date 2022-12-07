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
        @elseif($message == 'auth_error')
            Неверный логин или пароль.
        @elseif($message == 'profile_updated'){
        Здрасьте. Профиль обновлён..
        }
        @elseif($message = 'access_denied')
            НЕТ ПРАВ!!!!!!!
        @endif
    </h1>
@endsection
