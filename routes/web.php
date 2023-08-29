<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Mockery\Generator\Parameter;

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

Route::view('/', "welcome")->name('home')->middleware('auth');
Route::view('/test', "test")->name('test')->middleware('auth');
Route::view('/about', "about")->name('about');
Route::view('/contact', "contact")->name('contact');
// index: listado de posts
// Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
// // El orden sí importa. Si se pone primero el show, no se podrá acceder a create
// Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
// Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
// // show: muestra un post
// Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => [
        'blog' => 'post'
    ]
]);

Route::get('/phones', [PhoneController::class, 'index'])->name('phones.index');
Route::get('/phones/create', [PhoneController::class, 'create'])->name('phones.create');
Route::post('/phones', [PhoneController::class, 'store'])->name('phones.store');
Route::get('/phones/{phone}', [PhoneController::class, 'show'])->name('phones.show');

Route::get('/login', function () {
    // return 'Login';
    return view('auth.login');
})->name('login');

// login post
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');



// register post
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
