document.addEventListener("DOMContentLoaded", () => {
    let dropown = document.querySelectorAll(".dropdown");
    dropown.forEach(el => {
        let btn = el.querySelector(".dropdown__toggle");
        btn.addEventListener("click", () => {
            el.classList.toggle("dropdown--open")
        })
    });
    let burger = document.querySelector(".topbar__toggle")
    let headerBottom = document.querySelector(".header__bottom")
    burger.addEventListener("click",()=>{
        headerBottom.classList.toggle("header__bottom--open")
    })
});
console.log(el)