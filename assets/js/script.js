document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector("header");
    const headerLinks = document.querySelectorAll(
        "header a, header .dropdown-toggle"
    );
    const hero = document.querySelector(".hero");

    function updateHeaderStyle() {
        // Calculate when we've scrolled past the hero
        if (
            hero &&
            window.scrollY >
                hero.offsetTop + hero.offsetHeight - header.offsetHeight
        ) {
            header.classList.add("scrolled");
            headerLinks.forEach((link) => {
                link.style.color = "#000"; // Change to black when scrolled
            });
        } else {
            header.classList.remove("scrolled");
            headerLinks.forEach((link) => {
                link.style.color = ""; // Reset to default color
            });
        }
    }

    // Initial check
    updateHeaderStyle();

    // Add scroll event listener
    window.addEventListener("scroll", updateHeaderStyle);
});
