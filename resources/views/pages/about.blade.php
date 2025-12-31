
@extends('layouts.app')

@section('title', 'Konami Plast Engineering - PVC, UPVC & CPVC Pipe Manufacturer')
@section('description', 'Konami Plast Engineering is a leading manufacturer of high-quality PVC pipes and engineering solutions. Explore our wide range of products for industrial, agricultural, and plumbing needs.')

@section('content')
    <!-- About Us Header Section -->
    <div class="relative bg-cover bg-center bg-no-repeat py-16" style="background-image: url('uploads/image_10.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative container mx-auto px-4 flex items-center justify-center py-16">
            <div class="text-center w-full">
                <h2 class="text-3xl md:text-4xl font-bold text-white mx-auto">About Us</h2>
                <h1 class="text-xl md:text-2xl text-white mt-4">Home &nbsp;&nbsp;&gt;&nbsp;&nbsp; About Us</h1>
            </div>
        </div>
    </div>

    <!-- Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">From a Homegrown Brand to a Household
                        Name</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Konami Plast Engineering began with a vision to deliver excellence in PVC pipe manufacturing.
                        Starting with just two machines producing garden hoses, we've grown into a comprehensive
                        engineering solutions provider with three state-of-the-art plants.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Founded in 1992 by industry pioneers, our company has evolved into a multi-product, multi-brand
                        leader serving agricultural, industrial, and domestic markets across India and internationally.
                        We're proud to be among the top PVC pipe manufacturers in the country.
                    </p>
                </div>
                <div class="flex justify-center lg:justify-end">
                    <img src="uploads/image_1.png" alt="Our Journey"
                        class="rounded-2xl shadow-xl hover-lift max-w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="flex justify-center lg:justify-start order-2 lg:order-1">
                    <img src="uploads/image_2.png" alt="Corporate Philosophy"
                        class="rounded-2xl shadow-xl hover-lift max-w-full h-auto">
                </div>
                <div class="order-1 lg:order-2 fade-in">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Corporate Philosophy</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Through our trusted brands, we've built lasting relationships with customers by delivering
                        exceptional quality, competitive pricing, and reliable after-sales support.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Our commitment to innovation and customer satisfaction has established us as a preferred partner
                        in the piping and electrical solutions industry. We continuously invest in technology and
                        processes to exceed customer expectations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values, Vision, Mission Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Foundation</h2>
                <p class="text-xl text-gray-600">The principles that guide our success</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Values -->
                <div
                    class="bg-gradient-to-br from-blue-600 to-blue-800 text-white p-8 rounded-2xl hover-lift text-center">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-heart text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Our Values</h3>
                    <p class="leading-relaxed">
                        Quality excellence, integrity, and customer satisfaction drive us to deliver superior products
                        and innovative solutions with consistency and reliability.
                    </p>
                </div>

                <!-- Vision -->
                <div
                    class="bg-gradient-to-br from-orange-500 to-orange-700 text-white p-8 rounded-2xl hover-lift text-center">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-eye text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Vision</h3>
                    <p class="leading-relaxed">
                        To be the leading producer of high-quality PVC pipes globally, setting benchmarks in innovation,
                        reliability, and customer satisfaction.
                    </p>
                </div>

                <!-- Mission -->
                <div
                    class="bg-gradient-to-br from-gray-700 to-gray-900 text-white p-8 rounded-2xl hover-lift text-center">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-bullseye text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Mission</h3>
                    <p class="leading-relaxed">
                        To maintain brand value through superior manufacturing, stringent quality control, and
                        customized solutions that meet customer needs with precision.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection