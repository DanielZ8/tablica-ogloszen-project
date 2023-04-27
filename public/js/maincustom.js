let hamburger = document.querySelector(".hamburger");
let nav = document.querySelector(".nav-center");
    hamburger.onclick = function() {
        nav.classList.toggle("open");
    }