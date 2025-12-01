@extends('layouts.app')

@section('title', 'Blog - Konami Plast Engineering')

@section('content')
    <!-- Page Header -->
    <div class="relative h-[300px] sm:h-[350px] md:h-[400px] bg-gray-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/uploads/image_23.png" 
                 alt="Blog" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/90"></div>
        </div>
        
        <div class="relative z-10 h-full flex items-center justify-center pt-16 sm:pt-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">Blog</h1>
                <p class="mt-2 text-base sm:text-lg text-blue-200">Industry Insights, Technical Guides & Expert Articles on Piping Solutions</p>
            </div>
        </div>
    </div>

    <!-- Blog Posts -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Featured Post -->
            <div class="mb-16">
                @foreach($blogPosts as $post)
                    @if($post['featured'] && $loop->first)
                        <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                            <div class="aspect-w-16 aspect-h-9 h-80 relative overflow-hidden">
                                <img src="{{ $post['image'] }}" 
                                     alt="{{ $post['title'] }}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                                <div class="absolute top-6 left-6">
                                    <span class="inline-flex items-center px-3 py-1 bg-blue-600 text-white text-sm font-semibold rounded-full">
                                        Featured
                                    </span>
                                </div>
                                <div class="absolute bottom-6 left-6 right-6">
                                    <div class="flex items-center text-white/90 text-xs sm:text-sm mb-2 sm:mb-3">
                                        <i class="fas fa-calendar-alt mr-2"></i>
                                        {{ date('M j, Y', strtotime($post['published_date'])) }}
                                    </div>
                                    <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-white mb-2 sm:mb-3 line-clamp-2">
                                        {{ $post['title'] }}
                                    </h3>
                                    <p class="text-white/90 line-clamp-2 text-sm sm:text-base lg:text-lg">
                                        {{ $post['excerpt'] }}
                                    </p>
                                </div>
                            </div>
                            <div class="p-6 sm:p-8">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center mr-3">
                                            <i class="fas fa-user text-white text-sm"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900 text-sm sm:text-base">Admin</p>
                                            <p class="text-xs sm:text-sm text-gray-600">Content Manager</p>
                                        </div>
                                    </div>
                                    <a href="/blog/{{ $post['slug'] }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold text-sm sm:text-base transition-colors duration-300">
                                        Read Article <i class="fas fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- All Posts Grid -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Recent Articles</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($blogPosts as $post)
                        @if(!$post['featured'] || ($post['featured'] && !$loop->first))
                            <div class="group bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden border border-gray-100">
                                <div class="aspect-w-16 aspect-h-9 h-48 relative overflow-hidden">
                                    <img src="{{ $post['image'] }}" 
                                         alt="{{ $post['title'] }}" 
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center text-gray-600 text-sm mb-3">
                                        <i class="fas fa-calendar-alt mr-2"></i>
                                        {{ date('M j, Y', strtotime($post['published_date'])) }}
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300 line-clamp-2">
                                        {{ $post['title'] }}
                                    </h3>
                                    <p class="text-gray-600 mb-4 line-clamp-2 text-sm">
                                        {{ $post['excerpt'] }}
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center mr-2">
                                                <i class="fas fa-user text-gray-600 text-xs"></i>
                                            </div>
                                            <p class="text-sm font-medium text-gray-900">Admin</p>
                                        </div>
                                        <a href="/blog/{{ $post['slug'] }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold text-sm transition-colors duration-300">
                                            Read More <i class="fas fa-arrow-right ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
