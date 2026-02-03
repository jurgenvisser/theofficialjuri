import './bootstrap';
import './config/theme.js';
import './config/theme-images.js';
import './utils/mobile-menu.js';
import './utils/navbar-animations.js';
import { setCookie, getCookie } from './services/cookie.js';
import { setTheme } from './config/theme.js';
import { handleFlippedTheme } from './config/theme-flipped.js';

document.getElementById('current-year').textContent = new Date().getFullYear();

// Function to apply the stored theme from the cookie on page load
function applyStoredThemeFromCookie() {
    const currentTheme = getCookie("theme");
    
    if (currentTheme === "primary" || currentTheme === "secondary") {
        // Apply the correct theme
        setTheme(currentTheme);
    } else {
        // Default to primary if no theme is stored
        setTheme("primary");
    }

    // After the theme is applied, check for flipped theme elements
    handleFlippedTheme();  // Adjust flipped theme immediately after setting the theme
}

// Function to toggle the theme and store it in the cookie
function toggleTheme() {
    const currentTheme = getCookie("theme");
    const newTheme = currentTheme === "primary" ? "secondary" : "primary";
    
    // Set the new theme
    setTheme(newTheme);
    
    // Store the new theme in the cookie (encrypted)
    setCookie("theme", newTheme, 30);

    // Apply flipped theme logic after setting the new theme
    handleFlippedTheme();  // This will adjust text colors for flipped elements
}

// Event listener to handle the theme switching button click
document.addEventListener('DOMContentLoaded', () => {
    applyStoredThemeFromCookie();

    const themeToggleButtons = document.querySelectorAll('.theme-toggle');
    themeToggleButtons.forEach((button) => {
        button.addEventListener('click', toggleTheme);
    });
});