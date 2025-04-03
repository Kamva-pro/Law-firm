document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;
    
    counters.forEach(counter => {
        const target = +counter.getAttribute('data-count');
        const count = +counter.innerText;
        const increment = target / speed;
        
        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 1);
        } else {
            counter.innerText = target;
        }
        
        function updateCount() {
            const count = +counter.innerText;
            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            const icon = this.querySelector('i');
            if (mobileMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        document.querySelectorAll('.mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                mobileMenuBtn.querySelector('i').classList.remove('fa-times');
                mobileMenuBtn.querySelector('i').classList.add('fa-bars');
            });
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.testimonial-slide');
    const indicators = document.querySelectorAll('.indicator');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentIndex = 0;
    
    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
        
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === index);
        });
    }
    
    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }
    
    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    }
    

    let slideInterval = setInterval(nextSlide, 5000);
    
    const carousel = document.querySelector('.testimonial-carousel');
    carousel.addEventListener('mouseenter', () => clearInterval(slideInterval));
    carousel.addEventListener('mouseleave', () => {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 5000);
    });
    
    nextBtn.addEventListener('click', () => {
        nextSlide();
        clearInterval(slideInterval);
    });
    
    prevBtn.addEventListener('click', () => {
        prevSlide();
        clearInterval(slideInterval);
    });
    
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentIndex = index;
            showSlide(currentIndex);
            clearInterval(slideInterval);
        });
    });
    
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight') {
            nextSlide();
            clearInterval(slideInterval);
        } else if (e.key === 'ArrowLeft') {
            prevSlide();
            clearInterval(slideInterval);
        }
    });
});



document.addEventListener('DOMContentLoaded', function () {
    const typingElements = document.querySelectorAll('.typing');

    typingElements.forEach(function (element) {
        const textContent = element.textContent.trim();  
        element.textContent = ''; // Clear existing content

        let charIndex = 0;

        function typeCharacter() {
            if (charIndex < textContent.length) {
                element.textContent += textContent[charIndex];  
                charIndex++;

                setTimeout(typeCharacter, 100); 
            }
        }

        typeCharacter();  // Start typing animation
    });
});







window.addEventListener("scroll", function () {
    const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
    document.getElementById("progress-bar").style.width = scrolled + "%";
});



document.addEventListener('DOMContentLoaded', function() {
  // Configuration
  const animationConfig = {
    root: null, // uses the viewport
    rootMargin: '0px',
    threshold: 0.1 // 10% of the element must be visible
  };

  // Animation classes - add these to your CSS
  const animationClasses = {
    fadeIn: 'fade-in-animation',
    slideUp: 'slide-up-animation',
    slideLeft: 'slide-left-animation',
    slideRight: 'slide-right-animation',
    zoomIn: 'zoom-in-animation',
    visible: 'animation-visible'
  };

  // Add these styles to your CSS
  const style = document.createElement('style');
  style.textContent = `
    /* Base animation styles */
    .fade-in-animation {
      opacity: 0;
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    
    .slide-up-animation {
      opacity: 0;
      transform: translateY(120px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    
    .slide-left-animation {
      opacity: 0;
      transform: translateX(-120px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    
    .slide-right-animation {
      opacity: 0;
      transform: translateX(120px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    
    .zoom-in-animation {
      opacity: 0;
      transform: scale(0.95);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    
    /* Visible state */
    .animation-visible {
      opacity: 1;
      transform: translateY(0) translateX(0) scale(1);
    }
    
    /* Mobile optimizations */
    @media (max-width: 768px) {
      .slide-up-animation,
      .slide-left-animation,
      .slide-right-animation {
        transform: translateY(100px);
      }
      
      .zoom-in-animation {
        transform: scale(0.98);
      }
    }
  `;
  document.head.appendChild(style);

  // Initialize Intersection Observer
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add(animationClasses.visible);
        
        // Optional: Unobserve after animation to improve performance
        observer.unobserve(entry.target);
      }
    });
  }, animationConfig);

  // Find all elements with animation classes and observe them
  const animatableElements = document.querySelectorAll(`
    .${animationClasses.fadeIn},
    .${animationClasses.slideUp},
    .${animationClasses.slideLeft},
    .${animationClasses.slideRight},
    .${animationClasses.zoomIn}
  `);

  animatableElements.forEach(element => {
    observer.observe(element);
  });

  // Handle resize events for responsive adjustments
  let resizeTimer;
  window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      // Re-check visibility on resize (especially important for mobile orientation changes)
      animatableElements.forEach(element => {
        const bounds = element.getBoundingClientRect();
        const isVisible = bounds.top < window.innerHeight && bounds.bottom > 0;
        if (isVisible) {
          element.classList.add(animationClasses.visible);
        }
      });
    }, 250);
  });
});