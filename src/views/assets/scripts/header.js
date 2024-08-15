let header = document.querySelector("header");

window.addEventListener("scroll", (event) => {
    if (window.scrollY > 15) {
        header.classList.add("active");
        return;
    }

    header.classList.remove("active")
});

let sidebar = document.querySelector(".sidebar");

function openSidebar() {
    sidebar.classList.add("active")
}

function closeSidebar() {
    sidebar.classList.remove("active")
}