@extends('layouts.app')

@section('title', 'Home - Konami Plast Engineering')

@section('content')
    <!-- Hero Slider Section -->
    <div class="relative overflow-hidden bg-gray-900">
        <div id="heroSlider" class="relative h-[500px] sm:h-[600px] md:h-[700px]">
            <!-- Single Video Background -->
            <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline>
                <source src="/uploads/0_Engine_Machinery_3840x2160.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-black/40"></div>
            
            <!-- Slide Content 1 -->
            <div class="slide-content absolute inset-0 flex items-center transition-opacity duration-1000" data-slide="0">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="max-w-2xl sm:max-w-3xl md:max-w-4xl">
                        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-white mb-4 sm:mb-6 animate-fade-in leading-tight">
                            <span class="block">Premium PVC Pipes</span>
                            <span class="block text-blue-400 text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl mt-2">Engineering Excellence</span>
                        </h1>
                        <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-8 leading-relaxed">
                            Leading manufacturer of high-quality PVC, UPVC, and CPVC pipes for water supply, drainage, and industrial applications.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                            <a href="/products" class="inline-flex items-center justify-center px-6 sm:px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                                <i class="fas fa-arrow-right mr-2"></i>
                                <span class="hidden sm:inline">Explore Products</span>
                                <span class="sm:hidden">Products</span>
                            </a>
                            <a href="/contact" class="inline-flex items-center justify-center px-6 sm:px-8 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-gray-900 transition-all duration-300">
                                <span class="hidden sm:inline">Contact Us</span>
                                <span class="sm:hidden">Contact</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Content 2 -->
            <div class="slide-content absolute inset-0 flex items-center transition-opacity duration-1000 opacity-0" data-slide="1">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="max-w-2xl sm:max-w-3xl md:max-w-4xl">
                        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-white mb-4 sm:mb-6 leading-tight">
                            <span class="block">Advanced UPVC</span>
                            <span class="block text-blue-400 text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl mt-2">Water Solutions</span>
                        </h1>
                        <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-8 leading-relaxed">
                            Durable and corrosion-resistant UPVC pipes perfect for potable water distribution and sewage systems.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                            <a href="/products" class="inline-flex items-center justify-center px-6 sm:px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                                <i class="fas fa-arrow-right mr-2"></i>
                                <span class="hidden sm:inline">Explore Products</span>
                                <span class="sm:hidden">Products</span>
                            </a>
                            <a href="/contact" class="inline-flex items-center justify-center px-6 sm:px-8 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-gray-900 transition-all duration-300">
                                <span class="hidden sm:inline">Contact Us</span>
                                <span class="sm:hidden">Contact</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Content 3 -->
            <div class="slide-content absolute inset-0 flex items-center transition-opacity duration-1000 opacity-0" data-slide="2">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="max-w-2xl sm:max-w-3xl md:max-w-4xl">
                        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-white mb-4 sm:mb-6 leading-tight">
                            <span class="block">CPVC Excellence</span>
                            <span class="block text-blue-400 text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl mt-2">Hot Water Systems</span>
                        </h1>
                        <p class="text-base sm:text-lg md:text-xl text-gray-200 mb-6 sm:mb-8 leading-relaxed">
                            High-temperature resistant CPVC pipes ideal for hot water distribution and industrial applications.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                            <a href="/products" class="inline-flex items-center justify-center px-6 sm:px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                                <i class="fas fa-arrow-right mr-2"></i>
                                <span class="hidden sm:inline">Explore Products</span>
                                <span class="sm:hidden">Products</span>
                            </a>
                            <a href="/contact" class="inline-flex items-center justify-center px-6 sm:px-8 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-gray-900 transition-all duration-300">
                                <span class="hidden sm:inline">Contact Us</span>
                                <span class="sm:hidden">Contact</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <div class="absolute bottom-4 sm:bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-2 sm:space-x-3 z-10">
                <button onclick="goToSlide(0)" class="slider-dot w-2 h-2 sm:w-3 sm:h-3 bg-white rounded-full transition-all duration-300 opacity-100"></button>
                <button onclick="goToSlide(1)" class="slider-dot w-2 h-2 sm:w-3 sm:h-3 bg-white/50 rounded-full transition-all duration-300"></button>
                <button onclick="goToSlide(2)" class="slider-dot w-2 h-2 sm:w-3 sm:h-3 bg-white/50 rounded-full transition-all duration-300"></button>
            </div>

            <!-- Slider Navigation -->
            <button onclick="previousSlide()" class="absolute left-2 sm:left-4 top-1/2 transform -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white p-2 sm:p-3 rounded-full hover:bg-white/30 transition-all duration-300 z-10">
                <i class="fas fa-chevron-left text-lg sm:text-xl"></i>
            </button>
            <button onclick="nextSlide()" class="absolute right-2 sm:right-4 top-1/2 transform -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white p-2 sm:p-3 rounded-full hover:bg-white/30 transition-all duration-300 z-10">
                <i class="fas fa-chevron-right text-lg sm:text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-700 py-8 sm:py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 md:gap-8 text-center">
                <div class="text-white">
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold mb-2" data-counter="25">0</div>
                    <p class="text-blue-200 text-sm sm:text-base">Years of Experience</p>
                </div>
                <div class="text-white">
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold mb-2" data-counter="500">0</div>
                    <p class="text-blue-200 text-sm sm:text-base">Happy Clients</p>
                </div>
                <div class="text-white">
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold mb-2" data-counter="1000">0</div>
                    <p class="text-blue-200 text-sm sm:text-base">Products Delivered</p>
                </div>
                <div class="text-white">
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold mb-2" data-counter="50">0</div>
                    <p class="text-blue-200 text-sm sm:text-base">Product Varieties</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Categories -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Premium Pipe Products</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive range of high-quality PVC, UPVC, and CPVC pipes designed for water supply, drainage, and industrial applications
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Category 1 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 h-64">
                        <img src="/uploads/image_2.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="PVC Pipes">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">PVC Pipes</h3>
                        <p class="text-gray-200 mb-4">High-quality PVC pipes for water supply, plumbing, and irrigation systems with excellent durability</p>
                        <a href="/products" class="inline-flex items-center text-blue-400 hover:text-blue-300 font-semibold">
                            Explore <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 h-64">
                        <img src="/uploads/image_3.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="UPVC Pipes">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">UPVC Pipes</h3>
                        <p class="text-gray-200 mb-4">Corrosion-resistant UPVC pipes for potable water, sewage, and chemical transportation</p>
                        <a href="/products" class="inline-flex items-center text-blue-400 hover:text-blue-300 font-semibold">
                            Explore <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 h-64">
                        <img src="/uploads/image_4.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="CPVC Pipes">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">CPVC Pipes</h3>
                        <p class="text-gray-200 mb-4">Heat-resistant CPVC pipes for hot water distribution and industrial applications</p>
                        <a href="/products" class="inline-flex items-center text-blue-400 hover:text-blue-300 font-semibold">
                            Explore <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Konami Plast</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We combine advanced technology, superior materials, and decades of expertise to deliver exceptional pipe solutions
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-certificate text-3xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">BIS Certified</h3>
                    <p class="text-gray-600">All our pipes meet BIS standards ensuring highest quality and safety for water distribution systems</p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-shield-alt text-3xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">UV Stabilized</h3>
                    <p class="text-gray-600">Special UV-resistant formulation prevents degradation and extends pipe lifespan in outdoor installations</p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-temperature-high text-3xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Heat Resistant</h3>
                    <p class="text-gray-600">CPVC pipes withstand temperatures up to 90°C making them perfect for hot water applications</p>
                </div>

                <!-- Feature 4 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-tint text-3xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Leak Proof</h3>
                    <p class="text-gray-600">Precision-engineered joints and fittings ensure completely leak-free installations</p>
                </div>

                <!-- Feature 5 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-leaf text-3xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Eco-Friendly</h3>
                    <p class="text-gray-600">Lead-free and non-toxic materials ensure safe water transport and environmental sustainability</p>
                </div>

                <!-- Feature 6 -->
                <div class="text-center group">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-clock text-3xl text-blue-600 group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Long Life</h3>
                    <p class="text-gray-600">50+ years of service life with minimal maintenance requirements for all our pipe products</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Trusted by leading construction companies, contractors, and engineers across India
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-50 p-8 rounded-2xl shadow-lg">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Client" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-900">Rajesh Malhotra</h4>
                            <p class="text-blue-600">CEO, Malhotra Construction</p>
                        </div>
                    </div>
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 italic">
                        "Konami Plast Engineering has been our trusted supplier for over 10 years. Their PVC and UPVC pipes are of exceptional quality and have never failed us in any project."
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-50 p-8 rounded-2xl shadow-lg">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Client" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-900">Anita Sharma</h4>
                            <p class="text-blue-600">Project Manager, Urban Infra</p>
                        </div>
                    </div>
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 italic">
                        "The CPVC pipes from Konami Plast are perfect for our hot water systems. Excellent quality, timely delivery, and great technical support whenever needed."
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-50 p-8 rounded-2xl shadow-lg">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Client" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-900">Vikram Singh</h4>
                            <p class="text-blue-600">Plumbing Contractor</p>
                        </div>
                    </div>
                    <div class="flex text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-700 italic">
                        "Their pipes are BIS certified and meet all quality standards. The fittings are perfect and installation is always smooth. Highly recommended!"
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-700 py-20">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-white mb-4">
                Ready to Start Your Project?
            </h2>
            <p class="text-xl text-blue-200 mb-8">
                Get in touch with our team to discuss your requirements and receive a personalized quote
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-medium rounded-md text-blue-600 bg-white hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-phone-alt mr-2"></i>
                    Contact Us Now
                </a>
                <a href="/products" class="inline-flex items-center px-8 py-4 border border-white text-lg font-medium rounded-md text-white hover:bg-white hover:text-blue-600 transition-all duration-300">
                    <i class="fas fa-eye mr-2"></i>
                    View Products
                </a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    // Slider functionality
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide-content');
    const dots = document.querySelectorAll('.slider-dot');
    const totalSlides = slides.length;

    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => slide.classList.add('opacity-0'));
        dots.forEach(dot => dot.classList.remove('opacity-100'));
        dots.forEach(dot => dot.classList.add('bg-white/50'));
        dots.forEach(dot => dot.classList.remove('bg-white'));

        // Show current slide
        slides[index].classList.remove('opacity-0');
        dots[index].classList.add('opacity-100');
        dots[index].classList.remove('bg-white/50');
        dots[index].classList.add('bg-white');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function previousSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    function goToSlide(index) {
        currentSlide = index;
        showSlide(currentSlide);
    }

    // Auto-play slider
    setInterval(nextSlide, 5000);

    // Counter animation
    function animateCounter() {
        const counters = document.querySelectorAll('[data-counter]');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-counter'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;
            
            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });
    }

    // Initialize counters when page loads
    document.addEventListener('DOMContentLoaded', function() {
        animateCounter();
    });

    const statsSection = document.querySelector('[data-counter]');
    if (statsSection) {
        observer.observe(statsSection.parentElement);
    }
</script>
@endpush
