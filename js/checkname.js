let firstName = document.getElementById("userName");
let errors = document.getElementById("name-error")
console.log(firstName.value)


firstName.addEventListener('focus',() =>{
    if (firstName.value.length <= 3){
        errors.classList.add("on")
    }
    else
    {
        errors.classList.remove("on")
    }
})

firstName.addEventListener('blur',() =>{
    if (firstName.value.length <= 3){
        errors.classList.add("on")
    }
    else
    {
        errors.classList.remove("on")
    }
})