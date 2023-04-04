let hamburger = document.querySelector(".hamburger");
let nav = document.querySelector(".navbar");
    hamburger.onclick = function() {
        nav.classList.toggle("open");
    }