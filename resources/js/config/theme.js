// Import de benodigde functies
import { generateSelectors, defaultOpacities, defaultColorClasses, defaultElementTypes } from '../utils/selectors';
import { updateThemeImage } from './theme-images.js';

export function setTheme(theme) {
    // We voegen de nieuwe bubble classes handmatig toe aan de selector lijst, 
    // anders worden deze elementen overgeslagen door de querySelectorAll.
    const customSelectors = '.bubblePrimary-hover, .bubbleSecondary-hover';
    const dynamicSelectors = generateSelectors(defaultColorClasses, defaultOpacities, defaultElementTypes);
    
    const elementsToToggle = [
        document.body,
        ...document.querySelectorAll(`${dynamicSelectors}, ${customSelectors}`),
    ];

    elementsToToggle.forEach((el) => {
        // 1. BEHANDEL DE BUBBLE CLASSES (Expliciet)
        if (theme === "primary") {
            if (el.classList.contains('bubbleSecondary-hover')) {
                el.classList.replace('bubbleSecondary-hover', 'bubblePrimary-hover');
            }
        } else {
            if (el.classList.contains('bubblePrimary-hover')) {
                el.classList.replace('bubblePrimary-hover', 'bubbleSecondary-hover');
            }
        }

        // 2. BEHANDEL DE DYNAMISCHE TAILWIND CLASSES
        defaultColorClasses.forEach((colorClass) => {
            defaultElementTypes.forEach((elementType) => {
                if (theme === "primary") {
                    // Naar Primary
                    if (el.classList.contains(`bg-${colorClass}`)) {
                        el.classList.replace(`bg-${colorClass}`, `bg-colorPrimary`);
                    }
                    defaultOpacities.forEach((opacity) => {
                        if (el.classList.contains(`bg-${colorClass}/${opacity}`)) {
                            el.classList.replace(`bg-${colorClass}/${opacity}`, `bg-colorPrimary/${opacity}`);
                        }
                        if (el.classList.contains(`border-${colorClass}/${opacity}`)) {
                            el.classList.replace(`border-${colorClass}/${opacity}`, `border-colorPrimary/${opacity}`);
                        }
                    });
                    if (el.classList.contains(`text-${colorClass}`)) {
                        el.classList.replace(`text-${colorClass}`, `text-colorPrimary`);
                    }
                    if (el.classList.contains(`border-${colorClass}`)) {
                        el.classList.replace(`border-${colorClass}`, `border-colorPrimary`);
                    }
                    if (el.classList.contains(`decoration-${colorClass}`)) {
                        el.classList.replace(`decoration-${colorClass}`, 'decoration-colorPrimary');
                    }
                    if (el.classList.contains('theme-secondary')) {
                        el.classList.replace('theme-secondary', 'theme-primary');
                    }
                } else {
                    // Naar Secondary
                    if (el.classList.contains(`bg-${colorClass}`)) {
                        el.classList.replace(`bg-${colorClass}`, `bg-colorSecondary`);
                    }
                    defaultOpacities.forEach((opacity) => {
                        if (el.classList.contains(`bg-${colorClass}/${opacity}`)) {
                            el.classList.replace(`bg-${colorClass}/${opacity}`, `bg-colorSecondary/${opacity}`);
                        }
                        if (el.classList.contains(`border-${colorClass}/${opacity}`)) {
                            el.classList.replace(`border-${colorClass}/${opacity}`, `border-colorSecondary/${opacity}`);
                        }
                    });
                    if (el.classList.contains(`text-${colorClass}`)) {
                        el.classList.replace(`text-${colorClass}`, `text-colorSecondary`);
                    }
                    if (el.classList.contains(`border-${colorClass}`)) {
                        el.classList.replace(`border-${colorClass}`, `border-colorSecondary`);
                    }
                    if (el.classList.contains(`decoration-${colorClass}`)) {
                        el.classList.replace(`decoration-${colorClass}`, 'decoration-colorSecondary');
                    }
                    if (el.classList.contains('theme-primary')) {
                        el.classList.replace('theme-primary', 'theme-secondary');
                    }
                }
            });
        });
    });

    updateThemeImage(theme);
}