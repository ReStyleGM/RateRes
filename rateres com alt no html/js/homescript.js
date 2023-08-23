const coiso = document.querySelector(".coiso");
const menu = document.querySelector(".menu");

coiso.addEventListener("click",() =>{
    coiso.classList.toggle("active");
    menu.classList.toggle("active");
})