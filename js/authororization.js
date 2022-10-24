

let checkEmail = () => {
    let email = document.getElementById("emailAdress").value;
    if ((email == "vadim.sardarov@yandex.ru") && (checkPassword() == "1234")){
        alert("Функция не реализована,но мы вас пустим в личный кабинет")
        setTimeout(function(){
            window.location.href = "personalCabinet.html"
        },2000)
    } 
    else
        alert("Вы ввели неправильный логин или пароль.");
}

let checkPassword = () => {
    let password = document.getElementById("password").value;
    return password;
}