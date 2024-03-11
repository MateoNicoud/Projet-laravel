<?php


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




//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomePageController::class, 'index']);

Route::get('products/{id}',[ProductController::class,'show']);
Route::get('/products/{categoryId}', [ProductController::class,'index']);

//Route::get('/home', [HomePageController::class, 'index'])->name('homepage');
Route::get('/search', [SearchController::class, 'getProducts']);



Route::post('addToCart/{id}', [AddProductController::class, 'addCart'])->name('addToCart');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
