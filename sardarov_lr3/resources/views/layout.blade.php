<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/registrationAccount.css" rel="stylesheet" >
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <table class="header-table lock-padding">
        <td><a href="{{route('static_page','home')}}">
                <div style="text-align: center;"><img src="https://www.gestion.ru/wp-content/uploads/2020/09/logo6.svg" alt=""></div>
            </a></td>
        <td class="siteName">Гестион</td>
        <td>
            <div class="forms">
                <form method="GET" action="{{route('auth.login.do')}}">
                <div><label for="login">Логин : </label><input id="login" name="login" required placeholder="или почта/телефон"></div>
                <div><label for="password">Пароль : </label><input id="password" name="password" type="password"></div>
            </div>
            <div class="reglogButtons">
                <a href="{{route('auth.register')}}">Регистрация</a>
                <button>Войти</button>
            </div>
            </form>
        </td>
    </table>

    <table class="underHeader-table lock-padding">
        <td><a href="{{route('static_page','home')}}">Главная</a></td>
        <td><a href="{{route('static_page','about-us')}}">История фирмы</a></td>
        <td><a href="{{route('static_page','staff')}}">Сотрудники</a></td>
        <td><a href="{{route('static_page','news')}}">Новости и Статьи</a></td>
        <td><a href="{{route('static_page','registration')}}">Регистрация фирм</a></td>
    </table>
                @yield('content')
    </body>
</html>
