import './utils/mobile-menu.js';

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

document.addEventListener('DOMContentLoaded', () => {
    initRevealOnScroll();
});
