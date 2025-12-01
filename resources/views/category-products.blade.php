@extends('layouts.app')

@section('title', $category['name'] . ' Products - Konami Plast Engineering')

@section('content')
    <!-- Page Header -->
    <div class="relative h-[400px] bg-gray-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/uploads/image_23.png" 
                 alt="{{ $category['name'] }}" 
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
                    <span class="text-white font-semibold">{{ $category['name'] }}</span>
                </nav>
                <h1 class="text-3xl md:text-5xl font-black text-white mb-4 leading-tight">
                    {{ $category['name'] }}
                    <span class="block text-blue-400 text-2xl md:text-4xl mt-2">{{ $category['subtitle'] }}</span>
                </h1>
                <p class="text-lg text-gray-200 mb-8 leading-relaxed max-w-2xl mx-auto">
                    {{ $category['description'] }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="inline-flex items-center px-6 py-2 border border-transparent text-base font-bold rounded-xl text-white bg-blue-600 hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-phone-alt mr-2"></i>
                        Get Quote
                    </a>
                    <a href="#products" class="inline-flex items-center px-6 py-2 border border-white text-base font-bold rounded-xl text-white hover:bg-white hover:text-gray-900 transition-all duration-300">
                        <i class="fas fa-cube mr-2"></i>
                        View Products
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Features -->
    @if(isset($category['features']) && !empty($category['features']))
    <div class="py-16 bg-gray-50 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($category['features'] as $feature)
                <div class="text-center">
                    <div class="w-16 h-16 bg-{{ $feature['color'] }}-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-{{ $feature['icon'] }} text-2xl text-{{ $feature['color'] }}-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $feature['title'] }}</h3>
                    <p class="text-gray-600 text-sm">{{ $feature['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- Products Section -->
    <div id="products" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">{{ $category['name'] }} Products</h2>
                    <p class="text-gray-600">{{ count($products) }} products available</p>
                </div>
                <div class="flex items-center gap-4">
                    <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Sort by: Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Name: A to Z</option>
                    </select>
                    <div class="flex gap-2">
                        <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                            <i class="fas fa-th text-gray-600"></i>
                        </button>
                        <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                            <i class="fas fa-list text-gray-600"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($products as $product)
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-gray-100">
                    <div class="aspect-w-16 aspect-h-12 h-64 relative overflow-hidden">
                        <img src="/uploads/image_10.jpg" 
                             alt="{{ $product['name'] }}" 
                             class="w-full h-full object-center object-cover lg:w-full lg:h-full group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4">
                            @if($product['featured'])
                            <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Featured</span>
                            @endif
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-4 left-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <a href="/product/{{ $product['slug'] }}?category={{ $category['type'] }}" class="block w-full px-4 py-2 bg-white text-gray-900 text-center font-semibold rounded-lg hover:bg-gray-100 transition-colors duration-300">
                                View Details
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="mb-4">
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                                {{ $product['name'] }}
                            </h3>
                            <p class="text-gray-600 text-sm mb-3">{{ $product['short_description'] }}</p>
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="fas fa-ruler-combined mr-1"></i>{{ $product['size'] }}</span>
                                <span><i class="fas fa-weight mr-1"></i>{{ $product['weight'] }}</span>
                            </div>
                        </div>
                        
                        <div class="space-y-2 mb-4">
                            @foreach(array_slice($product['specifications'], 0, 2) as $spec)
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                {{ $spec }}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-16 flex justify-center">
                <nav class="flex items-center gap-2">
                    <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">1</button>
                    <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">2</button>
                    <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">3</button>
                    <span class="px-4 py-2 text-gray-500">...</span>
                    <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">12</button>
                    <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </nav>
            </div>
        </div>
    </div>

    <!-- Specifications Section -->
    <div class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ $category['name'] }} Specifications</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Technical specifications and standards for our {{ $category['name'] }} product range
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Technical Specifications</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between py-3 border-b border-gray-100">
                            <span class="text-gray-600">Material Grade</span>
                            <span class="font-semibold text-gray-900">{{ $category['specs']['material_grade'] }}</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-100">
                            <span class="text-gray-600">Standard</span>
                            <span class="font-semibold text-gray-900">{{ $category['specs']['standard'] }}</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-100">
                            <span class="text-gray-600">Temperature Range</span>
                            <span class="font-semibold text-gray-900">{{ $category['specs']['temperature'] }}</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-gray-100">
                            <span class="text-gray-600">Pressure Rating</span>
                            <span class="font-semibold text-gray-900">{{ $category['specs']['pressure'] }}</span>
                        </div>
                        <div class="flex justify-between py-3">
                            <span class="text-gray-600">Size Range</span>
                            <span class="font-semibold text-gray-900">{{ $category['specs']['size_range'] }}</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Applications</h3>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach($category['applications'] as $application)
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-{{ $application['icon'] }} text-blue-600"></i>
                            </div>
                            <span class="text-gray-700">{{ $application['name'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-700 py-20">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-white mb-4">
                Need Custom {{ $category['name'] }} Solutions?
            </h2>
            <p class="text-xl text-blue-200 mb-8">
                We offer customized pipe solutions tailored to your specific requirements and applications
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-medium rounded-md text-blue-600 bg-white hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-phone-alt mr-2"></i>
                    Contact Sales Team
                </a>
                <a href="/categories" class="inline-flex items-center px-8 py-4 border border-white text-lg font-medium rounded-md text-white hover:bg-white hover:text-blue-600 transition-all duration-300">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Back to Categories
                </a>
            </div>
        </div>
    </div>
@endsection
