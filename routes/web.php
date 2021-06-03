<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TipeMakananController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\JenisTubuhController;
use App\Http\Controllers\AuthController;



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

Route::get('/', function () {
    return view('user.index');
})->name('index');

Route::get('formweight', function () {
    return view('formweight');
})->name('formweight');

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'register'])->name('user.auth.register');
    Route::post('/register', [AuthController::class, 'doregister'])->name('user.auth.register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'dologin'])->name('user.auth.login');
});
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('user.auth.logout');



Route::prefix('user')->group(function () {
    Route::get('menu', [DashboardController::class, 'menu'])->name('user.menu');

    Route::get('about', function () {
        return view('about');
    })->name('user.about');
});

Route::prefix('admin')->group(function () {
    Route::prefix('tipemakanan')->group(function () {
        Route::get('/', [TipeMakananController::class, 'index'])->name('admin.tipeMakanan.index');
        Route::get('/create', [TipeMakananController::class, 'create'])->name('admin.tipeMakanan.create');
        Route::post('/store', [TipeMakananController::class, 'store'])->name('admin.tipeMakanan.store');
        Route::get('/edit/{id}', [TipeMakananController::class, 'edit'])->name('admin.tipeMakanan.edit');
        Route::post('/update/{id}', [TipeMakananController::class, 'update'])->name('admin.tipeMakanan.update');
        Route::post('/delete/{id}', [TipeMakananController::class, 'destroy'])->name('admin.tipeMakanan.delete');
    });
    Route::prefix('makanan')->group(function () {
        Route::get('/', [MakananController::class, 'index'])->name('admin.makanan.index');
        Route::get('/create', [MakananController::class, 'create'])->name('admin.makanan.create');
        Route::post('/store', [MakananController::class, 'store'])->name('admin.makanan.store');
        Route::get('/edit/{id}', [MakananController::class, 'edit'])->name('admin.makanan.edit');
        Route::post('/update/{id}', [MakananController::class, 'update'])->name('admin.makanan.update');
        Route::post('/delete/{id}', [MakananController::class, 'destroy'])->name('admin.makanan.delete');
    });
    Route::prefix('jenisTubuh')->group(function () {
        Route::get('/', [JenisTubuhController::class, 'index'])->name('admin.jenisTubuh.index');
        Route::get('/create', [JenisTubuhController::class, 'create'])->name('admin.jenisTubuh.create');
        Route::post('/store', [JenisTubuhController::class, 'store'])->name('admin.jenisTubuh.store');
        Route::get('/edit/{id}', [JenisTubuhController::class, 'edit'])->name('admin.jenisTubuh.edit');
        Route::post('/update/{id}', [JenisTubuhController::class, 'update'])->name('admin.jenisTubuh.update');
        Route::post('/delete/{id}', [JenisTubuhController::class, 'destroy'])->name('admin.jenisTubuh.delete');
    });
});
