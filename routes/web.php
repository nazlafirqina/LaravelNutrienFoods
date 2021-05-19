<?php

use App\Http\Controllers\TipeMakananController;
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
});