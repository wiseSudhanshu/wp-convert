const hamburger = document.querySelector(".hamburger");
const navBar = document.querySelector(".navbar");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navBar.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navBar.classList.remove("active");
}))

let buttons = document.querySelectorAll(".subscribe");
const flashCard = document.getElementById("flash-card");

buttons.forEach((button) => {
    button.addEventListener('click', () => {
        flashCard.style.display = "block";
        let position = button.getBoundingClientRect();
        let x = position.left;
        let y = position.bottom;
        window.scrollTo(x, y);
    })
});

let starterButton = document.querySelector(".starter-subscribe");
starterButton.addEventListener("click", () => {
    flashCard.style.display = "block";
    let position = starterButton.getBoundingClientRect();
    let x = position.left;
    let y = position.bottom;
    window.scrollTo(x, y);
})

const cross = document.querySelector(".fa-xmark");
cross.addEventListener('click', () => {
    flashCard.style.display = "none";
})