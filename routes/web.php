<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;

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

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/about' , [frontendController::class , 'about'])->name('about');
Route::get('/lectuers' , [frontendController::class , 'lectuers'])->name('lectuers');
Route::get('/gallery' , [frontendController::class , 'gallery'])->name('gallery');
Route::get('/books' , [frontendController::class , 'books'])->name('books');
Route::get('/contact' , [frontendController::class , 'contact'])->name('contact');
Route::get('/witness' , [frontendController::class , 'witness'])->name('witness');

Route::get('/galleryCategory' , [frontendController::class , 'galleryCategory'])->name('galleryCategory');
Route::get('/masses' , [frontendController::class , 'masses'])->name('masses');
