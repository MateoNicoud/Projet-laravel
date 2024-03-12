<?php


use App\Http\Controllers\AddProductController;
use App\Http\Controllers\AddStorageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
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


Route::get('/', [HomePageController::class, 'index']);

Route::get('/products/{id}',[ProductController::class,'show']);
Route::get('/catalog/{slug}', [ProductController::class,'index']);

Route::get('/search', [SearchController::class, 'getProducts']);


//TODO: passer les prapametres avec les bon name
Route::post('addToCart/{id}', [AddProductController::class, 'addCart'])->name('addToCart');
Route::post('addToCart/{id}', [AddProductController::class, 'addCart'])->name('addToCart');

Route::get('/cart',[CartController::class,'index'])->name('cart');
Route::put('/cart',[CartController::class,'update'])->name('updateCart');
Route::delete('/cart',[CartController::class,'destroy'])->name('destroyCart');
Route::post('/cart',[CartController::class,'store'])->name('storeCart');



Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/addStorage', [AddStorageController::class, 'index'])->name('addStorage');
    Route::post('/addStorage', [AddStorageController::class, 'store'])->name('addStorage');
    Route::post('/addStorage/{option}', [AddStorageController::class, 'destroy'])->name('addStorage');

});

require __DIR__.'/auth.php';
