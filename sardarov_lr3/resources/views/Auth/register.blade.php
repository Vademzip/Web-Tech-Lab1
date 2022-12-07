@extends('layout')

@section('title')
    Регистрация
@endsection

@section('content')
    <body>
    <div class="registration_wrapper">
        <h1 align = "center">Регистрация</h1>
        <form method="post"  action="{{route('auth.register.do')}}" enctype="multipart/form-data">
            <div><label for="userName"> Имя</label><input type="text" name="userName" id="userName" value="Vadim"> </div>
            <div class="name-error" id="name-error">Имя должно содержать больше трёх символов</div>
            <div><label for="login2"> Логин</label><input type="text" name="login2" id="login2" required value="vadem_zip"></div>
            <div class="login-error" id="login-error">Логин должен содержать больше 8 символов</div>
            <div><label for="email"> Почта</label><input type="email" name="email" id="email" value="vadim.sardarov@yandex.ru"
                                                         required></div>
            <div><label for="dateOfBirth"> Дата рождения</label><input type="date" name="dateOfBirth" value="2002-05-26"
                                                                       id="dateOfBirth" checked></div>
            <div><label for="phone-mask"> Номер телефона</label><input type="text" name="phoneNumber"  id="phone-mask" required>
            </div>
            <div><label for="password2"> Введите пароль</label><input type="password" name="password2" id="password2" value="12344321" required>
            </div>
            <div class="password-error" id="password-error">Пароль должен содержать больше 8 символов</div>
            <div><label for="passwordRewrite"> Введите пароль</label>
            <input type="password" name="passwordRewrite" id="passwordRewrite" value="12344321" required></div>
            <div class="password2-error" id="password2-error">Пароли не совпадают</div>
            <div><label for="avatar"> Аватар профиля</label><input type="file" name="avatar" id="avatar"></div>
            <div class="citiesSearch">
                <div><input type="text" name="city" id="cities" placeholder="Ваш город..."></div>
                <ul class="list"></ul>
            </div>
            <div><label for="persData">Согласие на обработку персональных данных</label>
                <input type="checkbox" name="persData" id="persData" required></div>
            <div><label for="mailing"> Согласие на рассылку персональных предложений по указанному адресу почты</label><input
                    type="checkbox" name="mailing" id="mailing" checked></div>
            <button name="submitButton" type="submit">Отправить</button>
        </form>
    </div>

        <div style="color: red">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

    <script src="https://unpkg.com/imask"></script>
    <script src="../js/checkname.js"></script>
    </body>

    <script>
        var phoneMask = IMask(
            document.getElementById('phone-mask'), {
                mask: '+{7}(000)000-00-00'
            });

        const succsess = () =>{
            alert("Вы успешно зарегестрировались!")
        }

        // function checkPassword(form) {
        //   password1 = document.querySelector("input[name ='password']").value;
        //   password2 = document.querySelector("input[name ='passwordRewrite']").value;

        //   // If password not entered
        //   if (password1 == '')
        //     alert("Пожалуйста, введите пароль");
        //   // If confirm password not entered
        //   else if (password2 == '')
        //     alert("Пожалуйста, подтвердите ваш пароль");

        //   // If Not same return False.
        //   else if (password1 != password2) {
        //     alert("Пароль введен неправильно!")
        //     return false;
        //   }

        //   // If same return True.
        //   else {
        //     alert("Пароль был введён правильно!")
        //     return true;
        //   }

        // }
    </script>

    <script>
        let cities = [
            "Москва",
            "Санкт-Петербург",
            "Екатеринбург",
            "Уфа",
            "Омск",
            "Томск",
            "Краснодар",
            "Новосибирск",
            "Тула",
            "Калуга",
            "Ростов-На-Дону",
            "Архангельск",
            "Астрахань",
            "Хабаровск",
            "Владивосток",
            "Тюмень",
            "Сургут",
            "Сочи",
            "Элиста",
            "Махачкала",
            "Грозный",
            "Дербент",
            "Дубна",
            "Подольск",
            "Ижевск",
            "Ульяновск",
            "Самара",
            "Рязань",
            "Камчатка",
        ]

        let sortedNames = cities.sort();

        let citiesInput = document.getElementById("cities")

        if (citiesInput) {
            citiesInput.addEventListener("keyup", (e) => {
                removeElements();
                for (let i of sortedNames) {
                    if ((i.toLowerCase().startsWith(citiesInput.value.toLowerCase())) && citiesInput.value != "") {
                        let listItem = document.createElement("li")
                        listItem.classList.add("list-items");
                        listItem.style.cursor = "pointer";
                        listItem.setAttribute("onclick", "displayNames('" + i + "')");
                        let word = "<b>" + i.substring(0, citiesInput.value.length) + "</b>";
                        word += i.substring(citiesInput.value.length);
                        listItem.innerHTML = word;
                        document.querySelector(".list").appendChild(listItem);
                    }

                }
            })
        }

        function displayNames(value) {
            citiesInput.value = value;
            removeElements();
        }

        function removeElements() {
            let items = document.querySelectorAll(".list-items");
            items.forEach((item) => {
                item.remove();
            });
        }

    </script>
@endsection
