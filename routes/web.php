<?php

use App\Http\Controllers\TipeMakananController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\JenisTubuhController;


use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('formweight', function () {
    return view('formweight');
})->name('formweight');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');
Route::get('menu', function () {
    return view('menu');
})->name('menu');


Route::prefix('admin')->group(function(){
    Route::prefix('tipemakanan')->group(function(){
        Route::get('/',[TipeMakananController::class, 'index'])->name('admin.tipeMakanan.index');
        Route::get('/create',[TipeMakananController::class, 'create'])->name('admin.tipeMakanan.create');
        Route::post('/store',[TipeMakananController::class, 'store'])->name('admin.tipeMakanan.store');
        Route::get('/edit/{id}',[TipeMakananController::class, 'edit'])->name('admin.tipeMakanan.edit');
        Route::post('/update/{id}',[TipeMakananController::class, 'update'])->name('admin.tipeMakanan.update');
        Route::post('/delete/{id}',[TipeMakananController::class, 'destroy'])->name('admin.tipeMakanan.delete');
    });
    Route::prefix('makanan')->group(function(){
        Route::get('/',[MakananController::class, 'index'])->name('admin.makanan.index');
        Route::get('/create',[MakananController::class, 'create'])->name('admin.makanan.create');
        Route::post('/store',[MakananController::class, 'store'])->name('admin.makanan.store');
        Route::get('/edit/{id}',[MakananController::class, 'edit'])->name('admin.makanan.edit');
        Route::post('/update/{id}',[MakananController::class, 'update'])->name('admin.makanan.update');
        Route::post('/delete/{id}',[MakananController::class, 'destroy'])->name('admin.makanan.delete');
    });
    Route::prefix('jenisTubuh')->group(function(){
        Route::get('/',[JenisTubuhController::class, 'index'])->name('admin.jenisTubuh.index');
        Route::get('/create',[JenisTubuhController::class, 'create'])->name('admin.jenisTubuh.create');
        Route::post('/store',[JenisTubuhController::class, 'store'])->name('admin.jenisTubuh.store');
        Route::get('/edit/{id}',[JenisTubuhController::class, 'edit'])->name('admin.jenisTubuh.edit');
        Route::post('/update/{id}',[JenisTubuhController::class, 'update'])->name('admin.jenisTubuh.update');
        Route::post('/delete/{id}',[JenisTubuhController::class, 'destroy'])->name('admin.jenisTubuh.delete');
    });
});

