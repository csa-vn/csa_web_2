document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.container');
    const sections = document.querySelectorAll('.section');
    let currentSection = 0;
    let isScrolling = false;
    
    // Prevent default scroll behavior
    container.addEventListener('wheel', function(e) {
        e.preventDefault();
        
        if (!isScrolling) {
            isScrolling = true;
            
            // Determine scroll direction
            if (e.deltaY > 0 && currentSection < sections.length - 1) {
                // Scroll down
                currentSection++;
            } else if (e.deltaY < 0 && currentSection > 0) {
                // Scroll up
                currentSection--;
            }
            
            // Scroll to the current section
            sections[currentSection].scrollIntoView();
            
            // Reset scrolling after animation completes
            setTimeout(() => {
                isScrolling = false;
            }, 800);
        }
    }, { passive: false });
    
    // Handle keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowDown' && currentSection < sections.length - 1) {
            e.preventDefault();
            currentSection++;
            sections[currentSection].scrollIntoView({ behavior: 'smooth' });
        } else if (e.key === 'ArrowUp' && currentSection > 0) {
            e.preventDefault();
            currentSection--;
            sections[currentSection].scrollIntoView({ behavior: 'smooth' });
        }
    });
});
