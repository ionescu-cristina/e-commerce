<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/images', ImageController::class);

Route::post('/upload', [ImageController::class, 'store']);

Route::get('/{any}', function(){
    return view('landing');
})->where('any', '.*');