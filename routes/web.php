<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\Homecontroller;

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
    return view('Home');
});

Route::get('/home', 'App\Http\Controllers\Homecontroller@home')->name('home');


Route::get('/about', function () {
    return view('about'); // pastikan view 'about.blade.php' juga ada
})->name('about');


Route::get('articles', [App\Http\Controllers\Homecontroller::class, 'articles'])->name('articles');

Route ::get('/api', [Homecontroller::class, 'api'])->name('api');