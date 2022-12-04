@extends('layout')

@section('title')
    Успешная регистрация
@endsection

@section('content')
    Уважаемый, {!! Request::get('name') !!}, благодарим за регистрацию!
    Мы отправили вам на почту письмо, чтобы вы не забыли про <нас class=""></нас>
@endsection
