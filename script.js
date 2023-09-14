const menuToggle = document.getElementById("menuToggle");
const navLinks = document.getElementById("navLinks");
const closeButton = document.getElementById("closeButton");

menuToggle.addEventListener("click", () => {
    navLinks.classList.add("show");
});

closeButton.addEventListener("click", () => {
    navLinks.classList.remove("show");
});
