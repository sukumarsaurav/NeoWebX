const drawerToggle = document.getElementById('drawerToggle');
const drawer = document.querySelector('.side-drawer');
const drawerOverlay = document.querySelector('.drawer-overlay');
const drawerClose = document.querySelector('.drawer-close');

drawerToggle.addEventListener('click', function() {
    drawer.classList.add('open');
    drawerOverlay.classList.add('open');
    document.body.style.overflow = 'hidden';
});

function closeDrawer() {
    drawer.classList.remove('open');
    drawerOverlay.classList.remove('open');
    document.body.style.overflow = '';
}

drawerClose.addEventListener('click', closeDrawer);
drawerOverlay.addEventListener('click', closeDrawer);

// Mobile drawer dropdown toggles
const drawerDropdownToggles = document.querySelectorAll('.drawer-item.dropdown-toggle');

drawerDropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Toggle the submenu
        const submenu = this.nextElementSibling;
        
        if (submenu.style.display === 'block') {
            submenu.style.display = 'none';
            this.classList.remove('active');
        } else {
            // Close all other open submenus
            document.querySelectorAll('.drawer-submenu').forEach(menu => {
                if (menu !== submenu) {
                    menu.style.display = 'none';
                    menu.previousElementSibling.classList.remove('active');
                }
            });
            
            submenu.style.display = 'block';
            this.classList.add('active');
        }
    });
});

// Add padding to body to account for fixed navbar
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    const navbarHeight = navbar.offsetHeight;
    document.body.style.paddingTop = navbarHeight + 'px';
});