<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PemdaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Setting\Kecamatan;
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
    return redirect('/home');
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
        Route::get('', [KecamatanController::class, 'index'])->name('kecamatan');
        Route::post('store', [KecamatanController::class, 'store'])->name('kecamatan.store');
        Route::post('update/{id}', [KecamatanController::class, 'update'])->name('kecamatan.update');
        Route::delete('update/{id}', [KecamatanController::class, 'destroy'])->name('kecamatan.delete');
        Route::get('getDT', [KecamatanController::class, 'getDT'])->name('kecamatan.getDT');
    });

    Route::prefix('kelurahan')->group(function () {
        Route::get('', [KelurahanController::class, 'index'])->name('kelurahan');
        Route::post('store', [KelurahanController::class, 'store'])->name('kelurahan.store');
        Route::post('update/{id}', [KelurahanController::class, 'update'])->name('kelurahan.update');
        Route::delete('update/{id}', [KecamKelurahanControlleratanController::class, 'destroy'])->name('kelurahan.delete');
        Route::get('getDT', [KelurahanController::class, 'getDT'])->name('kelurahan.getDT');
    });

    Route::prefix('resource')->group(function () {
        Route::get('', fn () => view('resource.index'))->name('resource');
    });
});
