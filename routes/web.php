<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PemdaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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
    return view('welcome');
});

Auth::routes(['register' => false, 'password.request' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('clients', ClientController::class);

    Route::get('getDT', [\App\Http\Controllers\ClientController::class, 'getDT'])->name('clients.getDT');
    Route::post('clients_delete_ajax', [\App\Http\Controllers\ClientController::class, 'client_delete'])->name('clients.delete.ajax');

    Route::prefix('perekaman-data')->group(function () {
        Route::get('', fn () => view('perekaman.index'))->name('perekaman-data');
    });

    Route::prefix('informasi')->group(function () {
        Route::get('', fn () => view('informasi.index'))->name('informasi');
    });

    Route::prefix('pemerintah-daerah')->group(function () {
        Route::get('', [PemdaController::class, 'index'])->name('pemerintah-daerah')->middleware('permission:pemda-lihat');
        Route::post('create_update', [PemdaController::class, 'createOrUpdate'])->name('pemerintah-daerah.create_update')->middleware('permission:pemda-edit');
    });

    Route::prefix('kecamatan')->group(function () {
        Route::get('', fn () => view('kecamatan.index'))->name('kecamatan');
    });

    Route::prefix('kelurahan')->group(function () {
        Route::get('', fn () => view('kelurahan.index'))->name('kelurahan');
    });

    Route::prefix('resource')->group(function () {
        Route::get('', fn () => view('resource.index'))->name('resource');
    });
});
