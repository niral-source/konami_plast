@extends('layouts.app')

@section('title', 'Konami Plast Engineering - PVC, UPVC & CPVC Pipe Manufacturer')
@section('description', 'Konami Plast Engineering is a leading manufacturer of high-quality PVC pipes and engineering solutions. Explore our wide range of products for industrial, agricultural, and plumbing needs.')

@section('content')

<!-- Hero Slider - Matching original structure exactly -->
<section id="home" class="relative">
    <div class="qodef-shortcode qodef-m qodef-qi-image-slider qodef-col-num--1 qodef-qi-grid qodef-qi-swiper-container qodef-navigation--inside qodef-pagination--inside qodef-navigation--hover-move">
        <div class="swiper-wrapper" id="heroSlider">
            <div class="qodef-e swiper-slide">
                <div class="qodef-e-inner">
                    <div class="qodef-e-inner-holder">
                        <img src="{{ asset('uploads/image_13.jpg') }}" class="w-full h-[600px] object-cover" alt="Konami Banner 01">
                    </div>
                </div>
            </div>
            <div class="qodef-e swiper-slide">
                <div class="qodef-e-inner">
                    <div class="qodef-e-inner-holder">
                        <img src="{{ asset('uploads/image_14.jpg') }}" class="w-full h-[600px] object-cover" alt="Konami Banner 02">
                    </div>
                </div>
            </div>
            <div class="qodef-e swiper-slide">
                <div class="qodef-e-inner">
                    <div class="qodef-e-inner-holder">
                        <img src="{{ asset('uploads/image_10.jpg') }}" class="w-full h-[600px] object-cover" alt="Konami Banner 03">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slider Controls - Matching original -->
        <div class="swiper-button-prev">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="swiper-button-next">
            <i class="fas fa-chevron-right"></i>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- About Section - Matching original layout -->
<section id="about" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center max-w-5xl mx-auto">
            <div class="elementor-invisible animate-slideInLeft">
                <img src="{{ asset('uploads/image_6.png') }}" alt="Manufacturing Facility" class="rounded-2xl shadow-lg w-full">
            </div>
            <div class="elementor-invisible animate-slideInRight">
                <h5 class="primary-blue font-semibold text-lg mb-4">ABOUT US</h5>
                <h2 class="text-4xl font-bold text-gray-800 mb-6">Introduction</h2>
                <p class="text-gray-600 mb-6 leading-relaxed text-justify">
                    Konami Plast Engineering has a rather grounding history, beginning with the family starting from two machines, producing garden hoses. We have now expanded to three plants producing piping and electrical wiring solutions.
                </p>
                <a href="{{ route('about') }}" class="elementor-button">Read More</a>
            </div>
        </div>
    </div>
</section>

<!-- Products Section - Superb & Elegant Design -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h1 class="elementor-invisible animate-fadeInDown text-5xl font-bold text-gray-800 mb-6">Our Products</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Discover our comprehensive range of high-quality engineering solutions designed to meet your specific needs</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Left side - Featured Product with Elegant Design -->
            <div class="relative group h-full">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-blue to-blue-600 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-all duration-500"></div>
                <div class="relative bg-white rounded-3xl shadow-2xl overflow-hidden h-full flex flex-col">
                    <div class="h-56 overflow-hidden">
                        <img src="{{ asset('uploads/image_11.jpg') }}" alt="Structural Integrity Assessment" class="w-full h-full object-cover transform scale-100 group-hover:scale-110 transition-all duration-700">
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <div class="flex items-center justify-between mb-4">
                            <div class="inline-block px-4 py-2 bg-primary-blue/10 rounded-full">
                                <span class="text-primary-blue font-semibold text-sm">FEATURED</span>
                            </div>
                            <div class="flex space-x-2">
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">PREMIUM</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-semibold">CERTIFIED</span>
                            </div>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Structural Integrity Assessment</h2>
                        <p class="text-gray-600 mb-6 text-lg leading-relaxed">Ensuring structural safety and longevity with our premium quality engineering solutions that exceed industry standards and deliver exceptional performance.</p>
                        
                        <div class="grid grid-cols-3 gap-4 mb-6">
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <div class="text-2xl font-bold text-primary-blue">100%</div>
                                <div class="text-xs text-gray-600">Quality</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <div class="text-2xl font-bold text-primary-blue">24/7</div>
                                <div class="text-xs text-gray-600">Support</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <div class="text-2xl font-bold text-primary-blue">10+</div>
                                <div class="text-xs text-gray-600">Years</div>
                            </div>
                        </div>
                        
                        <div class="mt-auto">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-2">
                                        <i class="fas fa-check text-white text-xs"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">ISO Certified</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center mr-2">
                                        <i class="fas fa-shield-alt text-white text-xs"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">Warranty</span>
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="{{ url('#about') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-medium rounded-lg hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 hover:from-blue-700 hover:to-blue-800">
                                    Explore More
                                    <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side - Product Grid with Elegant Cards -->
            <div class="grid md:grid-cols-2 gap-8 content-start h-full">
                <!-- Household -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden">
                    <div class="h-32 overflow-hidden relative">
                        <img src="{{ asset('uploads/image_7.png') }}" alt="Household Products" class="w-full h-full object-cover transform scale-100 group-hover:scale-110 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-home text-primary-blue"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800">Household</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Perfect choice for electricity, water and gas transmission for household uses.</p>
                        <a href="{{ route('distributor.inquiry') }}" class="inline-flex items-center text-primary-blue font-semibold hover:text-blue-700 transition-colors">
                            Learn More <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Industrial -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden">
                    <div class="h-32 overflow-hidden relative">
                        <img src="{{ asset('uploads/image_8.png') }}" alt="Industrial Products" class="w-full h-full object-cover transform scale-100 group-hover:scale-110 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-industry text-orange-600"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800">Industrial</h3>
                        </div>
                        <p class="text-gray-600 mb-4">High-quality pipes for oil and gas, machineries and water transport industries.</p>
                        <a href="{{ route('distributor.inquiry') }}" class="inline-flex items-center text-primary-blue font-semibold hover:text-blue-700 transition-colors">
                            Learn More <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Agriculture -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden">
                    <div class="h-32 overflow-hidden relative">
                        <img src="{{ asset('uploads/image_9.png') }}" alt="Agriculture Products" class="w-full h-full object-cover transform scale-100 group-hover:scale-110 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-seedling text-green-600"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800">Agriculture</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Supporting agriculture with reliable pipes that work under pressure.</p>
                        <a href="{{ route('distributor.inquiry') }}" class="inline-flex items-center text-primary-blue font-semibold hover:text-blue-700 transition-colors">
                            Learn More <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Infrastructure -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden">
                    <div class="h-32 overflow-hidden relative">
                        <img src="{{ asset('uploads/image_23.png') }}" alt="Infrastructure Products" class="w-full h-full object-cover transform scale-100 group-hover:scale-110 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                                <i class="fas fa-building text-purple-600"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800">Infrastructure</h3>
                        </div>
                        <p class="text-gray-600 mb-4">International standard cables, wires and pipes for infrastructure projects.</p>
                        <a href="{{ route('distributor.inquiry') }}" class="inline-flex items-center text-primary-blue font-semibold hover:text-blue-700 transition-colors">
                            Learn More <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section - Elegant Redesign -->
<section class="py-20 bg-gradient-to-br from-slate-50 to-blue-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Achievements</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Numbers that speak volumes about our commitment to excellence and growth</p>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-blue-400 mx-auto mt-4 rounded-full"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Employees Card -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl transform rotate-1 group-hover:rotate-2 transition-all duration-500 opacity-10"></div>
                <div class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-gray-100">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-users text-white text-2xl"></i>
                        </div>
                        <div class="text-5xl font-bold text-gray-900 mb-2 counter" data-target="500">0</div>
                        <div class="text-lg font-semibold text-gray-700 mb-2">Employees</div>
                        <p class="text-sm text-gray-500">Dedicated professionals</p>
                        <div class="mt-4 w-full h-1 bg-gradient-to-r from-blue-200 to-blue-300 rounded-full"></div>
                    </div>
                </div>
            </div>

            <!-- Cities Card -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-emerald-700 rounded-2xl transform rotate-1 group-hover:rotate-2 transition-all duration-500 opacity-10"></div>
                <div class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-gray-100">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-emerald-600 to-emerald-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-map-marked-alt text-white text-2xl"></i>
                        </div>
                        <div class="text-5xl font-bold text-gray-900 mb-2 counter" data-target="250">0</div>
                        <div class="text-lg font-semibold text-gray-700 mb-2">Cities & Districts</div>
                        <p class="text-sm text-gray-500">Wide reach network</p>
                        <div class="mt-4 w-full h-1 bg-gradient-to-r from-emerald-200 to-emerald-300 rounded-full"></div>
                    </div>
                </div>
            </div>

            <!-- Products Card -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-purple-700 rounded-2xl transform rotate-1 group-hover:rotate-2 transition-all duration-500 opacity-10"></div>
                <div class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-gray-100">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-purple-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-box text-white text-2xl"></i>
                        </div>
                        <div class="text-5xl font-bold text-gray-900 mb-2 counter" data-target="60">0</div>
                        <div class="text-lg font-semibold text-gray-700 mb-2">Products</div>
                        <p class="text-sm text-gray-500">Comprehensive range</p>
                        <div class="mt-4 w-full h-1 bg-gradient-to-r from-purple-200 to-purple-300 rounded-full"></div>
                    </div>
                </div>
            </div>

            <!-- Years Card -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-orange-600 to-orange-700 rounded-2xl transform rotate-1 group-hover:rotate-2 transition-all duration-500 opacity-10"></div>
                <div class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-gray-100">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-orange-600 to-orange-700 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-award text-white text-2xl"></i>
                        </div>
                        <div class="text-5xl font-bold text-gray-900 mb-2 counter" data-target="30">0</div>
                        <div class="text-lg font-semibold text-gray-700 mb-2">Years in Business</div>
                        <p class="text-sm text-gray-500">Trusted experience</p>
                        <div class="mt-4 w-full h-1 bg-gradient-to-r from-orange-200 to-orange-300 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cables & Pipes Section - Matching Products Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h1 class="elementor-invisible animate-fadeInDown text-5xl font-bold text-gray-800 mb-6">Cables & Pipes</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Discover our comprehensive range of high-quality cables and pipes designed to meet your specific engineering needs</p>
        </div>
        
        <!-- Tab Design -->
        <div class="flex justify-center mb-16">
            <div class="inline-flex bg-white rounded-lg shadow-md p-1 border border-gray-200">
                <button class="tab-btn px-12 py-4 bg-blue-600 text-white font-medium rounded-md transition-all duration-300" data-tab="cables">
                    Cables
                </button>
                <button class="tab-btn px-12 py-4 text-gray-600 font-medium rounded-md transition-all duration-300 hover:text-gray-800" data-tab="pipes">
                    Pipes
                </button>
            </div>
        </div>

        <!-- Tab Content - Cables -->
        <div id="cables" class="tab-content">
            <div class="grid lg:grid-cols-4 gap-12 items-start max-w-5xl mx-auto">
                <!-- Cables Product Card -->
                <div class="relative group lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('uploads/image_4.png') }}" alt="Electrical Cables" class="w-full h-full object-cover transform scale-100 group-hover:scale-105 transition-all duration-500">
                        </div>
                        <div class="p-8 flex-1 flex flex-col">
                            <div class="flex items-center justify-between mb-4">
                                <div class="inline-block px-4 py-2 bg-blue-100 rounded-full">
                                    <span class="text-blue-800 font-semibold text-sm">ELECTRICAL</span>
                                </div>
                                <div class="flex space-x-2">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">PREMIUM</span>
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-semibold">CERTIFIED</span>
                                </div>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Electrical Cables</h2>
                            <p class="text-gray-600 mb-6 text-lg leading-relaxed">Precision-engineered cables for reliable power transmission and safety-critical applications with unmatched durability.</p>
                            
                            <div class="grid grid-cols-3 gap-4 mb-6">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="text-2xl font-bold text-blue-600">100%</div>
                                    <div class="text-xs text-gray-600">Quality</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="text-2xl font-bold text-blue-600">24/7</div>
                                    <div class="text-xs text-gray-600">Support</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="text-2xl font-bold text-blue-600">ISO</div>
                                    <div class="text-xs text-gray-600">Certified</div>
                                </div>
                            </div>
                            
                            <div class="mt-auto">
                                <a href="{{ route('contact') }}" class="elementor-button">Explore Catalog</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Additional Cables Info -->
                <div class="space-y-8 lg:col-span-2">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Why Choose Our Cables?</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed text-justify">Our electrical cables are manufactured with the highest quality materials and advanced technology to ensure superior performance and safety.</p>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-check text-blue-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Superior Durability</h4>
                                <p class="text-gray-600 text-sm">Built to withstand harsh conditions and heavy usage</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-check text-blue-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Safety Certified</h4>
                                <p class="text-gray-600 text-sm">Meets all international safety standards</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-check text-blue-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Energy Efficient</h4>
                                <p class="text-gray-600 text-sm">Optimized for minimal power loss</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Content - Pipes -->
        <div id="pipes" class="tab-content hidden">
            <div class="grid lg:grid-cols-4 gap-12 items-start max-w-5xl mx-auto">
                <!-- Pipes Product Card -->
                <div class="relative group lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('uploads/image_5.png') }}" alt="Quality Pipes" class="w-full h-full object-cover transform scale-100 group-hover:scale-105 transition-all duration-500">
                        </div>
                        <div class="p-8 flex-1 flex flex-col">
                            <div class="flex items-center justify-between mb-4">
                                <div class="inline-block px-4 py-2 bg-yellow-100 rounded-full">
                                    <span class="text-yellow-800 font-semibold text-sm">PLUMBING</span>
                                </div>
                                <div class="flex space-x-2">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">PREMIUM</span>
                                    <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-semibold">DURABLE</span>
                                </div>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Quality Pipes</h2>
                            <p class="text-gray-600 mb-6 text-lg leading-relaxed">Advanced pipe solutions for fluid transport and infrastructure applications with exceptional durability and performance.</p>
                            
                            <div class="grid grid-cols-3 gap-4 mb-6">
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="text-2xl font-bold text-yellow-600">100%</div>
                                    <div class="text-xs text-gray-600">Quality</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="text-2xl font-bold text-yellow-600">30+</div>
                                    <div class="text-xs text-gray-600">Years</div>
                                </div>
                                <div class="text-center p-3 bg-gray-50 rounded-lg">
                                    <div class="text-2xl font-bold text-yellow-600">ISO</div>
                                    <div class="text-xs text-gray-600">Certified</div>
                                </div>
                            </div>
                            
                            <div class="mt-auto">
                                <a href="{{ route('contact') }}" class="elementor-button">View Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Additional Pipes Info -->
                <div class="space-y-8 lg:col-span-2">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Why Choose Our Pipes?</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed text-justify">Our pipes are manufactured with premium materials and advanced engineering to ensure superior performance and longevity.</p>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-check text-yellow-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Premium Materials</h4>
                                <p class="text-gray-600 text-sm">High-grade PVC and composite materials</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-check text-yellow-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Cost Effective</h4>
                                <p class="text-gray-600 text-sm">Best value for your investment</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-check text-yellow-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Easy Installation</h4>
                                <p class="text-gray-600 text-sm">Simple and quick setup process</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Legacy Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16 items-center max-w-6xl mx-auto">
            <!-- Legacy Content -->
            <div class="elementor-invisible animate-slideInLeft">
                <h2 class="text-4xl font-bold text-gray-800 mb-6">A legacy built upon humility and innovation!</h2>
                <p class="text-gray-600 mb-8 leading-relaxed text-justify">
                    Founded in 1992 with just two machines manufacturing garden hoses, Konami Plast Engineering has now evolved into a global multi-product & multi-brand conglomerate owning three production plants manufacturing a wide range of piping & electrical wiring solutions. Our aim is to establish ourselves as a formidable brand in South India competing with the best brands in the business.
                </p>
                
                <!-- Features Grid -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-white text-sm"></i>
                        </div>
                        <span class="text-gray-700 font-medium">E-STORE</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-white text-sm"></i>
                        </div>
                        <span class="text-gray-700 font-medium">ON TIME DELIVERY</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-white text-sm"></i>
                        </div>
                        <span class="text-gray-700 font-medium">ISO CERTIFIED</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-white text-sm"></i>
                        </div>
                        <span class="text-gray-700 font-medium">QUALITY PRODUCTS</span>
                    </div>
                    <div class="flex items-center space-x-3 col-span-2">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-white text-sm"></i>
                        </div>
                        <span class="text-gray-700 font-medium">ISI AND ASTM STANDARD PRODUCTS</span>
                    </div>
                </div>
            </div>
            
            <!-- Legacy Image -->
            <div class="elementor-invisible animate-slideInRight">
                <img src="{{ asset('uploads/image_6.png') }}" alt="Manufacturing Facility" class="rounded-2xl shadow-2xl w-full">
            </div>
        </div>
    </div>
</section>
@endsection