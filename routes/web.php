<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\UserController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

// Route chuyển hướng đến HomeController để xử lý
// Route::get('/index', [HomeController::class, 'index']);
// Route::get('/examples', [ExampleController::class, 'index']);
// Route::get('/books', [BookController::class, 'index']);

Route::resource('users', UserController::class);

// Client Routes
Route::prefix('categories')->group(function () {
    // Danh sach chuyen muc
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');

    // Lay chi tiet mot chuyen muc (Ap dung show form sua chuyen muc)
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');

    // Xu ly update chuyen muc 
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);
    
    // Hien thi form add du lieu
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');

    // Xu ly chuyen muc
    Route::post('/add', [CategoriesController::class, 'handleAddCategory']);

    // Xoa chuyen muc
    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');
});

// Admin Routes
Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::resource('products', ProductController::class)->middleware('auth.admin.product');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('san-pham/{id}', [HomeController::class, 'getProductDetail']);
