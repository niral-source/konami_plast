@extends('layouts.app')

@section('title', 'Privacy Policy - Konami Plast Engineering')

@section('content')
    <!-- Page Header -->
    <div class="relative h-[300px] sm:h-[350px] md:h-[400px] bg-gray-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/uploads/image_23.png" 
                 alt="Privacy Policy" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/90"></div>
        </div>
        
        <div class="relative z-10 h-full flex items-center justify-center pt-16 sm:pt-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">Privacy Policy</h1>
                <p class="mt-2 text-base sm:text-lg text-blue-200">Your Privacy Matters to Us</p>
            </div>
        </div>
    </div>

    <!-- Privacy Policy Content -->
    <div class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="p-8 md:p-12">
                    <!-- Introduction -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-shield-alt text-blue-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Our Commitment to Privacy</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            At Konami Plast Engineering, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy explains how we collect, use, and safeguard your information when you visit our website or use our services.
                        </p>
                    </div>

                    <!-- Information We Collect -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-database text-green-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Information We Collect</h2>
                        </div>
                        <p class="text-gray-600 mb-6">We may collect the following types of information when you interact with us:</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 p-6 rounded-xl">
                                <h3 class="font-semibold text-gray-900 mb-3 flex items-center">
                                    <i class="fas fa-user text-blue-600 mr-2"></i> Personal Information
                                </h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li>• Name and contact details</li>
                                    <li>• Email address and phone number</li>
                                    <li>• Company information (if applicable)</li>
                                    <li>• Job title and role</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 p-6 rounded-xl">
                                <h3 class="font-semibold text-gray-900 mb-3 flex items-center">
                                    <i class="fas fa-globe text-blue-600 mr-2"></i> Technical Information
                                </h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li>• Website usage data and analytics</li>
                                    <li>• IP address and browser information</li>
                                    <li>• Cookies and tracking data</li>
                                    <li>• Device and connection information</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- How We Use Your Information -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-cogs text-purple-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">How We Use Your Information</h2>
                        </div>
                        <p class="text-gray-600 mb-6">We use your information to provide better services and improve your experience:</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="bg-blue-50 p-4 rounded-lg text-center">
                                <i class="fas fa-handshake text-blue-600 text-2xl mb-3"></i>
                                <h3 class="font-semibold text-gray-900 mb-2">Service Delivery</h3>
                                <p class="text-sm text-gray-600">Provide products and respond to inquiries</p>
                            </div>
                            <div class="bg-green-50 p-4 rounded-lg text-center">
                                <i class="fas fa-chart-line text-green-600 text-2xl mb-3"></i>
                                <h3 class="font-semibold text-gray-900 mb-2">Improvement</h3>
                                <p class="text-sm text-gray-600">Enhance our website and services</p>
                            </div>
                            <div class="bg-purple-50 p-4 rounded-lg text-center">
                                <i class="fas fa-bullhorn text-purple-600 text-2xl mb-3"></i>
                                <h3 class="font-semibold text-gray-900 mb-2">Communication</h3>
                                <p class="text-sm text-gray-600">Send relevant updates and marketing</p>
                            </div>
                        </div>
                    </div>

                    <!-- Data Protection -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-lock text-red-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Data Protection Measures</h2>
                        </div>
                        <div class="bg-red-50 border border-red-200 p-6 rounded-xl">
                            <p class="text-gray-700 mb-4">We implement comprehensive security measures including:</p>
                            <ul class="space-y-2 text-gray-600">
                                <li>• SSL encryption for data transmission</li>
                                <li>• Secure servers and firewalls</li>
                                <li>• Regular security audits and updates</li>
                                <li>• Limited employee access to personal data</li>
                                <li>• Secure data storage and backup systems</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Your Rights -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-user-shield text-yellow-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Your Rights</h2>
                        </div>
                        <p class="text-gray-600 mb-6">You have the following rights regarding your personal information:</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-start p-4 bg-gray-50 rounded-lg">
                                <i class="fas fa-eye text-blue-600 mt-1 mr-3"></i>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Access</h3>
                                    <p class="text-sm text-gray-600">Request access to your personal information</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-gray-50 rounded-lg">
                                <i class="fas fa-edit text-green-600 mt-1 mr-3"></i>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Correction</h3>
                                    <p class="text-sm text-gray-600">Update inaccurate information</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-gray-50 rounded-lg">
                                <i class="fas fa-trash text-red-600 mt-1 mr-3"></i>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Deletion</h3>
                                    <p class="text-sm text-gray-600">Request removal of your data</p>
                                </div>
                            </div>
                            <div class="flex items-start p-4 bg-gray-50 rounded-lg">
                                <i class="fas fa-ban text-purple-600 mt-1 mr-3"></i>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Opt-out</h3>
                                    <p class="text-sm text-gray-600">Unsubscribe from marketing</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-indigo-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Contact Us</h2>
                        </div>
                        <p class="text-gray-600 mb-6">If you have any questions about this Privacy Policy or our data practices, please contact us:</p>
                        
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-8 rounded-xl border border-blue-200">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center">
                                    <i class="fas fa-envelope text-blue-600 text-2xl mb-3"></i>
                                    <h3 class="font-semibold text-gray-900 mb-2">Email</h3>
                                    <p class="text-gray-600">konamiplastengineering@gmail.com</p>
                                </div>
                                <div class="text-center">
                                    <i class="fas fa-phone text-blue-600 text-2xl mb-3"></i>
                                    <h3 class="font-semibold text-gray-900 mb-2">Phone</h3>
                                    <p class="text-gray-600">+91 9574952777</p>
                                </div>
                                <div class="text-center">
                                    <i class="fas fa-map-marker-alt text-blue-600 text-2xl mb-3"></i>
                                    <h3 class="font-semibold text-gray-900 mb-2">Address</h3>
                                    <p class="text-gray-600">72, Adarsh Industrial Estate, Chhatral, Gandhinagar, Gujarat, 382729, INDIA</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Policy Updates -->
                    <div class="border-t border-gray-200 pt-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Policy Updates</h3>
                                <p class="text-gray-600">We may update this Privacy Policy periodically. Changes will be posted on this page.</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-500">Last updated:</p>
                                <p class="font-semibold text-gray-900">{{ date('F d, Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
