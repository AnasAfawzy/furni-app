<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/about_us', 'about_us')->name('about_us');
    Route::get('/services', 'services')->name('services');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact_us', 'contact_us')->name('contact_us');
    Route::get('/contact_list', 'contact_list')->name('contact_list');
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::get('/thankyou', 'thankyou')->name('thankyou');
    Route::post('/contact/store', 'store')->name('contact_store');
});
