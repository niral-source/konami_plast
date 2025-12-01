@extends('layouts.app')

@section('title', 'About Us - Konami Plast Engineering')

@section('content')
    <!-- Page Header -->
    <div class="relative h-[300px] sm:h-[350px] md:h-[400px] bg-gray-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/uploads/image_23.png" 
                 alt="About Us" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/90"></div>
        </div>
        
        <div class="relative z-10 h-full flex items-center justify-center pt-16 sm:pt-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">About Konami Plast Engineering</h1>
                <p class="mt-2 text-base sm:text-lg text-blue-200">Your Trusted Partner in Piping Solutions</p>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Our Story</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Building a Better Future with Quality Pipes
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Established with a vision to provide high-quality piping solutions, Konami Plast Engineering has grown to become a trusted name in the industry.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Our Mission</h3>
                        <p class="text-gray-600">
                            To provide innovative, high-quality piping solutions that meet the evolving needs of our customers while maintaining the highest standards of service and sustainability.
                        </p>
                        <div class="mt-6">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Our Mission" class="rounded-lg shadow-lg">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Our Vision</h3>
                        <p class="text-gray-600">
                            To be the most trusted and preferred piping solutions provider, known for our commitment to quality, innovation, and customer satisfaction.
                        </p>
                        <div class="mt-6">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Our Vision" class="rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Our Values</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    The Foundation of Our Success
                </p>
            </div>

            <div class="mt-10">
                <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10 lg:grid-cols-3">
                    <!-- Value 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-medal text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Quality</h3>
                        <p class="mt-2 text-gray-600">
                            We are committed to delivering products that meet the highest industry standards and customer expectations.
                        </p>
                    </div>

                    <!-- Value 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-handshake text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Integrity</h3>
                        <p class="mt-2 text-gray-600">
                            We conduct our business with honesty, transparency, and respect for all stakeholders.
                        </p>
                    </div>

                    <!-- Value 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-lightbulb text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Innovation</h3>
                        <p class="mt-2 text-gray-600">
                            We continuously seek new and better ways to serve our customers and improve our products.
                        </p>
                    </div>

                    <!-- Value 4 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-users text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Customer Focus</h3>
                        <p class="mt-2 text-gray-600">
                            We prioritize our customers' needs and work tirelessly to exceed their expectations.
                        </p>
                    </div>

                    <!-- Value 5 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-leaf text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Sustainability</h3>
                        <p class="mt-2 text-gray-600">
                            We are committed to environmentally responsible practices in all aspects of our business.
                        </p>
                    </div>

                    <!-- Value 6 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-trophy text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900">Excellence</h3>
                        <p class="mt-2 text-gray-600">
                            We strive for excellence in everything we do, from product quality to customer service.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Our Team</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Meet Our Leadership
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    A team of dedicated professionals committed to excellence.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Team Member 1 -->
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <img class="mx-auto h-40 w-40 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Team Member">
                        <h3 class="mt-4 text-lg font-medium text-gray-900">Rajesh Sharma</h3>
                        <p class="text-blue-600">Founder & CEO</p>
                        <p class="mt-2 text-gray-600">
                            With over 20 years of experience in the piping industry, Rajesh leads our company with vision and expertise.
                        </p>
                        <div class="mt-4 flex justify-center space-x-4">
                            <a href="#" class="text-gray-400 hover:text-blue-600">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-600">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <img class="mx-auto h-40 w-40 rounded-full" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Team Member">
                        <h3 class="mt-4 text-lg font-medium text-gray-900">Priya Patel</h3>
                        <p class="text-blue-600">Operations Director</p>
                        <p class="mt-2 text-gray-600">
                            Priya ensures our operations run smoothly and efficiently, maintaining our high standards of quality.
                        </p>
                        <div class="mt-4 flex justify-center space-x-4">
                            <a href="#" class="text-gray-400 hover:text-blue-600">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-600">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <img class="mx-auto h-40 w-40 rounded-full" src="https://randomuser.me/api/portraits/men/75.jpg" alt="Team Member">
                        <h3 class="mt-4 text-lg font-medium text-gray-900">Amit Kumar</h3>
                        <p class="text-blue-600">Technical Director</p>
                        <p class="mt-2 text-gray-600">
                            Amit leads our technical team, ensuring our products meet the highest industry standards.
                        </p>
                        <div class="mt-4 flex justify-center space-x-4">
                            <a href="#" class="text-gray-400 hover:text-blue-600">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-blue-600">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-700">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Ready to start your project?</span>
                <span class="block">Get in touch with us today.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-blue-200">
                Our team is ready to assist you with all your piping needs.
            </p>
            <a href="/contact" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 sm:w-auto">
                Contact Us
            </a>
        </div>
    </div>
@endsection
