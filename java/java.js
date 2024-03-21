function toggleNav() {
    document.body.classList.toggle("nav-open")
}

document.querySelector(".nav-close").addEventListener("click", () => {
    toggleNav();
});