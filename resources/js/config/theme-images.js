// Define a mapping of IDs to theme-specific image paths
const themeImages = {
    'theme-image-homepage-logo-full': {
        primary: '/images/photos/profile-picture.PNG',
        secondary: '/images/photos/alternative-profile-picture.PNG',
    },
    'theme-image-contact-logo-full': {
        primary: '/images/photos/alternative-profile-picture.PNG',
        secondary: '/images/photos/profile-picture.PNG',
    },
    // Add more images as needed
};

// Function to update images based on theme
export function updateThemeImage(theme) {
    Object.entries(themeImages).forEach(([id, paths]) => {
        const imageElement = document.getElementById(id);

        if (imageElement) {
            // Update the image's `src` or `href` attribute based on the theme
            imageElement.setAttribute('href', paths[theme]); // Use `src` if it's an <img> element
        }
    });
}