document.addEventListener('DOMContentLoaded', function() {
    // Set current year in copyright
    document.getElementById('current-year').textContent = new Date().getFullYear();
    
    // Only apply accordion on mobile devices
    if (window.innerWidth <= 768) {
        const footerHeadings = document.querySelectorAll('.footer-heading');
        
        footerHeadings.forEach(heading => {
            heading.addEventListener('click', function() {
                // Toggle active class on the heading
                this.classList.toggle('active');
                
                // Toggle the visibility of the links
                const links = this.nextElementSibling;
                links.classList.toggle('active');
                
                // Close other open sections
                footerHeadings.forEach(otherHeading => {
                    if (otherHeading !== heading) {
                        otherHeading.classList.remove('active');
                        otherHeading.nextElementSibling.classList.remove('active');
                    }
                });
            });
        });
    }
    
    // Fix for Font Awesome icons
    // This is needed because the provided code uses Font Awesome classes differently
    document.querySelectorAll('.social-icons a').forEach(icon => {
        const iconClass = icon.querySelector('i').className;
        const newClass = iconClass.replace('fas fa-', 'fas fa-');
        icon.querySelector('i').className = newClass;
    });
});

// Ensure footer is responsive when window is resized
window.addEventListener('resize', function() {
    const isMobile = window.innerWidth <= 768;
    const footerLinks = document.querySelectorAll('.footer-links');
    
    if (!isMobile) {
        // On desktop, make sure all link sections are visible
        footerLinks.forEach(links => {
            links.classList.remove('active');
            links.style.display = 'block';
        });
        
        // Remove active class from all headings
        document.querySelectorAll('.footer-heading').forEach(heading => {
            heading.classList.remove('active');
        });
    } else {
        // On mobile, hide all link sections
        footerLinks.forEach(links => {
            links.style.display = 'none';
        });
    }
});

// Newsletter form submission (prevent default for demo)
document.addEventListener('DOMContentLoaded', function() {
    const newsletterForm = document.querySelector('.newsletter-form form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            alert('Thank you for subscribing with: ' + email);
            this.reset();
        });
    }
});