
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
            @auth
                <span>
                    Здравствуйте, {{auth()->user()->userName}}! <br>
                    <a href="{{route('auth.profile')}}">Профиль</a>
                    <a href="{{route('auth.logout')}}">Выход из аккаунта</a>
                </span>
            @else
                <div class="forms">
                    <form method="GET" action="{{route('auth.login.do')}}" enctype="multipart/form-data">
                    <div><label for="login">Логин : </label><input id="login" name="login2" required placeholder="или почта/телефон"></div>
                    <div><label for="password">Пароль : </label><input id="password" name="password2" type="password"></div>
                    <a href="{{route('auth.register')}}">Регистрация</a>
                    <button type="submit">Войти</button>
                    </form>
                </div>
            @endauth
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
