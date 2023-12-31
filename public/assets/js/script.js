const humburger = document.querySelector(".humburger");
const humburgerLine1 = document.querySelector(".humburgerLine1");
const humburgerLine2 = document.querySelector(".humburgerLine2");
const humburgerLine3 = document.querySelector(".humburgerLine3");
const navList = document.querySelector(".nav-list");

humburger.addEventListener("click", () => {
    navList.classList.toggle("-translate-y-[100vh]");
    humburgerLine1.classList.toggle("w-[25px]");
    humburgerLine2.classList.toggle("w-[15px]");
    humburgerLine3.classList.toggle("w-[30px]");

    humburgerLine1.classList.toggle("w-[30px]");
    humburgerLine2.classList.toggle("w-[25px]");
    humburgerLine3.classList.toggle("w-[15px]");
});
