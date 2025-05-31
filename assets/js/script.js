// Change header background when scrolling
window.addEventListener("scroll", function () {
    const header = document.querySelector(".header");
    if (window.scrollY > 50) {
        header.style.backgroundColor = "rgba(255, 255, 255, 0.9)";
        header.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.1)";
    } else {
        header.style.backgroundColor = "transparent";
        header.style.boxShadow = "none";
    }
});

