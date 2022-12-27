<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UpdateProfileController;

use App\Models\Product;

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

Route::get('/', function(){
    return view('home', [
        'title' => 'Home',
        'products' => Product::all()
    ]);
})->middleware('auth');

Route::get('cart', function(){
    return view('cart.index', [
        'title' => 'Carts'
    ]);
});

Route::get('/products', [ProductController::class, 'index'])->middleware('auth');

Route::get('/products/{product:slug}', [ProductController::class, 'show'])->middleware('auth');

Route::get('/categories/{category:slug}', [ProductController::class, 'kategori'])->middleware('auth');

Route::get('/catalogues/{catalogue:slug}', [ProductController::class, 'katalog'])->middleware('auth');





Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);



Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);



// dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/products', DashboardController::class)->middleware('auth');

// profle
Route::get('/user', function(){
    return view('users.index', [
        'title' => 'Profile'
    ]);
});

Route::prefix('profile')->group(function(){
    Route::get('edit', [UpdateProfileController::class, 'edit'])->name('profile.edit');

    Route::put('update', [UpdateProfileController::class, 'update'])->name('profile.update');
});



