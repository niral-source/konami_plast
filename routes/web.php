<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Homepage
Route::get('/', function () {
    return view('pages.index');
})->name('home');

// Distributor Inquiry Page
Route::get('/distributor-inquiry', function () {
    return view('pages.distributor-inquiry');
})->name('distributor.inquiry');

// About Us Page
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Products Page
Route::get('/products', function () {
    return view('pages.products');
})->name('products');

// Product Category Page
Route::get('/products/{category}', function ($category) {
    return view('pages.product-category', ['category' => $category]);
})->name('products.category');

// Product Detail Page
Route::get('/product/{slug}', function ($slug) {
    return view('pages.product-detail', ['slug' => $slug]);
})->name('product.detail');

// Blog Page
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

// Blog Detail Page
Route::get('/blog/{slug}', function ($slug) {
    return view('pages.blog_detail', ['slug' => $slug]);
})->name('blog.detail');

// Contact Us Page
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Careers Page
Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

// Distributor Inquiry Page
Route::get('/inquiry', function () {
    return view('pages.inquiry');
})->name('inquiry');

// Handle Contact Form Submission
Route::post('/contact/submit', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');

// Handle Newsletter Subscription
Route::post('/newsletter/subscribe', [App\Http\Controllers\NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Handle Job Application
Route::post('/careers/apply', [App\Http\Controllers\CareerController::class, 'apply'])->name('careers.apply');

// Handle Distributor Inquiry
Route::post('/inquiry/submit', [App\Http\Controllers\InquiryController::class, 'submit'])->name('inquiry.submit');
