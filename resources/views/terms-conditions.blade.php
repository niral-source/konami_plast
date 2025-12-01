@extends('layouts.app')

@section('title', 'Terms & Conditions - Konami Plast Engineering')

@section('content')
    <!-- Page Header -->
    <div class="relative h-[300px] sm:h-[350px] md:h-[400px] bg-gray-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/uploads/image_23.png" 
                 alt="Terms & Conditions" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/90"></div>
        </div>
        
        <div class="relative z-10 h-full flex items-center justify-center pt-16 sm:pt-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">Terms & Conditions</h1>
                <p class="mt-2 text-base sm:text-lg text-blue-200">Our Terms of Service</p>
            </div>
        </div>
    </div>

    <!-- Terms & Conditions Content -->
    <div class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="p-8 md:p-12">
                    <!-- Introduction -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-file-contract text-blue-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Welcome to Konami Plast Engineering</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            These Terms & Conditions govern your use of the Konami Plast Engineering website and services. By accessing our website, you agree to be bound by these terms and our commitment to providing quality piping solutions.
                        </p>
                    </div>

                    <!-- Acceptance of Terms -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-check-circle text-green-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">1. Acceptance of Terms</h2>
                        </div>
                        <div class="bg-green-50 border border-green-200 p-6 rounded-xl">
                            <p class="text-gray-700">
                                By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.
                            </p>
                        </div>
                    </div>

                    <!-- Use License -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-certificate text-purple-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">2. Use License</h2>
                        </div>
                        <p class="text-gray-600 mb-6">Permission is granted to temporarily download one copy of the materials on Konami Plast Engineering's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title.</p>
                        
                        <div class="bg-purple-50 p-6 rounded-xl">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-start">
                                    <i class="fas fa-check text-green-600 mt-1 mr-3"></i>
                                    <p class="text-gray-700">View and use the website for personal purposes</p>
                                </div>
                                <div class="flex items-start">
                                    <i class="fas fa-times text-red-600 mt-1 mr-3"></i>
                                    <p class="text-gray-700">Modify or copy the materials for commercial use</p>
                                </div>
                                <div class="flex items-start">
                                    <i class="fas fa-check text-green-600 mt-1 mr-3"></i>
                                    <p class="text-gray-700">Download content for offline viewing</p>
                                </div>
                                <div class="flex items-start">
                                    <i class="fas fa-times text-red-600 mt-1 mr-3"></i>
                                    <p class="text-gray-700">Remove any copyright notices from materials</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Disclaimer -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-exclamation-triangle text-yellow-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">3. Disclaimer</h2>
                        </div>
                        <div class="bg-yellow-50 border border-yellow-200 p-6 rounded-xl">
                            <p class="text-gray-700 mb-4">The materials on Konami Plast Engineering's website are provided on an 'as is' basis. Konami Plast Engineering makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties.</p>
                            <ul class="space-y-2 text-gray-600">
                                <li>• No warranties about the accuracy or reliability of information</li>
                                <li>• No guarantees about product availability or specifications</li>
                                <li>• Technical specifications subject to change without notice</li>
                                <li>• Prices may vary based on market conditions</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Limitations -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-ban text-red-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">4. Limitations</h2>
                        </div>
                        <div class="bg-red-50 border border-red-200 p-6 rounded-xl">
                            <p class="text-gray-700 mb-4">In no event shall Konami Plast Engineering or its suppliers be liable for any damages arising out of the use or inability to use the materials on our website.</p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-center">
                                    <i class="fas fa-shield-alt text-red-600 mr-3"></i>
                                    <span class="text-gray-700">Limited liability as per law</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-gavel text-red-600 mr-3"></i>
                                    <span class="text-gray-700">Legal compliance required</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Products and Services -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-box text-indigo-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">5. Products and Services</h2>
                        </div>
                        <p class="text-gray-600 mb-6">Information regarding our products and services:</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-indigo-50 p-6 rounded-xl">
                                <h3 class="font-semibold text-gray-900 mb-3 flex items-center">
                                    <i class="fas fa-industry text-indigo-600 mr-2"></i> Product Availability
                                </h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li>• All products subject to availability</li>
                                    <li>• Custom orders require advance payment</li>
                                    <li>• Bulk discounts available</li>
                                    <li>• Quality assurance guaranteed</li>
                                </ul>
                            </div>
                            <div class="bg-indigo-50 p-6 rounded-xl">
                                <h3 class="font-semibold text-gray-900 mb-3 flex items-center">
                                    <i class="fas fa-tag text-indigo-600 mr-2"></i> Pricing & Terms
                                </h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li>• Prices subject to change without notice</li>
                                    <li>• GST applicable as per law</li>
                                    <li>• Payment terms as per contract</li>
                                    <li>• Delivery charges extra</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Terms -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-credit-card text-green-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">6. Payment Terms</h2>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-green-50 p-6 rounded-xl">
                                <h3 class="font-semibold text-gray-900 mb-3">Payment Methods</h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li>• Bank Transfer (NEFT/RTGS)</li>
                                    <li>• Cheque (subject to clearance)</li>
                                    <li>• Cash (at office only)</li>
                                    <li>• Online payment gateway</li>
                                </ul>
                            </div>
                            <div class="bg-green-50 p-6 rounded-xl">
                                <h3 class="font-semibold text-gray-900 mb-3">Payment Conditions</h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li>• Terms as agreed in contract</li>
                                    <li>• Late payment interest applicable</li>
                                    <li>• Goods remain company property</li>
                                    <li>• Advance payment for custom orders</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Delivery and Shipping -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-truck text-blue-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">7. Delivery and Shipping</h2>
                        </div>
                        <div class="bg-blue-50 p-6 rounded-xl">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-3">Delivery Terms</h3>
                                    <ul class="space-y-2 text-gray-600">
                                        <li>• Delivery timelines are approximate</li>
                                        <li>• Shipping charges may apply</li>
                                        <li>• Risk passes to buyer on delivery</li>
                                        <li>• Force majeure clauses apply</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-3">Shipping Areas</h3>
                                    <ul class="space-y-2 text-gray-600">
                                        <li>• Pan India delivery available</li>
                                        <li>• International shipping on request</li>
                                        <li>• Express delivery options</li>
                                        <li>• Tracking facility provided</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Returns and Refunds -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-undo text-orange-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">8. Returns and Refunds</h2>
                        </div>
                        <div class="bg-orange-50 border border-orange-200 p-6 rounded-xl">
                            <p class="text-gray-700 mb-4">Returns are accepted only for manufacturing defects and must be reported within 7 days of delivery.</p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-center">
                                    <i class="fas fa-check text-green-600 mr-3"></i>
                                    <span class="text-gray-700">Manufacturing defects covered</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-times text-red-600 mr-3"></i>
                                    <span class="text-gray-700">Custom orders non-returnable</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-clock text-orange-600 mr-3"></i>
                                    <span class="text-gray-700">7 days reporting window</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-file-alt text-blue-600 mr-3"></i>
                                    <span class="text-gray-700">Proof of purchase required</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Intellectual Property -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-copyright text-purple-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">9. Intellectual Property</h2>
                        </div>
                        <div class="bg-purple-50 p-6 rounded-xl">
                            <p class="text-gray-700 mb-4">All content, including trademarks, logos, and images, is the property of Konami Plast Engineering and protected by intellectual property laws.</p>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                                <div>
                                    <i class="fas fa-trademark text-purple-600 text-2xl mb-2"></i>
                                    <p class="text-sm text-gray-600">Trademarks Protected</p>
                                </div>
                                <div>
                                    <i class="fas fa-copyright text-purple-600 text-2xl mb-2"></i>
                                    <p class="text-sm text-gray-600">Copyright Reserved</p>
                                </div>
                                <div>
                                    <i class="fas fa-patent text-purple-600 text-2xl mb-2"></i>
                                    <p class="text-sm text-gray-600">Patents Applied</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Governing Law -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-gavel text-red-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">10. Governing Law</h2>
                        </div>
                        <div class="bg-red-50 border border-red-200 p-6 rounded-xl">
                            <p class="text-gray-700">
                                These terms and conditions are governed by and construed in accordance with the laws of India and you irrevocably submit to the exclusive jurisdiction of the courts in Mumbai.
                            </p>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="mb-12">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-indigo-600 text-xl"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">11. Contact Information</h2>
                        </div>
                        <p class="text-gray-600 mb-6">Questions about the Terms & Conditions should be sent to us:</p>
                        
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-8 rounded-xl border border-blue-200">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center">
                                    <i class="fas fa-envelope text-blue-600 text-2xl mb-3"></i>
                                    <h3 class="font-semibold text-gray-900 mb-2">Legal Email</h3>
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

                    <!-- Amendments -->
                    <div class="border-t border-gray-200 pt-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Terms Updates</h3>
                                <p class="text-gray-600">Konami Plast Engineering may revise these terms and conditions at any time without notice.</p>
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
