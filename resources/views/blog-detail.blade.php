@extends('layouts.app')

@section('title', $blogPost['title'] . ' - Konami Plast Engineering')

@section('content')
    <!-- Page Header -->
    <div class="relative h-[300px] sm:h-[350px] md:h-[400px] bg-gray-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/uploads/image_23.png" 
                 alt="{{ $blogPost['title'] }}" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/90"></div>
        </div>
        
        <div class="relative z-10 h-full flex items-center justify-center pt-16 sm:pt-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">{{ $blogPost['title'] }}</h1>
                <p class="mt-2 text-base sm:text-lg text-blue-200">{{ $blogPost['excerpt'] }}</p>
            </div>
        </div>
    </div>

    <!-- Blog Content -->
    <article class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Article Meta -->
            <div class="flex flex-wrap items-center justify-between mb-8 pb-8 border-b border-gray-200">
                <div class="flex items-center mb-4 sm:mb-0">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Admin</p>
                        <p class="text-sm text-gray-600">Content Manager</p>
                    </div>
                </div>
                <div class="flex flex-wrap items-center text-sm text-gray-600 gap-4">
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        {{ date('F j, Y', strtotime($blogPost['published_date'])) }}
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-eye mr-2"></i>
                        {{ number_format($blogPost['views']) }} views
                    </div>
                </div>
            </div>

            <!-- Featured Image -->
            <div class="mb-12">
                <img src="{{ $blogPost['image'] }}" 
                     alt="{{ $blogPost['title'] }}" 
                     class="w-full h-96 object-cover rounded-2xl shadow-lg">
            </div>

            <!-- Article Content -->
            <div class="prose prose-lg max-w-none">
                <div class="text-gray-700 leading-relaxed">
                    {!! $blogPost['content'] !!}
                </div>
            </div>

            <!-- Tags -->
            <div class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex flex-wrap gap-2">
                    @foreach($blogPost['tags'] as $tag)
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm font-semibold rounded-full">
                            #{{ $tag }}
                        </span>
                    @endforeach
                </div>
            </div>

            <!-- Author Bio -->
            <div class="mt-12 p-8 bg-gray-50 rounded-2xl">
                <div class="flex items-start">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mr-6 flex-shrink-0">
                        <i class="fas fa-user text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">About Admin</h3>
                        <p class="text-gray-600 mb-3">Content Manager</p>
                        <p class="text-gray-700 leading-relaxed">
                            Admin is responsible for creating and managing high-quality content related to piping solutions. 
                            With expertise in the industry, they provide valuable insights, technical guides, and 
                            expert articles to help readers make informed decisions about piping systems and applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Related Articles -->
    @if($relatedPosts)
        <section class="py-16 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Related Articles</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($relatedPosts as $relatedPost)
                        <div class="group bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden border border-gray-100">
                            <div class="aspect-w-16 aspect-h-9 h-48 relative overflow-hidden">
                                <img src="{{ $relatedPost['image'] }}" 
                                     alt="{{ $relatedPost['title'] }}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-gray-600 text-sm mb-3">
                                    <i class="fas fa-calendar-alt mr-2"></i>
                                    {{ date('M j, Y', strtotime($relatedPost['published_date'])) }}
                                </div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300 line-clamp-2">
                                    {{ $relatedPost['title'] }}
                                </h3>
                                <p class="text-gray-600 mb-4 line-clamp-2 text-sm">
                                    {{ $relatedPost['excerpt'] }}
                                </p>
                                <a href="/blog/{{ $relatedPost['slug'] }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold text-sm transition-colors duration-300">
                                    Read More <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Newsletter CTA -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-blue-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Enjoyed this article?</h2>
            <p class="text-xl text-blue-200 mb-8">
                Subscribe to our newsletter to get more expert insights and industry updates delivered to your inbox.
            </p>
            <form class="max-w-md mx-auto flex flex-col sm:flex-row gap-4">
                <input type="email" 
                       placeholder="Enter your email address" 
                       class="flex-1 px-6 py-3 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent transition-all duration-300">
                <button type="submit" class="px-8 py-3 bg-white text-blue-700 font-bold rounded-xl hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Subscribe
                </button>
            </form>
        </div>
    </section>
@endsection
