@extends('layouts.app')

@section('title', 'Products - Konami Plast Engineering')

@section('content')
    <!-- Page Header -->
    <div class="relative bg-blue-700 py-16 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/uploads/image_23.png" 
                 alt="Our Products" 
                 class="w-full h-full object-cover opacity-20">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h1 class="text-3xl font-bold text-white">Our Products</h1>
            <p class="mt-2 text-lg text-blue-200">High-quality piping solutions for all your needs</p>
        </div>
    </div>

    <!-- Products Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Filters -->
        <div class="mb-8 border-b border-gray-200 pb-5">
            <div class="sm:flex sm:items-center sm:justify-between">
                <div class="w-full sm:max-w-xs">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input id="search" name="search" class="block w-full bg-white border border-gray-300 rounded-md py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-900 focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Search products..." type="search">
                    </div>
                </div>
                <div class="mt-3 sm:mt-0">
                    <select id="category" name="category" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                        <option>All Categories</option>
                        <option>UPVC Pipes</option>
                        <option>CPVC Pipes</option>
                        <option>SWR Pipes</option>
                        <option>Column Pipes</option>
                        <option>Fittings</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
            <!-- Product 1 -->
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-t-lg overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                    <img src="/uploads/image_9.png" alt="PVC Pipes" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        <a href="/products/upvc-pipe">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            UPVC Pipes
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">High-quality UPVC pipes for water supply and drainage systems.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <p class="text-lg font-medium text-gray-900">₹250/meter</p>
                        <a href="/contact?product=upvc-pipe" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Enquire Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-t-lg overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                    <img src="/uploads/image_4.png" alt="UPVC Pipes" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        <a href="/products/cpvc-pipe">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            CPVC Pipes
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Durable CPVC pipes for hot and cold water distribution.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <p class="text-lg font-medium text-gray-900">₹320/meter</p>
                        <a href="/contact?product=cpvc-pipe" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Enquire Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-t-lg overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                    <img src="/uploads/image_5.png" alt="CPVC Pipes" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        <a href="/products/swr-pipe">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            SWR Pipes
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">High-quality SWR pipes for soil, waste, and rainwater drainage.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <p class="text-lg font-medium text-gray-900">₹280/meter</p>
                        <a href="/contact?product=swr-pipe" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Enquire Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-t-lg overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                    <img src="/uploads/image_6.png" alt="SWR Pipes" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        <a href="/products/column-pipe">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Column Pipes
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Heavy-duty column pipes for borewell and submersible pumps.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <p class="text-lg font-medium text-gray-900">₹450/meter</p>
                        <a href="/contact?product=column-pipe" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Enquire Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-t-lg overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                    <img src="/uploads/image_7.png" alt="Column Pipes" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        <a href="/products/pipe-fittings">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Pipe Fittings
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Complete range of high-quality pipe fittings and accessories.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <p class="text-lg font-medium text-gray-900">From ₹50/piece</p>
                        <a href="/contact?product=pipe-fittings" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Enquire Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-t-lg overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                    <img src="/uploads/image_8.png" alt="Pipe Fittings" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        <a href="/products/industrial-pipes">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Industrial Pipes
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Heavy-duty pipes for industrial applications and chemical transport.</p>
                    <div class="mt-4 flex justify-between items-center">
                        <p class="text-lg font-medium text-gray-900">Price on request</p>
                        <a href="/contact?product=industrial-pipes" class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Enquire Now
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Previous</span>
                    <i class="fas fa-chevron-left h-5 w-5"></i>
                </a>
                <a href="#" aria-current="page" class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    1
                </a>
                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    2
                </a>
                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    3
                </a>
                <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                    ...
                </span>
                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                    8
                </a>
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <i class="fas fa-chevron-right h-5 w-5"></i>
                </a>
            </nav>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl">Can't find what you're looking for?</h2>
            <p class="mt-3 text-lg text-gray-500">
                We offer custom solutions for all your piping needs. Contact us for special requirements.
            </p>
            <div class="mt-6">
                <a href="/contact" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Contact Our Experts
                </a>
            </div>
        </div>
    </div>
@endsection
