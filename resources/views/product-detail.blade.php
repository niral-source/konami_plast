@extends('layouts.app')

@section('title', $product['name'] . ' - Konami Plast Engineering')

@section('content')
    <!-- Page Header -->
    <div class="relative h-[400px] bg-gray-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/uploads/image_23.png" 
                 alt="{{ $product['name'] }}" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/90"></div>
        </div>
        
        <div class="relative z-10 h-full flex items-center justify-center pt-20">
            <div class="max-w-4xl mx-auto px-6 sm:px-8 lg:px-12 text-center">
                <nav class="flex items-center justify-center text-sm text-gray-300 mb-4">
                    <a href="/" class="hover:text-white transition-colors">Home</a>
                    <span class="mx-3">/</span>
                    <a href="/categories" class="hover:text-white transition-colors">Categories</a>
                    <span class="mx-3">/</span>
                    <a href="/category/{{ $product['category_type'] }}" class="hover:text-white transition-colors">{{ $product['category_name'] }}</a>
                    <span class="mx-3">/</span>
                    <span class="text-white font-semibold">{{ $product['name'] }}</span>
                </nav>
                <h1 class="text-3xl md:text-5xl font-black text-white mb-4 leading-tight">
                    {{ $product['name'] }}
                    <span class="block text-blue-400 text-2xl md:text-4xl mt-2">{{ $product['subtitle'] }}</span>
                </h1>
                <p class="text-lg text-gray-200 mb-8 leading-relaxed max-w-2xl mx-auto">
                    {{ $product['description'] }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact-form" class="inline-flex items-center px-6 py-2 border border-transparent text-base font-bold rounded-xl text-white bg-blue-600 hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-phone-alt mr-2"></i>
                        Get Quote
                    </a>
                    <a href="#specifications" class="inline-flex items-center px-6 py-2 border border-white text-base font-bold rounded-xl text-white hover:bg-white hover:text-gray-900 transition-all duration-300">
                        <i class="fas fa-info-circle mr-2"></i>
                        View Details
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details Section -->
    <div class="py-16 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
                <!-- Product Images -->
                <div class="space-y-6">
                    <!-- Main Image -->
                    <div class="relative group">
                        <div class="aspect-w-16 aspect-h-12 h-[500px] bg-white rounded-2xl shadow-2xl overflow-hidden border border-gray-200">
                            <img id="main-product-image" src="/uploads/image_11.jpg" 
                                 alt="{{ $product['name'] }}" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute top-4 right-4 bg-red-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                <i class="fas fa-fire mr-1"></i> Hot Selling
                            </div>
                        </div>
                        <!-- Zoom hint -->
                        <div class="absolute bottom-4 right-4 bg-black/70 text-white px-3 py-1 rounded-lg text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-search-plus mr-1"></i> Hover to zoom
                        </div>
                    </div>
                    
                    <!-- Gallery Thumbnails -->
                    <div class="grid grid-cols-4 gap-3">
                        <div class="aspect-w-16 aspect-h-12 h-24 bg-white rounded-xl overflow-hidden cursor-pointer border-2 border-blue-600 shadow-lg transform scale-105" onclick="changeMainImage('/uploads/image_11.jpg', this)">
                            <img src="/uploads/image_11.jpg" 
                                 alt="{{ $product['name'] }} Main" 
                                 class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="aspect-w-16 aspect-h-12 h-24 bg-gray-100 rounded-xl overflow-hidden cursor-pointer hover:border-2 hover:border-blue-400 transition-all duration-300" onclick="changeMainImage('/uploads/image_13.jpg', this)">
                            <img src="/uploads/image_13.jpg" 
                                 alt="{{ $product['name'] }} Gallery" 
                                 class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="aspect-w-16 aspect-h-12 h-24 bg-gray-100 rounded-xl overflow-hidden cursor-pointer hover:border-2 hover:border-blue-400 transition-all duration-300" onclick="changeMainImage('/uploads/image_14.jpg', this)">
                            <img src="/uploads/image_14.jpg" 
                                 alt="{{ $product['name'] }} Gallery" 
                                 class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="aspect-w-16 aspect-h-12 h-24 bg-gray-100 rounded-xl overflow-hidden cursor-pointer hover:border-2 hover:border-blue-400 transition-all duration-300" onclick="changeMainImage('/uploads/image_10.jpg', this)">
                            <img src="/uploads/image_10.jpg" 
                                 alt="{{ $product['name'] }} Gallery" 
                                 class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    
                    <!-- Quick Actions -->
                    <div class="flex gap-3">
                        <button class="flex-1 bg-blue-600 text-white py-3 px-4 rounded-xl font-semibold hover:bg-blue-700 transition-colors duration-300 shadow-lg">
                            <i class="fas fa-download mr-2"></i> Download Spec Sheet
                        </button>
                        <button class="flex-1 bg-gray-100 text-gray-700 py-3 px-4 rounded-xl font-semibold hover:bg-gray-200 transition-colors duration-300">
                            <i class="fas fa-share-alt mr-2"></i> Share
                        </button>
                    </div>
                </div>

                <!-- Product Information -->
                <div class="space-y-8">
                    <!-- Product Title & Rating -->
                    <div>
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h1 class="text-4xl font-black text-gray-900 mb-2">{{ $product['name'] }}</h1>
                                <p class="text-xl text-blue-600 font-semibold mb-4">{{ $product['subtitle'] }}</p>
                            </div>
                            <div class="bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-bold">
                                <i class="fas fa-check-circle mr-1"></i> In Stock
                            </div>
                        </div>
                        
                        <!-- Rating & Reviews -->
                        <div class="flex items-center gap-6 mb-6">
                            <div class="flex items-center">
                                <div class="flex text-yellow-400 mr-2">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $product['rating'])
                                            <i class="fas fa-star text-xl"></i>
                                        @else
                                            <i class="far fa-star text-xl"></i>
                                        @endif
                                    @endfor
                                </div>
                                <span class="text-2xl font-bold text-gray-900">{{ $product['rating'] }}</span>
                            </div>
                            <div class="text-gray-600">
                                <span class="font-semibold">{{ $product['reviews'] }}</span> Reviews
                            </div>
                        </div>
                        
                        <!-- Description -->
                        <p class="text-lg text-gray-700 leading-relaxed mb-8">{{ $product['full_description'] }}</p>
                    </div>
                    
                    <!-- Pricing & CTA -->
                    <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl p-8 text-white shadow-2xl">
                        <div class="text-center mb-6">
                            <p class="text-blue-200 mb-2">Starting from</p>
                            <div class="text-4xl font-black mb-4">₹{{ $product['price'] ?? '250' }}/meter</div>
                            <p class="text-blue-200">Bulk pricing available for orders above 1000 meters</p>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <a href="#contact-form" class="bg-white text-blue-600 py-4 px-6 rounded-xl font-bold text-center hover:bg-gray-100 transition-colors duration-300 shadow-lg">
                                <i class="fas fa-phone-alt mr-2"></i> Get Quote
                            </a>
                            <a href="#contact-form" class="bg-blue-800 text-white py-4 px-6 rounded-xl font-bold text-center hover:bg-blue-900 transition-colors duration-300">
                                <i class="fas fa-shopping-cart mr-2"></i> Bulk Order
                            </a>
                        </div>
                    </div>

                    <!-- Key Features -->
                    <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-star text-yellow-400 mr-3"></i> Key Features
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach($product['features'] as $feature)
                            <div class="flex items-start p-3 bg-gray-50 rounded-lg">
                                <i class="fas fa-check-circle text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                                <span class="text-gray-700 font-medium">{{ $feature }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Quick Info Grid -->
                    <div class="bg-white rounded-2xl border border-gray-200 p-6 shadow-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-info-circle text-blue-600 mr-3"></i> Quick Specifications
                        </h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-4">
                                <div class="text-sm text-blue-600 font-semibold mb-1">Size</div>
                                <div class="text-lg font-bold text-gray-900">{{ $product['size'] }}</div>
                            </div>
                            <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-4">
                                <div class="text-sm text-green-600 font-semibold mb-1">Weight</div>
                                <div class="text-lg font-bold text-gray-900">{{ $product['weight'] }}</div>
                            </div>
                            <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-4">
                                <div class="text-sm text-purple-600 font-semibold mb-1">Material</div>
                                <div class="text-lg font-bold text-gray-900">{{ $product['material'] }}</div>
                            </div>
                            <div class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-xl p-4">
                                <div class="text-sm text-orange-600 font-semibold mb-1">Color</div>
                                <div class="text-lg font-bold text-gray-900">{{ $product['color'] }}</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Trust Badges -->
                    <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-2xl p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-shield-alt text-green-600 mr-3"></i> Why Choose Us
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-truck text-2xl text-green-600"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">Free Delivery</h4>
                                <p class="text-sm text-gray-600">On orders above ₹10,000</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-certificate text-2xl text-blue-600"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">BIS Certified</h4>
                                <p class="text-sm text-gray-600">Quality guaranteed</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-undo text-2xl text-purple-600"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">Easy Returns</h4>
                                <p class="text-sm text-gray-600">7-day return policy</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Specifications Section -->
    <div id="specifications" class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-gray-900 mb-4">Technical Specifications</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Detailed technical specifications and standards for {{ $product['name'] }}
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- General Specifications -->
                <div class="bg-white rounded-3xl shadow-2xl p-8 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-cog text-white text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">General Specifications</h3>
                    </div>
                    <div class="space-y-4">
                        @foreach($product['specifications']['general'] as $spec => $value)
                        <div class="flex justify-between items-center py-4 px-4 bg-gray-50 rounded-xl hover:bg-blue-50 transition-colors duration-300">
                            <span class="text-gray-700 font-medium">{{ $spec }}</span>
                            <span class="font-bold text-gray-900 bg-white px-4 py-2 rounded-lg shadow-sm">{{ $value }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Performance Specifications -->
                <div class="bg-white rounded-3xl shadow-2xl p-8 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-tachometer-alt text-white text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Performance Specifications</h3>
                    </div>
                    <div class="space-y-4">
                        @foreach($product['specifications']['performance'] as $spec => $value)
                        <div class="flex justify-between items-center py-4 px-4 bg-gray-50 rounded-xl hover:bg-green-50 transition-colors duration-300">
                            <span class="text-gray-700 font-medium">{{ $spec }}</span>
                            <span class="font-bold text-gray-900 bg-white px-4 py-2 rounded-lg shadow-sm">{{ $value }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Standards & Certifications -->
            <div class="mt-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-3xl p-8 shadow-2xl">
                <div class="flex items-center mb-8">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-award text-white text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Standards & Certifications</h3>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    @foreach($product['certifications'] as $cert)
                    <div class="bg-white/10 backdrop-blur rounded-2xl p-6 text-center hover:bg-white/20 transition-colors duration-300">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-{{ $cert['icon'] }} text-2xl text-white"></i>
                        </div>
                        <h4 class="font-bold text-white mb-2">{{ $cert['name'] }}</h4>
                        <p class="text-blue-100 text-sm">{{ $cert['description'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Applications Section -->
    <div class="py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-gray-900 mb-4">Applications</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Common applications and use cases for {{ $product['name'] }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($product['applications'] as $application)
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-{{ $application['icon'] }} text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">{{ $application['title'] }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $application['description'] }}</p>
                    <div class="mt-4">
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300">
                            Learn More <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div id="contact-form" class="py-20 bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-black text-white mb-4">Get Quote for {{ $product['name'] }}</h2>
                <p class="text-xl text-blue-200">
                    Fill in your requirements and our team will get back to you with the best pricing
                </p>
            </div>

            <div class="bg-white rounded-3xl shadow-2xl p-8">
                <form class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">Full Name *</label>
                            <input type="text" required class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">Company Name</label>
                            <input type="text" class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" placeholder="Your Company">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">Email *</label>
                            <input type="email" required class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" placeholder="john@example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">Phone *</label>
                            <input type="tel" required class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" placeholder="+91 98765 43210">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">Required Quantity *</label>
                            <input type="number" required class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" placeholder="1000">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-3">Unit</label>
                            <select class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                                <option>Meters</option>
                                <option>Kilograms</option>
                                <option>Pieces</option>
                                <option>Feet</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-3">Project Details</label>
                        <textarea rows="4" class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" placeholder="Tell us about your project requirements..."></textarea>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="newsletter" class="mr-3 w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="newsletter" class="text-sm text-gray-600">
                            Send me product updates and special offers
                        </label>
                    </div>

                    <div class="flex gap-4">
                        <button type="submit" class="flex-1 bg-gradient-to-r from-blue-600 to-blue-700 text-white py-4 px-8 rounded-xl font-bold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg">
                            <i class="fas fa-paper-plane mr-2"></i> Submit Request
                        </button>
                        <button type="button" class="bg-gray-100 text-gray-700 py-4 px-8 rounded-xl font-bold hover:bg-gray-200 transition-colors duration-300">
                            <i class="fas fa-phone mr-2"></i> Call Us
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <div class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Related Products</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Similar products you might be interested in
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="aspect-w-16 aspect-h-12 h-48 relative">
                        <img src="/uploads/image_4.png" 
                             alt="UPVC Pipes" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                            UPVC Pipes
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">High-quality UPVC pipes for water supply systems</p>
                        <div class="flex items-center justify-center">
                            <a href="/products/upvc-pipe" class="text-blue-600 hover:text-blue-700 font-semibold">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="aspect-w-16 aspect-h-12 h-48 relative">
                        <img src="/uploads/image_5.png" 
                             alt="CPVC Pipes" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                            CPVC Pipes
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">Durable CPVC pipes for hot water distribution</p>
                        <div class="flex items-center justify-center">
                            <a href="/products/cpvc-pipe" class="text-blue-600 hover:text-blue-700 font-semibold">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="aspect-w-16 aspect-h-12 h-48 relative">
                        <img src="/uploads/image_6.png" 
                             alt="SWR Pipes" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                            SWR Pipes
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">SWR pipes for drainage and sewage systems</p>
                        <div class="flex items-center justify-center">
                            <a href="/products/swr-pipe" class="text-blue-600 hover:text-blue-700 font-semibold">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="aspect-w-16 aspect-h-12 h-48 relative">
                        <img src="/uploads/image_7.png" 
                             alt="Column Pipes" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                            Column Pipes
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">Heavy-duty column pipes for borewell applications</p>
                        <div class="flex items-center justify-center">
                            <a href="/products/column-pipe" class="text-blue-600 hover:text-blue-700 font-semibold">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
function changeMainImage(imageSrc, thumbnailElement) {
    // Change the main image
    document.getElementById('main-product-image').src = imageSrc;
    
    // Remove active state from all thumbnails
    const thumbnails = document.querySelectorAll('.grid.grid-cols-4.gap-3 > div');
    thumbnails.forEach(thumb => {
        thumb.classList.remove('border-2', 'border-blue-600', 'shadow-lg', 'transform', 'scale-105');
        thumb.classList.add('bg-gray-100');
        thumb.classList.remove('bg-white');
    });
    
    // Add active state to clicked thumbnail
    thumbnailElement.classList.add('border-2', 'border-blue-600', 'shadow-lg', 'transform', 'scale-105');
    thumbnailElement.classList.remove('bg-gray-100');
    thumbnailElement.classList.add('bg-white');
}
</script>
