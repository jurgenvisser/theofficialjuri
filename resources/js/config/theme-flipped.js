export function handleFlippedTheme() {
    // Get all elements with the 'theme-flipped' class
    const elementsToToggle = document.querySelectorAll('.theme-flipped');

    elementsToToggle.forEach((el) => {
        // Check if the element has the 'text-colorSecondary' class
        if (el.classList.contains('text-colorSecondary')) {
            // Change 'text-colorSecondary' to 'text-colorPrimary' when flipped
            el.classList.replace('text-colorSecondary', 'text-colorPrimary');
        } else if (el.classList.contains('text-colorPrimary')) {
            // If it's the 'text-colorPrimary', switch it to 'text-colorSecondary'
            el.classList.replace('text-colorPrimary', 'text-colorSecondary');
        }
    });
}