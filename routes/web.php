<?php


use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

route::get('/home',[HomeController ::class,'show']);


Route::get('/categories', [CategoryController::class, 'indexforadmin'])->name('categories.index');
Route::get('/products/create', [ProductController::class,'create'])->name('products.create');
Route::post('/products', [ProductController::class,'store'])->name('products.store');
// routes/web.php
Route::get('/admin/products', [ProductController::class,'indexforadmin'])->name('products.indexforadmin');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/displayproducts', [ProductController::class, 'indexforuser'])->name('products.indexforuser');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/bids', [BidController::class, 'store'])->name('bids.store');
<<<<<<< HEAD
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin authentication



Route::post('admin-login',[AdminController::class,'adminLogin'])->name('admin.login');

Route::group(['middleware'=>'admin'],function(){
    Route::get('admin/admin_dashboard',[AdminDashboardController::class,'admindDashboard'])->name('admin.admin_dashboard');
});
=======
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
//Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
>>>>>>> 0094873a2dbb51f4f29c17e923078b0a683b9158
