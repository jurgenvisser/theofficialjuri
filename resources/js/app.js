import './bootstrap';
import './config/theme.js';
import './config/theme-images.js';
import './utils/mobile-menu.js';
import './utils/navbar-animations.js';
import { setCookie, getCookie } from './services/cookie.js';
import { setTheme } from './config/theme.js';
import { handleFlippedTheme } from './config/theme-flipped.js';

function setCurrentYear() {
    const currentYearElement = document.getElementById('current-year');

    if (currentYearElement) {
        currentYearElement.textContent = new Date().getFullYear();
    }
}

function initRevealOnScroll() {
    const revealElements = document.querySelectorAll('.reveal');

    if (!revealElements.length) {
        return;
    }

    if (typeof window.IntersectionObserver !== 'function') {
        revealElements.forEach((el) => el.classList.add('active'));
        return;
    }

    const observerOptions = {
        threshold: 0.12,
        rootMargin: '0px 0px -50px 0px',
    };

    const revealCallback = (entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    };

    const observer = new IntersectionObserver(revealCallback, observerOptions);
    revealElements.forEach((el) => observer.observe(el));
}

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
    setCurrentYear();
    applyStoredThemeFromCookie();
    initRevealOnScroll();

    const themeToggleButtons = document.querySelectorAll('.theme-toggle');
    themeToggleButtons.forEach((button) => {
        button.addEventListener('click', toggleTheme);
    });
});
