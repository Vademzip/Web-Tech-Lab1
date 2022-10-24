

let checkEmail = () => {
    let email = document.getElementById("emailAdress").value;
    if ((email == "vadim.sardarov@yandex.ru") && (checkPassword() == "1234")){
        alert("Вы ввели правильный логин и пароль.")
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