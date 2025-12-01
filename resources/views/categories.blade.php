@extends('layouts.app')

@section('title', 'Categories - Konami Plast Engineering')

@section('content')
    <!-- Page Header -->
    <div class="relative h-[400px] bg-gray-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/uploads/image_23.png" 
                 alt="Product Categories" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/90"></div>
        </div>
        
        <div class="relative z-10 h-full flex items-center justify-center pt-20">
            <div class="max-w-4xl mx-auto px-6 sm:px-8 lg:px-12 text-center">
                <h1 class="text-3xl md:text-5xl font-black text-white mb-4 leading-tight">
                    Product Categories
                    <span class="block text-blue-400 text-2xl md:text-4xl mt-2">Complete Pipe Solutions</span>
                </h1>
                <p class="text-lg text-gray-200 mb-8 leading-relaxed max-w-2xl mx-auto">
                    Explore our comprehensive range of PVC, UPVC, and CPVC pipes designed for various applications including plumbing, agriculture, and industrial use.
                </p>
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <div id="categories" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Product Categories</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Choose from our wide range of high-quality pipe products, each designed to meet specific industry standards and applications
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- PVC Category -->
                <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="aspect-w-16 aspect-h-12 h-64 relative">
                        <img src="/uploads/image_1.png" 
                             alt="PVC Pipes" 
                             class="w-full h-full object-center object-cover lg:w-full lg:h-full group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Popular
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-cube text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900">PVC Pipes</h3>
                                <p class="text-gray-600">Versatile & Durable</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-6">
                            High-quality PVC pipes perfect for water supply, plumbing, and irrigation systems. Excellent chemical resistance and long-lasting performance.
                        </p>
                        <div class="space-y-2 mb-6">
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                BIS Certified Products
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                UV Stabilized
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                50+ Years Life
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <a href="/category/pvc" class="flex-1 block px-4 py-3 bg-blue-600 text-white text-center font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300">
                                View Products
                            </a>
                        </div>
                    </div>
                </div>

                <!-- UPVC Category -->
                <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="aspect-w-16 aspect-h-12 h-64 relative">
                        <img src="/uploads/image_2.png" 
                             alt="UPVC Pipes" 
                             class="w-full h-full object-center object-cover lg:w-full lg:h-full group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Eco-Friendly
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-recycle text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900">UPVC Pipes</h3>
                                <p class="text-gray-600">Corrosion Resistant</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-6">
                            Premium UPVC pipes ideal for potable water distribution, sewage systems, and chemical transportation. Lead-free and environmentally safe.
                        </p>
                        <div class="space-y-2 mb-6">
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Lead-Free Material
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                High Flow Rate
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Low Maintenance
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <a href="/category/upvc" class="flex-1 block px-4 py-3 bg-blue-600 text-white text-center font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300">
                                View Products
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CPVC Category -->
                <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="aspect-w-16 aspect-h-12 h-64 relative">
                        <img src="/uploads/image_3.png" 
                             alt="CPVC Pipes" 
                             class="w-full h-full object-center object-cover lg:w-full lg:h-full group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div class="absolute top-4 right-4 bg-orange-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            High Temp
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-temperature-high text-orange-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900">CPVC Pipes</h3>
                                <p class="text-gray-600">Heat Resistant</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-6">
                            Advanced CPVC pipes designed for hot water distribution and industrial applications. Withstands temperatures up to 90°C.
                        </p>
                        <div class="space-y-2 mb-6">
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                90°C Temperature
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Fire Retardant
                            </div>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-check text-green-500 mr-2"></i>
                                Industrial Grade
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <a href="/category/cpvc" class="flex-1 block px-4 py-3 bg-blue-600 text-white text-center font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300">
                                View Products
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Our Pipes</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    All our pipe products are manufactured with the highest quality standards and come with guaranteed performance
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-certificate text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">BIS Certified</h3>
                    <p class="text-gray-600">All products meet Indian Standards specifications for quality and safety</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-3xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Durable</h3>
                    <p class="text-gray-600">Long-lasting performance with 50+ years of service life</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-tint text-3xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Leak Proof</h3>
                    <p class="text-gray-600">Precision-engineered joints ensure completely leak-free installations</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-leaf text-3xl text-orange-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Eco-Friendly</h3>
                    <p class="text-gray-600">Non-toxic materials safe for potable water and environment</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-700 py-20">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-white mb-4">
                Need Help Choosing the Right Pipes?
            </h2>
            <p class="text-xl text-blue-200 mb-8">
                Our expert team is ready to assist you in selecting the perfect pipe solutions for your specific requirements
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-medium rounded-md text-blue-600 bg-white hover:bg-gray-50 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-phone-alt mr-2"></i>
                    Contact Experts
                </a>
                <a href="/categories" class="inline-flex items-center px-8 py-4 border border-white text-lg font-medium rounded-md text-white hover:bg-white hover:text-blue-600 transition-all duration-300">
                    <i class="fas fa-download mr-2"></i>
                    Download Catalog
                </a>
            </div>
        </div>
    </div>
@endsection
