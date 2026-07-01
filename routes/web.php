<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Dummy routes for links
Route::get('/about', fn() => view('frontend.about'))->name('about');
Route::get('/contact', fn() => view('frontend.contact'))->name('contact');
Route::post('/contact', fn() => back()->with('success', 'Thank you! Your message has been sent successfully.'))->name('contact.store');
Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');
Route::get('/products', fn() => 'Products')->name('products.index');
Route::get('/product/{slug}', function ($slug) {
    $product = \App\Models\Product::with('category')->where('slug', $slug)->firstOrFail();
    return view('frontend.products.show', compact('product'));
})->name('products.show');
Route::get('/replacement-parts', fn() => 'Replacement Parts')->name('replacement-parts');
Route::get('/replacement-brand/{slug}', function ($slug) {
    $brand = \App\Models\ReplacementBrand::where('slug', $slug)->firstOrFail();
    return view('frontend.replacement_brands.show', compact('brand'));
})->name('replacement-brand');
Route::get('/blog', fn() => 'Blog')->name('blog.index');
