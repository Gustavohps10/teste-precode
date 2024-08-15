let header = document.querySelector("header");

window.addEventListener("scroll", (event) => {
    if (window.scrollY > 15) {
        header.classList.add("active");
        return;
    }

    header.classList.remove("active")

});