<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
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

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/world', function () {
    return 'World';
});

Route::get('/selamat', function () {
    return 'Selamat Datang' ;
});

Route::get('/about', function () {
    return 'Nama: Agung Rizky S <br> NIM: 2241720187';
});

Route::get('/user/{name}', function ($name) {
    return 'Agung Rizky '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function
($id) {
 return 'Halaman Artikel id ke- '.$id;
});

Route::get('/username/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/username/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });
    
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/index', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/index1', [HomeController::class,'index1']);

Route::get('/about1', [AboutController::class,'about1']);

Route::get('/article1/{id}', [ArticleController::class,'article1']);


use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);
   
   Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Agung Rizky Set']);
    });

    Route::get('/greeting', [WelcomeController::class,'greeting']);