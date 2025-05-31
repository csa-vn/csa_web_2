// Change header background when scrolling
document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector("header");
    const headerLinks = document.querySelectorAll(
        "header a, header .dropdown-toggle"
    );

    window.addEventListener("scroll", function () {
        // Change header color after scrolling past the hero section
        // Assuming hero/first image section is approximately 500px tall
        if (window.scrollY > 500) {
            headerLinks.forEach((link) => {
                link.style.color = "#000"; // Change to black when scrolled
            });
        } else {
            headerLinks.forEach((link) => {
                link.style.color = ""; // Reset to default color
            });
        }
    });
});
