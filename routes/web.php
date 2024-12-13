<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rute utama yang menampilkan halaman welcome
Route::view('/', 'welcome')->name('welcome');

// Halaman Home
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

// Halaman About
Route::get('/about', [HomeController::class, 'about'])->name('home.about');

// Halaman Produk (Cycle)
Route::get('/cycle', [HomeController::class, 'product'])->name('home.cycle');

// Halaman Kontak
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('/cart', [HomeController::class, 'showCart'])->name('cart.index');
Route::get('/cart/add/{id}', [HomeController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/remove/{id}', [HomeController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/products/manage', [HomeController::class, 'manageProducts'])->name('products.manage');
Route::get('/products/{id}/edit', [HomeController::class, 'edit'])->name('products.edit');
Route::delete('/products/{product}', [HomeController::class, 'destroy'])->name('products.destroy');
Route::put('/products/{id}', [HomeController::class, 'update'])->name('products.update');

Route::get('/products/create', [HomeController::class, 'create'])->name('products.create');
Route::post('/products', [HomeController::class, 'store'])->name('products.store');
Route::get('/products', [HomeController::class, 'index'])->name('products.index');



Route::get('/make-admin', [HomeController::class, 'makeAdmin']);


// Halaman Dashboard (dengan middleware auth dan verified)
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Halaman Profil Pengguna (hanya middleware auth)
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


    // Route::middleware('role:admin')->group(function () {
    //     Route::get('/adminRoom', function () {
    //         return view('customerverifed.admin-dashboard');
    //     })->name('admin.dashboard');
    // });

// Menggunakan file auth.php untuk rute terkait otentikasi
require __DIR__.'/auth.php';
