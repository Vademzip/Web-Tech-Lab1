let specsButton = document.getElementsByClassName("specsButton");
let reviewButton = document.getElementsByClassName("rewiewbutton");
let specsText = document.getElementsByClassName("specsText");
let reviewText = document.getElementsByClassName("rewiewText");
let openedpage = 0;
console.log(specsButton);
console.log(reviewButton);



const showSpecs = () => {
    if (openedpage === 1) {
        specsText[0].classList.toggle("hide")
        reviewText[0].classList.toggle("show")
        specsButton[0].classList.toggle("unactive")
        reviewButton[0].classList.toggle("active")
        openedpage = 0;
    }
}

const showRewiew = () => {
    if (openedpage === 0) {
        specsText[0].classList.toggle('hide')
        reviewText[0].classList.toggle("show")
        specsButton[0].classList.toggle("unactive")
        reviewButton[0].classList.toggle("active")
        openedpage = 1;
    }
}

specsButton[0].addEventListener('click', showSpecs);
reviewButton[0].addEventListener('click', showRewiew);