<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;

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

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Login Google
Route::get('/auth/redirect', [UserController::class, 'redirectToProvider']);
Route::get('/auth/callback', [UserController::class, 'handleProviderCallback']);


Route::middleware(['guest'])->group(function() {
    // Login
    Route::get('/login', [UserController::class, 'login'])->name('login_user');
    Route::post('loginLogic', [UserController::class, 'login_logic'])->name('login_logic');

    // Register
    Route::get('/register', [UserController::class, 'register_form'])->name('register_form');
    Route::post('register/action', [UserController::class, 'register_logic'])->name('register_logic');
});

Route::middleware(['administrator'])->group(function() {
    // Manage Product
    Route::get('/product/manage', [ProductController::class, 'manage_product'])->name('manage_product');

    // Add Product
    Route::get('/product/add', [ProductController::class, 'add_form'])->name('product_add_form');
    Route::post('/product/add', [ProductController::class, 'add_logic'])->name('product_add_logic');

    // Update Product
    Route::get('/product/update', [ProductController::class, 'update_product_form'])->name('update_product_form');
    Route::patch('/product/update', [ProductController::class, 'update_product_logic'])->name('update_product_logic');

    // Delete Product
    Route::delete('/product/delete', [ProductController::class, 'delete_product'])->name('delete_product');
});

Route::middleware(['registered'])->group(function() {
    // wishlist
    Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
    Route::post('/wishlist/add', [WishlistController::class, 'add_to_wishlist'])->name('add_to_wishlist');
    Route::delete('/wishlist/delete', [WishlistController::class, 'delete_wishlist'])->name('delete_wishlist');
    Route::post('/wishlist/purchase', [WishlistController::class, 'purchase'])->name('purchase');
});

// Logout
Route::get('logoutLogic', [UserController::class, 'logout_logic'])->name('logout_logic')->middleware('auth');

// Category
Route::get('/category/{id}', [CategoryController::class, 'index'])->name('by_category');

// Products
Route::get('/detail/{id}', [ProductController::class, 'detail']);

// Search
Route::get('/search', [ProductController::class, 'search_product'])->name('search_product');
Route::get('/search_admin', [ProductController::class, 'search_product_admin'])->name('search_product_admin');

// Profile Page
Route::get('/profile', [UserController::class, 'profile_index'])->name('profile')->middleware('auth');

// About Us
Route::get('/about', [HomeController::class, 'about_us'])->name('about_us');

// Contact Page
Route::get('/contact', [HomeController::class, 'contact_us'])->name('contact_us');
Route::post('/contact/action', [HomeController::class, 'contact_message'])->name('contact_message');
