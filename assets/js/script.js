document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".header");
    
    function updateHeaderStyle() {
        // Use a fixed threshold instead of calculating based on hero height
        if (window.scrollY > 100) { // Fixed 100px threshold
            header.classList.add("scrolled");
            console.log("Header scrolled at:", window.scrollY);
        } else {
            header.classList.remove("scrolled");
        }
    }
    
    // Initial check
    updateHeaderStyle();
    
    // Add scroll event listener without throttling for direct response
    window.addEventListener("scroll", updateHeaderStyle);
    
    // Force update on page load and after a short delay
    window.addEventListener("load", updateHeaderStyle);
    setTimeout(updateHeaderStyle, 500); // Extra check after 500ms
    
    // Log initial state
    console.log("Initial header class:", header.className);
});