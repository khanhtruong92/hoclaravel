<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\HomeController;

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
Route::get('/index', [HomeController::class, 'index']);

// Route::get('/', function() {
    //     return view('welcome');
    // });

// Route::get('/index?view=other', [HomeController::class, 'index']);
// Route::get('/index?view=welcome', [HomeController::class, 'welcome']);

// Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
// Route::get('/tin-tuc', 'App\Http\Controllers\HomeController@getNews')->name('news');
// Route::get('chuyen-muc', [HomeController::class, 'getCategories']);

// Route::get('/unicode', function(){
//     return view('home');
// });

// Route::get('/san-pham', function(){
//     return view('product');
// });

// Route::get('/', function() {
//     return 'Home page';
// });

// Route::get('unicode', function() {
//     return view('form');
//     // return 'Phương thức Post của path /unicode';
// });

// Route::post('unicode', function() {
//     return 'Phương thức Post của path /unicode';
// });

// Route::put('unicode', function() {
//     return 'Phương thức Put của path /unicode';
// });

// Route::delete('unicode', function() {
//     return 'Phương thức Delete của path /unicode';
// });

// Route::patch('unicode', function() {
//     return 'Phương thức Patch của path /unicode';
// });

// Route::get('show-form', function() {
//     return view('form');
// });

// Route::redirect('unicode', 'show-form');

// Route::view('/', 'home');

// Route::prefix('admin')->group(function() {
//     Route::get('show-form', function() {
//     return view('form');
//     })->name('admin.show-form');

//     Route::get('unicode', function() {
//     return 'Phương thức Post của path /unicode';
//     });

//     Route::get('/products/{slug?}-{id?}.html', function($slug = null, $id = null) {
//         $content = 'Phuong thuc voi tham so: ';
//         $content .= 'id = ' . $id . '<br>';
//         $content .= 'slug = ' . $slug;
//         return $content;
//     }) 
//     -> where(
//         [
//             'slug' => '.+',
//             'id' => '\d+'
//         ]
//     )
//     ->name('admin.tintuc')
//     ;
// });

// Route::get('/hello-world', function() {
//     return 'Hello World';
// });
