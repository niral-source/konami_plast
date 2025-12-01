@extends('layouts.app')

@section('title', 'Contact Us - Konami Plast Engineering')

@section('content')
    <!-- Page Header -->
    <div class="relative h-[300px] sm:h-[350px] md:h-[400px] bg-gray-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/uploads/image_23.png" 
                 alt="Contact Us" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/90"></div>
        </div>
        
        <div class="relative z-10 h-full flex items-center justify-center pt-16 sm:pt-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">Contact Us</h1>
                <p class="mt-2 text-base sm:text-lg text-blue-200">Get in Touch with Our Team</p>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Get in Touch</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    We're Here to Help
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Have questions about our products or services? Reach out to us through any of the channels below.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
                    <!-- Contact Form -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-medium text-gray-900 mb-6">Send us a message</h3>
                        <form action="#" method="POST" class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                <div class="mt-1">
                                    <input type="text" name="name" id="name" autocomplete="name" class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <div class="mt-1">
                                    <input type="tel" name="phone" id="phone" autocomplete="tel" class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                                <div class="mt-1">
                                    <input type="text" name="subject" id="subject" class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <div class="mt-1">
                                    <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 rounded-md"></textarea>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Contact Information -->
                    <div class="space-y-8">
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Contact Information</h3>
                            <div class="space-y-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <i class="h-6 w-6 text-blue-600 fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-base text-gray-700">
                                            72, Adarsh Industrial Estate
                                        </p>
                                        <p class="text-base text-gray-700">
                                            Chhatral, Gandhinagar
                                        </p>
                                        <p class="text-base text-gray-700">
                                            Gujarat, 382729
                                        </p>
                                        <p class="text-base text-gray-700">
                                            INDIA
                                        </p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <i class="h-6 w-6 text-blue-600 fas fa-phone-alt"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-base text-gray-700">+91 9574952777</p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <i class="h-6 w-6 text-blue-600 fas fa-envelope"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-base text-gray-700">konamiplastengineering@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Business Hours</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <p class="text-gray-600">Monday - Friday</p>
                                    <p class="font-medium">9:00 AM - 7:00 PM</p>
                                </div>
                                <div class="flex justify-between">
                                    <p class="text-gray-600">Saturday</p>
                                    <p class="font-medium">10:00 AM - 5:00 PM</p>
                                </div>
                                <div class="flex justify-between">
                                    <p class="text-gray-600">Sunday</p>
                                    <p class="font-medium">Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Our Location</h2>
            <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden">                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3483.280948492355!2d72.44648677510045!3d23.293891778984484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c24932e11b94d%3A0x73b2a9a09dae6ebc!2sBright%20Tubular%20Components!5e1!3m2!1sen!2sin!4v1764596356252!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-700">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Have a question?</span>
                <span class="block">We're here to help.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-blue-200">
                Our customer support team is available 24/7 to assist you with any queries.
            </p>
            <div class="mt-8 flex justify-center space-x-4">
                <a href="tel:+919574952777" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50">
                    <i class="fas fa-phone-alt mr-2"></i>
                    Call Now
                </a>
                <a href="mailto:konamiplastengineering@gmail.com" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 bg-opacity-80 hover:bg-opacity-100">
                    <i class="fas fa-envelope mr-2"></i>
                    Email Us
                </a>
            </div>
        </div>
    </div>

    <!-- Social Media Section -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Connect With Us</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Follow us on social media to stay updated with our latest products, offers, and news.
                </p>
                <div class="mt-8 flex justify-center space-x-6">
                    <a href="#" class="text-gray-400 hover:text-blue-600">
                        <span class="sr-only">Facebook</span>
                        <i class="fab fa-facebook-f text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-600">
                        <span class="sr-only">Twitter</span>
                        <i class="fab fa-twitter text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-600">
                        <span class="sr-only">Instagram</span>
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-600">
                        <span class="sr-only">LinkedIn</span>
                        <i class="fab fa-linkedin-in text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-600">
                        <span class="sr-only">YouTube</span>
                        <i class="fab fa-youtube text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
