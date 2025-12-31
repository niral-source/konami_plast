@extends('layouts.app')

@section('title', 'Konami Plast Engineering - PVC, UPVC & CPVC Pipe Manufacturer')
@section('description', 'Konami Plast Engineering is a leading manufacturer of high-quality PVC pipes and engineering solutions. Explore our wide range of products for industrial, agricultural, and plumbing needs.')

@section('content')

    <!-- Blog Header Section -->
    <div class="relative bg-cover bg-center bg-no-repeat py-16" style="background-image: url('uploads/image_14.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative container mx-auto px-4 flex items-center justify-center py-16">
            <div class="text-center w-full">
                <h2 class="text-3xl md:text-4xl font-bold text-white mx-auto">Blogs</h2>
                <h1 class="text-xl md:text-2xl text-white mt-4">Home &nbsp;&nbsp;&gt;&nbsp;&nbsp; Blogs</h1>
            </div>
        </div>
    </div>

    <!-- Blog Content Section - Modern Tailwind CSS Design -->
    <div class="bg-gradient-to-br from-gray-50 to-blue-50 py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Blog 1 -->
                <div
                    class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="relative overflow-hidden">
                        <a href="{{ route('blog.detail', 'borewells-in-winter-choosing-right-pvc-casing-pipe') }}" class="block">
                            <img src="https://saveraind.com/wp-content/uploads/2025/11/Savera-Blogs-01-1.jpg"
                                alt="Borewells in Winter: Why Choosing the Right PVC Casing Pipe Matters"
                                class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </a>
                        <div class="absolute top-4 left-4">
                            <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-semibold">PVC
                                Pipes</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>November 15, 2024</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                            <a href="{{ route('blog.detail', 'borewells-in-winter-choosing-right-pvc-casing-pipe') }}" class="hover:text-blue-600">
                                Borewells in Winter: Why Choosing the Right PVC Casing Pipe Matters
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            If you're planning a borewell or worried about an existing one during winter months,
                            choosing the right PVC casing pipe is crucial for longevity and performance...
                        </p>
                        <a href="blog-detail-1.html"
                            class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors duration-300 group">
                            Read More
                            <i
                                class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div
                    class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="relative overflow-hidden">
                        <a href="{{ route('blog.detail', '5-minute-fix-leaky-pipe-kitchen-sink') }}" class="block">
                            <img src="https://saveraind.com/wp-content/uploads/2025/11/Savera-Blogs-01.jpg"
                                alt="5-Minute Fix: How to Replace a Leaky Pipe Under Your Kitchen Sink"
                                class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </a>
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold">DIY</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>November 15, 2024</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                            <a href="{{ route('blog.detail', '5-minute-fix-leaky-pipe-kitchen-sink') }}" class="hover:text-blue-600">
                                5-Minute Fix: How to Replace a Leaky Pipe Under Your Kitchen Sink
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            That faint drip… drip… drip from under the kitchen sink is more than just annoying—it's
                            wasting water and potentially causing damage...
                        </p>
                        <a href="blog-detail-2.html"
                            class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors duration-300 group">
                            Read More
                            <i
                                class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div
                    class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="relative overflow-hidden">
                        <a href="{{ route('blog.detail', 'corrugated-flexible-pipes-unsung-hero') }}" class="block">
                            <img src="https://saveraind.com/wp-content/uploads/2025/11/Blog-02-01-768x452.jpg"
                                alt="Corrugated Flexible Pipes: The Unsung Hero of Modern Plumbing & Drainage"
                                class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </a>
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-orange-600 text-white px-3 py-1 rounded-full text-xs font-semibold">Plumbing</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>November 15, 2024</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                            <a href="{{ route('blog.detail', 'corrugated-flexible-pipes-unsung-hero') }}" class="hover:text-blue-600">
                                Corrugated Flexible Pipes: The Unsung Hero of Modern Plumbing & Drainage
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            If you're searching for the difference between HDPE and PVC pipes, or wondering about the
                            best solutions for modern plumbing challenges...
                        </p>
                        <a href="blog-detail-3.html"
                            class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors duration-300 group">
                            Read More
                            <i
                                class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>

                <!-- Blog 4 -->
                <div
                    class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="relative overflow-hidden">
                        <a href="{{ route('blog.detail', 'protect-outdoor-electrical-wires-pvc-conduit') }}" class="block">
                            <img src="https://saveraind.com/wp-content/uploads/2025/11/Savera_Blog-01-768x452.jpg"
                                alt="How to Protect Your Outdoor Electrical Wires with a Simple PVC Conduit"
                                class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </a>
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-red-600 text-white px-3 py-1 rounded-full text-xs font-semibold">Electrical</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>November 15, 2024</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                            <a href="{{ route('blog.detail', 'protect-outdoor-electrical-wires-pvc-conduit') }}" class="hover:text-blue-600">
                                How to Protect Your Outdoor Electrical Wires with a Simple PVC Conduit
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            Outdoor electrical installations require robust protection against weather elements,
                            physical damage, and potential safety hazards...
                        </p>
                        <a href="blog-detail-4.html"
                            class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors duration-300 group">
                            Read More
                            <i
                                class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>

                <!-- Blog 5 -->
                <div
                    class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="relative overflow-hidden">
                        <a href="{{ route('blog.detail', 'green-pvc-pipes-environmental-friendly-options') }}" class="block">
                            <img src="https://saveraind.com/wp-content/uploads/2025/03/environmental-friendly_cropped_resized_466x274.jpg"
                                alt="The Emergence of Green PVC Pipes Environmental-Friendly Options for India's Infrastructure"
                                class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </a>
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-emerald-600 text-white px-3 py-1 rounded-full text-xs font-semibold">Sustainability</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>November 15, 2024</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                            <a href="{{ route('blog.detail', 'green-pvc-pipes-environmental-friendly-options') }}" class="hover:text-blue-600">
                                The Emergence of Green PVC Pipes Environmental-Friendly Options for India's
                                Infrastructure
                            </a>
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            India's fast urbanization and industrial growth require a strong and sustainable
                            infrastructure. Conventional piping systems are being replaced by eco-friendly
                            alternatives...
                        </p>
                        <a href="blog-detail-5.html"
                            class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors duration-300 group">
                            Read More
                            <i
                                class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection