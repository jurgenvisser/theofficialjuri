const nav = document.querySelector(".nav");
const links = nav.querySelectorAll("a");
const hoverBubble = document.querySelector(".bubble.hover");

// 1. URL LOGICA: Vervangt de handmatige selectedKey
function applySelectedFromURL() {
    const currentPath = window.location.pathname;
    
    links.forEach(link => {
        const linkPath = link.getAttribute("href");
        
        // Controleer of het pad overeenkomt
        const isHome = linkPath === "/" && currentPath === "/";
        const isSubPage = linkPath !== "/" && currentPath.startsWith(linkPath);

        if (isHome || isSubPage) {
            link.classList.add("is-selected");
        } else {
            link.classList.remove("is-selected");
        }
    });
}

// Init
applySelectedFromURL();

// --- JOUW ORIGINELE HOVER LOGICA (ONGEWIJZIGD) ---
function clearHovering() {
    links.forEach(l => l.classList.remove("hovering"));
}

// default: geen hover → stretch over hele nav
hoverBubble.style.positionAnchor = "--nav-container";

links.forEach((link) => {
    link.addEventListener("mouseenter", () => {
        clearHovering();
        link.classList.add("hovering");
        hoverBubble.style.positionAnchor = "--nav-hover";
    });
});

nav.addEventListener("mouseleave", () => {
    clearHovering();
    hoverBubble.style.positionAnchor = "--nav-container";
});