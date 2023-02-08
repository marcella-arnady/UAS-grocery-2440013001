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

// Login Google
Route::get('/auth/redirect', [UserController::class, 'redirectToProvider']);
Route::get('/auth/callback', [UserController::class, 'handleProviderCallback']);


Route::middleware(['guest'])->group(function() {
    // Index
    Route::get('/', [HomeController::class, 'index'])->name('index');
    // Login
    Route::get('/login', [UserController::class, 'login'])->name('login_user');
    Route::post('loginLogic', [UserController::class, 'login_logic'])->name('login_logic');

    // Register
    Route::get('/register', [UserController::class, 'register_form'])->name('register_form');
    Route::post('register/action', [UserController::class, 'register_logic'])->name('register_logic');
});

Route::middleware(['administrator'])->group(function() {


    // Manage 
    Route::get('/maintenance', [ProductController::class, 'maintenance'])->name('maintenance');

    // Update 
    Route::get('/maintenance/update', [ProductController::class, 'update_user_form'])->name('update_user_form');
    Route::patch('/maintenance/update', [ProductController::class, 'update_user_logic'])->name('update_user_logic');

    // Delete 
    Route::delete('/maintenance/delete', [ProductController::class, 'delete_user'])->name('delete_user');

    

});

Route::middleware(['registered'])->group(function() {


    // wishlist
    Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
    Route::post('/wishlist/add', [WishlistController::class, 'add_to_wishlist'])->name('add_to_wishlist');
    Route::delete('/wishlist/delete', [WishlistController::class, 'delete_wishlist'])->name('delete_wishlist');
    Route::delete('/wishlist/purchase', [WishlistController::class, 'buy_wishlist'])->name('buy_wishlist');

});
    // Home
    Route::get('/home', [HomeController::class, 'home'])->name('home');
// wishlist
Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
Route::post('/wishlist/add', [WishlistController::class, 'add_to_wishlist'])->name('add_to_wishlist');
Route::delete('/wishlist/delete', [WishlistController::class, 'delete_wishlist'])->name('delete_wishlist');
Route::delete('/wishlist/purchase', [WishlistController::class, 'buy_wishlist'])->name('buy_wishlist');
// Logout
Route::get('logoutLogic', [UserController::class, 'logout_logic'])->name('logout_logic')->middleware('auth');


// Products
Route::get('/detail/{id}', [ProductController::class, 'detail']);

// Profile Page
Route::get('/profile', [UserController::class, 'profile_index'])->name('profile')->middleware('auth');

