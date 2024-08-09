<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/about',[\App\Http\Controllers\AboutController::class,'about'])->name('about');
Route::get('/services',[\App\Http\Controllers\ServiceController::class,'services'])->name('services');
Route::get('/desktop',[\App\Http\Controllers\ServiceController::class,'desktop'])->name('desktop');
Route::get('/desktop-delhi',[\App\Http\Controllers\ServiceController::class,'desktop_delhi'])->name('desktop-delhi');
Route::get('/desktop-gurgaon',[\App\Http\Controllers\ServiceController::class,'desktop_gurgaon'])->name('desktop-gurgaon');
Route::get('/laptop',[\App\Http\Controllers\ServiceController::class,'laptop'])->name('laptop');
Route::get('/mac-system',[\App\Http\Controllers\ServiceController::class,'mac_system'])->name('mac-system');
Route::get('/workstation',[\App\Http\Controllers\ServiceController::class,'workstation'])->name('workstation');
Route::get('/support',[\App\Http\Controllers\ServiceController::class,'support'])->name('support');
Route::get('/contact',[\App\Http\Controllers\ContectController::class,'contact'])->name('contact');
Route::get('/blogs',[\App\Http\Controllers\ContectController::class,'blogs'])->name('blogs');
Route::get('/blog/{slug}',[\App\Http\Controllers\ContectController::class,'blog_details'])->name('blog_details');


Route::get('/privacy',[\App\Http\Controllers\ContectController::class,'privacy'])->name('privacy');
Route::get('/terms',[\App\Http\Controllers\ContectController::class,'terms'])->name('terms');

Route::get('/category/{slug}',[ProductController::class,'category_product'])->name('product_category');

Route::get('/brand/{slug}',[ProductController::class,'brand_product'])->name('brand_product');


Route::get('/product/{slug}',[ProductController::class,'product'])->name('product_details');

Route::post('store_enquery',[ServiceController::class,'store_enquery'])->name('store_enquery');


Route::get('/by-engaging-with-laptop-rental-service',[\App\Http\Controllers\ServiceController::class,'laptop_rental_service'])->name('by-engaging-with-laptop-rental-service');
Route::get('/mail',[\App\Http\Controllers\MailController::class,'mail'])->name('mail');
Route::get('/mailer',[\App\Http\Controllers\MailController::class,'mailer'])->name('mailer');
