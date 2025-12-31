
@extends('layouts.app')

@section('title', 'Konami Plast Engineering - PVC, UPVC & CPVC Pipe Manufacturer')
@section('description', 'Konami Plast Engineering is a leading manufacturer of high-quality PVC pipes and engineering solutions. Explore our wide range of products for industrial, agricultural, and plumbing needs.')

@section('content')

    <!-- Contact Header Section -->
    <div class="relative bg-cover bg-center bg-no-repeat py-16" style="background-image: url('uploads/image_13.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative container mx-auto px-4 flex items-center justify-center py-16">
            <div class="text-center w-full">
                <h2 class="text-3xl md:text-4xl font-bold text-white mx-auto">Contact Us</h2>
                <h1 class="text-xl md:text-2xl text-white mt-4">Home &nbsp;&nbsp;&gt;&nbsp;&nbsp; Contact Us</h1>
            </div>
        </div>
    </div>

    <!-- Contact Content Section -->
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-8">
                
                <!-- Address (Balanced Design) -->
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-xl shadow-lg p-5 border border-gray-100">
                    <div class="flex items-center mb-5">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mr-4 shadow-md">
                            <i class="fas fa-map-marked-alt text-white text-lg"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">Contact Information</h2>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="group bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-blue-200">
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-100 to-blue-200 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-blue-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-gray-900 font-semibold mb-1 group-hover:text-blue-600 transition-colors">Office Address</h3>
                                    <p class="text-gray-600 leading-relaxed">72, Adarsh Industrial Estate, Chhatral, Gandhinagar, Gujarat, 382729</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-blue-200">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gradient-to-r from-green-100 to-green-200 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-phone text-green-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-gray-900 font-semibold mb-1 group-hover:text-green-600 transition-colors">Phone Number</h3>
                                    <p class="text-gray-600">+91 95749 52777</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="group bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-blue-200">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-100 to-purple-200 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-envelope text-purple-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-gray-900 font-semibold mb-1 group-hover:text-purple-600 transition-colors">Email Address</h3>
                                    <p class="text-gray-600">konamiplastengineering@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Business Hours -->
                    <div class="mt-8 p-4 bg-gradient-to-r from-gray-50 to-gray-100 rounded-lg border border-gray-200">
                        <div class="flex items-center mb-3">
                            <div class="w-8 h-8 bg-gradient-to-r from-orange-400 to-orange-500 rounded-lg flex items-center justify-center mr-3">
                                <i class="fas fa-clock text-white text-sm"></i>
                            </div>
                            <h3 class="text-gray-900 font-semibold">Business Hours</h3>
                        </div>
                        <div class="space-y-1 text-gray-600 text-sm ml-11">
                            <p class="flex justify-between"><span>Monday - Friday:</span><span class="font-medium">9:00 AM - 6:00 PM</span></p>
                            <p class="flex justify-between"><span>Saturday:</span><span class="font-medium">9:00 AM - 2:00 PM</span></p>
                            <p class="flex justify-between"><span>Sunday:</span><span class="font-medium text-red-500">Closed</span></p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form (Balanced Design) -->
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-xl shadow-lg p-5 border border-gray-100">
                    <div class="flex items-center mb-5">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center mr-4 shadow-md">
                            <i class="fas fa-paper-plane text-white text-lg"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">Contact Us</h2>
                    </div>
                    <p class="text-gray-600 mb-5">Looking for residential, agriculture & industrial pipes. We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                    
                    <!-- Social Media Links -->
                    <div class="flex justify-center space-x-3 mb-5">
                        <a href="https://www.facebook.com/people/Saverapipes/100089085159343/" class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center hover:from-blue-600 hover:to-blue-700 transform hover:scale-110 transition-all duration-300 shadow-md">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="https://x.com/saverapipes" class="w-12 h-12 bg-gradient-to-r from-sky-400 to-sky-500 rounded-full flex items-center justify-center hover:from-sky-500 hover:to-sky-600 transform hover:scale-110 transition-all duration-300 shadow-md">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/saverapipes/" class="w-12 h-12 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full flex items-center justify-center hover:from-blue-700 hover:to-blue-800 transform hover:scale-110 transition-all duration-300 shadow-md">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                        <a href="https://www.instagram.com/saverapipes/" class="w-12 h-12 bg-gradient-to-r from-pink-500 to-pink-600 rounded-full flex items-center justify-center hover:from-pink-600 hover:to-pink-700 transform hover:scale-110 transition-all duration-300 shadow-md">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                    </div>

                    <!-- Balanced Contact Form -->
                    <form class="space-y-5">
                        <div class="group">
                            <label class="block text-gray-700 font-medium mb-2 group-hover:text-blue-600 transition-colors">Your Name *</label>
                            <div class="relative">
                                <input type="text" class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white transition-all duration-300" required>
                                <div class="absolute left-4 top-3.5 text-gray-400 group-focus-within:text-blue-500 transition-colors">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="group">
                            <label class="block text-gray-700 font-medium mb-2 group-hover:text-blue-600 transition-colors">Your Email *</label>
                            <div class="relative">
                                <input type="email" class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white transition-all duration-300" required>
                                <div class="absolute left-4 top-3.5 text-gray-400 group-focus-within:text-blue-500 transition-colors">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="group">
                            <label class="block text-gray-700 font-medium mb-2 group-hover:text-blue-600 transition-colors">Your Phone</label>
                            <div class="relative">
                                <input type="tel" class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white transition-all duration-300">
                                <div class="absolute left-4 top-3.5 text-gray-400 group-focus-within:text-blue-500 transition-colors">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="group">
                            <label class="block text-gray-700 font-medium mb-2 group-hover:text-blue-600 transition-colors">Your Message *</label>
                            <div class="relative">
                                <textarea rows="4" class="w-full px-4 py-3 pl-12 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white resize-none transition-all duration-300" required></textarea>
                                <div class="absolute left-4 top-3.5 text-gray-400 group-focus-within:text-blue-500 transition-colors">
                                    <i class="fas fa-comment-dots"></i>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-3 rounded-lg hover:from-blue-700 hover:to-blue-800 transform hover:scale-105 transition-all duration-300 font-semibold shadow-md flex items-center justify-center group">
                            <span>Send Message</span>
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        </button>
                    </form>
                </div>

            </div>

            <!-- Map Section -->
            <div class="mt-12">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="h-96 bg-gray-200">
                        <!-- Google Map Embed -->
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.1234567890!2d72.1234567890!3d23.1234567890!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sKonami%20Plast%20Engineering!5e0!3m2!1sen!2sin!4v1234567890"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                            class="w-full h-full">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection