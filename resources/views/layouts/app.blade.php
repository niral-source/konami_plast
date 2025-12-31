<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Konami Plast Engineering - PVC, UPVC & CPVC Pipe Manufacturer')</title>
    <meta name="description" content="@yield('description', 'Konami Plast Engineering is a leading manufacturer of high-quality PVC pipes and engineering solutions. Explore our wide range of products for industrial, agricultural, and plumbing needs.')">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @stack('styles')
    <style>
        /* Match original design styles */
        .txup {
            height: 336px;
            overflow: hidden;
            transition: all 0.8s ease;
        }
        
        .textup {
            padding-top: 250px;
            transition-duration: 0.8s;
        }
        
        .txup:hover .textup {
            padding-top: 0;
        }
        
        .txup:hover h2 {
            color: #105CAA;
        }
        
        .follow {
            color: #105CAA !important;
            font-size: 22px;
            font-weight: 900 !important;
            border: 2px solid #105caa;
            font-size: 21px;
            padding: 0px 10px 4px 6px;
            border-radius: 50%;
            transform: rotate(20deg);
            display: inline-block;
        }
        
        .product-read-more {
            display: none;
            transition-duration: 0.8s;
        }
        
        .product-read-more-sec:hover .product-read-more {
            display: block;
            transition-duration: 0.8s;
        }
        
        /* Elementor-style animations */
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .elementor-invisible {
            opacity: 0;
        }
        
        .animate-slideInLeft {
            animation: slideInLeft 0.8s ease-out forwards;
        }
        
        .animate-slideInRight {
            animation: slideInRight 0.8s ease-out forwards;
        }
        
        .animate-fadeInDown {
            animation: fadeInDown 0.8s ease-out forwards;
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        /* Original color scheme */
        .primary-blue { color: #105CAA; }
        .primary-orange { color: #F69320; }
        .bg-primary-blue { background-color: #105CAA; }
        .bg-primary-orange { background-color: #F69320; }
        
        /* Button styles matching original */
        .elementor-button {
            background-color: #F69320;
            color: white;
            padding: 10px 23px;
            border-radius: 50px;
            border: none;
            font-family: "Inter", Sans-serif;
            font-size: 14px;
            line-height: 20px;
            display: inline-block;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .elementor-button:hover {
            background: #005d8c;
            color: white;
        }
        
        /* Swiper styles - Matching original exactly */
        .qodef-qi-image-slider {
            position: relative;
            width: 100%;
            overflow: hidden;
        }
        
        .swiper-wrapper {
            display: flex;
            transition: transform 0.5s ease;
        }
        
        .qodef-e.swiper-slide {
            flex: 0 0 100%;
        }
        
        .qodef-e-inner {
            position: relative;
            overflow: hidden;
        }
        
        .qodef-e-inner-holder {
            position: relative;
            display: block;
        }
        
        .swiper-button-prev,
        .swiper-button-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255,255,255,0.9);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .swiper-button-prev:hover,
        .swiper-button-next:hover {
            background: white;
            border-color: #105CAA;
        }
        
        .swiper-button-prev {
            left: 20px;
        }
        
        .swiper-button-next {
            right: 20px;
        }
        
        .swiper-button-prev i,
        .swiper-button-next i {
            font-size: 18px;
            color: #105CAA;
        }
        
        .swiper-pagination {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }
        
        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .swiper-pagination-bullet.active {
            background: white;
            border-color: #105CAA;
        }
        
        /* Logo fix */
        .border-3 {
            border-width: 3px;
        }
        
        /* Mobile menu */
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        
        .mobile-menu.active {
            transform: translateX(0);
        }
    </style>
</head>
<body class="bg-white">
    @include('partials.topbar')
    @include('partials.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    @stack('scripts')
    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMobileMenu = document.getElementById('closeMobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('active');
        });

        closeMobileMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
        });

        // Hero Slider - Matching original functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.qodef-e.swiper-slide');
        const totalSlides = slides.length;
        const slider = document.getElementById('heroSlider');
        
        // Create pagination bullets dynamically
        const paginationContainer = document.querySelector('.swiper-pagination');
        paginationContainer.innerHTML = '';
        
        for (let i = 0; i < totalSlides; i++) {
            const bullet = document.createElement('div');
            bullet.className = 'swiper-pagination-bullet';
            if (i === 0) bullet.classList.add('active');
            bullet.addEventListener('click', () => {
                currentSlide = i;
                showSlide(currentSlide);
            });
            paginationContainer.appendChild(bullet);
        }
        
        function showSlide(index) {
            slider.style.transform = `translateX(-${index * 100}%)`;
            
            // Update pagination
            const bullets = document.querySelectorAll('.swiper-pagination-bullet');
            bullets.forEach((bullet, i) => {
                bullet.classList.toggle('active', i === index);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
        }

        document.querySelector('.swiper-button-next').addEventListener('click', nextSlide);
        document.querySelector('.swiper-button-prev').addEventListener('click', prevSlide);

        // Auto-play slider - matching original speed
        setInterval(nextSlide, 5000);

        // Counter Animation
        const counters = document.querySelectorAll('.counter');
        const speed = 200;

        const animateCounters = () => {
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(() => animateCounters(), 10);
                } else {
                    counter.innerText = target + '+';
                }
            });
        };

        // Trigger counter animation when in viewport
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const counterSection = document.querySelector('.counter').parentElement.parentElement;
        if (counterSection) {
            observer.observe(counterSection);
        }

        // Tab Functionality
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const tabId = btn.getAttribute('data-tab');
                
                // Update button styles
                tabBtns.forEach(b => {
                    b.classList.remove('bg-blue-600', 'text-white');
                    b.classList.add('text-gray-600');
                });
                btn.classList.remove('text-gray-600');
                btn.classList.add('bg-blue-600', 'text-white');
                
                // Show/hide content
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });
                document.getElementById(tabId).classList.remove('hidden');
            });
        });

        // Trigger animations on scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.elementor-invisible');
            
            elements.forEach(element => {
                const rect = element.getBoundingClientRect();
                const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
                
                if (isVisible) {
                    element.classList.remove('elementor-invisible');
                    
                    // Add appropriate animation class
                    if (element.classList.contains('animate-slideInLeft')) {
                        element.style.animation = 'slideInLeft 0.8s ease-out forwards';
                    } else if (element.classList.contains('animate-slideInRight')) {
                        element.style.animation = 'slideInRight 0.8s ease-out forwards';
                    } else if (element.classList.contains('animate-fadeInDown')) {
                        element.style.animation = 'fadeInDown 0.8s ease-out forwards';
                    } else if (element.classList.contains('animate-fadeInUp')) {
                        element.style.animation = 'fadeInUp 0.8s ease-out forwards';
                    }
                }
            });
        };

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            e.target.reset();
        });
    </script>
</body>
</html>
