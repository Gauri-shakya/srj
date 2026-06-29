<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Dummy routes for links
Route::get('/about', fn() => 'About Page')->name('about');
Route::get('/contact', fn() => 'Contact Page')->name('contact');
Route::get('/products', fn() => 'Products')->name('products.index');
Route::get('/products/{slug}', fn($slug) => "Category: $slug")->name('products.category');
Route::get('/replacement-parts', fn() => 'Replacement Parts')->name('replacement-parts');
Route::get('/replacement-brand/{slug}', fn($slug) => "Brand: $slug")->name('replacement-brand');
Route::get('/blog', fn() => 'Blog')->name('blog.index');
