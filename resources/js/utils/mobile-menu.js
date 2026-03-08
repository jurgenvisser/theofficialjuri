const menuToggleButton = document.getElementById('hamburger-icon');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuPanel = document.getElementById('mobile-menu-panel');
const mobileMenuBackdrop = document.querySelector('[data-mobile-menu-backdrop]');

if (menuToggleButton && mobileMenu && mobileMenuPanel) {
    const openIcon = menuToggleButton.querySelector('[data-mobile-menu-open-icon]');
    const closeIcon = menuToggleButton.querySelector('[data-mobile-menu-close-icon]');
    const openClasses = ['opacity-100', 'pointer-events-auto'];
    const closedClasses = ['opacity-0', 'pointer-events-none'];
    const panelOpenClasses = ['translate-y-0', 'scale-100'];
    const panelClosedClasses = ['translate-y-4', 'scale-[0.98]'];

    let isOpen = false;

    function syncButtonState(open) {
        menuToggleButton.setAttribute('aria-expanded', open ? 'true' : 'false');
        mobileMenu.setAttribute('aria-hidden', open ? 'false' : 'true');

        if (openIcon && closeIcon) {
            openIcon.classList.toggle('hidden', open);
            closeIcon.classList.toggle('hidden', !open);
        }
    }

    function openMenu() {
        if (isOpen) {
            return;
        }

        isOpen = true;
        mobileMenu.classList.remove('hidden');

        requestAnimationFrame(() => {
            mobileMenu.classList.remove(...closedClasses);
            mobileMenu.classList.add(...openClasses);
            mobileMenuPanel.classList.remove(...panelClosedClasses);
            mobileMenuPanel.classList.add(...panelOpenClasses);
        });

        syncButtonState(true);
    }

    function closeMenu(immediate = false) {
        if (!isOpen && !immediate) {
            return;
        }

        isOpen = false;
        mobileMenu.classList.remove(...openClasses);
        mobileMenu.classList.add(...closedClasses);
        mobileMenuPanel.classList.remove(...panelOpenClasses);
        mobileMenuPanel.classList.add(...panelClosedClasses);
        syncButtonState(false);

        const hideMenu = () => {
            if (!isOpen) {
                mobileMenu.classList.add('hidden');
            }
        };

        if (immediate) {
            hideMenu();
            return;
        }

        window.setTimeout(hideMenu, 300);
    }

    menuToggleButton.addEventListener('click', () => {
        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    mobileMenuBackdrop?.addEventListener('click', () => {
        closeMenu();
    });

    mobileMenu.querySelectorAll('a[href]').forEach((link) => {
        link.addEventListener('click', () => {
            closeMenu();
        });
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && isOpen) {
            closeMenu();
        }
    });

    window.addEventListener('resize', () => {
        if (window.matchMedia('(min-width: 768px)').matches) {
            closeMenu(true);
        }
    });

    syncButtonState(false);
}
