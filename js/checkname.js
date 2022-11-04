let firstName = document.getElementById("userName");
let errors = document.getElementById("name-error")
let login = document.getElementById("login2");
let logerr = document.getElementById("login-error")
let pass1 = document.getElementById("password2")
let paserr = document.getElementById("password-error")
let pass2 = document.getElementById("passwordRewrite")
let paserr2 = document.getElementById("password2-error")
console.log(paserr2)

firstName.addEventListener('input',() =>{
    if (firstName.value.length <= 3){
        errors.classList.add("on")
    }
    else
    {
        errors.classList.remove("on")
    }
})

login.addEventListener('input',() =>{
    if (login.value.length <= 8){
        logerr.classList.add("on")
    }
    else
    {
        logerr.classList.remove("on")
    }
})

pass1.addEventListener('input',() =>{
    if (pass1.value.length <= 8){
        paserr.classList.add("on")
    }
    else
    {
        paserr.classList.remove("on")
    }
})

pass2.addEventListener('input',() =>{
    if (pass1.value != pass2.value){
        paserr2.classList.add("on")
    }
    else
    {
        paserr2.classList.remove("on")
    }
})





// firstName.addEventListener('blur',() =>{
//     if (firstName.value.length <= 3){
//         errors.classList.add("on")
//     }
//     else
//     {
//         errors.classList.remove("on")
//     }
// })

