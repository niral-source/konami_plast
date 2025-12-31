
@extends('layouts.app')

@section('title', 'Konami Plast Engineering - PVC, UPVC & CPVC Pipe Manufacturer')
@section('description', 'Konami Plast Engineering is a leading manufacturer of high-quality PVC pipes and engineering solutions. Explore our wide range of products for industrial, agricultural, and plumbing needs.')

@section('content')

    <!-- Inlet / Outlet Pipes Header Section -->
    <div class="relative bg-cover bg-center bg-no-repeat py-16" style="background-image: url('uploads/image_13.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative container mx-auto px-4 flex items-center justify-center py-16">
            <div class="text-center w-full">
                <h2 class="text-3xl md:text-4xl font-bold text-white mx-auto">Inlet / Outlet Pipes</h2>
                <h1 class="text-xl md:text-2xl text-white mt-4">Home &nbsp;&nbsp;&gt;&nbsp;&nbsp; Products & Solutions
                    &nbsp;&nbsp;&gt;&nbsp;&nbsp; Inlet / Outlet Pipes</h1>
            </div>
        </div>
    </div>

    <!-- Inlet / Outlet Pipes Content Section -->
    <div class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <!-- Product Overview -->
                <div class="bg-white rounded-2xl shadow-xl p-8 mb-8 border-l-4 border-green-500">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div>
                            <img src="https://saveraind.com/wp-content/uploads/2025/03/inletpipe2-1.png"
                                alt="Inlet / Outlet Pipes" class="w-full max-w-md mx-auto rounded-lg shadow-lg">
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900 mb-4">Inlet / Outlet Pipes</h2>
                            <p class="text-gray-600 text-lg mb-6">Inlet/Outlet pipes are crucial components in various
                                systems, responsible for managing the flow of liquids or gases. Professionally designed,
                                these pipes are essential for use in washing machines.</p>

                            <div class="text-center">
                                <a href="/savera/contact"
                                    class="inline-block bg-gradient-to-r from-green-500 to-emerald-500 text-white px-8 py-3 rounded-full font-semibold hover:from-green-600 hover:to-emerald-600 transition-all transform hover:scale-105 shadow-lg">
                                    Enquire Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Information -->
                <div class="bg-white rounded-2xl shadow-xl p-8 mb-8 border-l-4 border-emerald-500">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Product information</h3>

                    <!-- Tabs -->
                    <div class="border-b border-gray-200 mb-6">
                        <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                            <button onclick="showTab('features')" id="features-tab"
                                class="tab-btn border-b-2 border-green-500 text-green-600 py-2 px-1 text-sm font-medium">
                                Features
                            </button>
                            <button onclick="showTab('colours')" id="colours-tab"
                                class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-2 px-1 text-sm font-medium">
                                Available Colours
                            </button>
                            <button onclick="showTab('sizes')" id="sizes-tab"
                                class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-2 px-1 text-sm font-medium">
                                Available Sizes
                            </button>
                        </nav>
                    </div>

                    <!-- Tab Content -->
                    <div id="features-content" class="tab-content">
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span class="text-gray-700">Enhanced Flexibility</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                <span class="text-gray-700">Resistant Cut, Abrasion & Strain</span>
                            </li>
                        </ul>
                    </div>

                    <div id="colours-content" class="tab-content hidden">
                        <div class="flex items-center space-x-4">
                            <div class="w-8 h-8 bg-gray-100 border border-gray-300 rounded-full"></div>
                            <span class="text-gray-700">White</span>
                            <div class="w-8 h-8 bg-gray-800 rounded-full"></div>
                            <span class="text-gray-700">Black</span>
                            <div class="w-8 h-8 bg-gray-400 rounded-full"></div>
                            <span class="text-gray-700">Grey</span>
                        </div>
                    </div>

                    <div id="sizes-content" class="tab-content hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full border-collapse border border-gray-300">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="border border-gray-300 px-4 py-2 text-left">Size in MM</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left">Size in Inches</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">16</td>
                                        <td class="border border-gray-300 px-4 py-2">0.5</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="border border-gray-300 px-4 py-2">20</td>
                                        <td class="border border-gray-300 px-4 py-2">0.75</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">25</td>
                                        <td class="border border-gray-300 px-4 py-2">1</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="border border-gray-300 px-4 py-2">32</td>
                                        <td class="border border-gray-300 px-4 py-2">1.25</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">40</td>
                                        <td class="border border-gray-300 px-4 py-2">1.5</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="border border-gray-300 px-4 py-2">50</td>
                                        <td class="border border-gray-300 px-4 py-2">2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Other Products -->
                <div class="bg-white rounded-2xl shadow-xl p-8 mb-8 border-l-4 border-teal-500">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Other Products</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <!-- Product 1 -->
                        <div class="text-center group">
                            <div class="mb-6 overflow-hidden rounded-lg inline-block">
                                <img src="https://saveraind.com/wp-content/uploads/2025/03/reinforcedhose2-1.png"
                                    alt="Steel Wire Reinforced Hose"
                                    class="w-64 h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <h4 class="text-xl font-semibold text-gray-800 mb-3">
                                <a href="https://saveraind.com/steel-wire-reinforced-hose/"
                                    class="hover:text-green-600 transition">Steel Wire Reinforced Hose</a>
                            </h4>
                        </div>

                        <!-- Product 2 -->
                        <div class="text-center group">
                            <div class="mb-6 overflow-hidden rounded-lg inline-block">
                                <img src="https://saveraind.com/wp-content/uploads/elementor/thumbs/Drainage-Pipe1-scaled-r52q0ousa1tyknny6fv2v17ik4c32j2q3jm9m2zbwu.webp"
                                    alt="SWR Pipes"
                                    class="w-64 h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <h4 class="text-xl font-semibold text-gray-800 mb-3">
                                <a href="https://saveraind.com/swr-pipes/" class="hover:text-green-600 transition">SWR
                                    Pipes</a>
                            </h4>
                        </div>

                        <!-- Product 3 -->
                        <div class="text-center group">
                            <div class="mb-6 overflow-hidden rounded-lg inline-block">
                                <img src="https://saveraind.com/wp-content/uploads/2025/03/suctionpipe2-1.png"
                                    alt="PVC Suction Hose"
                                    class="w-64 h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <h4 class="text-xl font-semibold text-gray-800 mb-3">
                                <a href="https://saveraind.com/suction-hose/"
                                    class="hover:text-green-600 transition">PVC Suction Hose</a>
                            </h4>
                        </div>

                        <!-- Product 4 -->
                        <div class="text-center group">
                            <div class="mb-6 overflow-hidden rounded-lg inline-block">
                                <img src="https://saveraind.com/wp-content/uploads/2025/03/gardenhose2-1.png"
                                    alt="PVC Garden Hose"
                                    class="w-64 h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <h4 class="text-xl font-semibold text-gray-800 mb-3">
                                <a href="https://saveraind.com/garden-hose/" class="hover:text-green-600 transition">PVC
                                    Garden Hose</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection