        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Service Tab Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const serviceTabs = document.querySelectorAll('.service-tab');
            
            serviceTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs
                    serviceTabs.forEach(t => t.classList.remove('active'));
                    
                    // Add active class to clicked tab
                    this.classList.add('active');
                    
                    // Hide all service content
                    document.querySelectorAll('.service-content').forEach(content => {
                        content.classList.remove('active');
                    });
                    
                    // Show selected service content
                    const targetId = this.getAttribute('data-target');
                    document.getElementById(targetId).classList.add('active');
                });
            });
        });

        // Alert Close Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const closeButtons = document.querySelectorAll('.close-btn');
            
            closeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const alert = this.closest('.alert');
                    alert.style.display = 'none';
                });
            });
        });

        // Testimonials Carousel
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('.testimonials-track');
            
            // Only initialize carousel if the track element exists
            if (track) {
                const cards = document.querySelectorAll('.testimonial-card');
                const prevButton = document.querySelector('.prev-button');
                const nextButton = document.querySelector('.next-button');
                
                let currentIndex = 0;
                const cardCount = cards.length;
                
                // Set initial position
                updateCarousel();
                
                // Handle next button click
                if (nextButton) {
                    nextButton.addEventListener('click', function() {
                        currentIndex = (currentIndex + 1) % cardCount;
                        updateCarousel();
                    });
                }
                
                // Handle previous button click
                if (prevButton) {
                    prevButton.addEventListener('click', function() {
                        currentIndex = (currentIndex - 1 + cardCount) % cardCount;
                        updateCarousel();
                    });
                }
                
                function updateCarousel() {
                    const translateValue = -currentIndex * 100;
                    track.style.transform = `translateX(${translateValue}%)`;
                }
            }
        });
    