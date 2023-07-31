<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdmin\AuthController;
use App\Http\Controllers\DashboardAdmin\ProfilController;
use App\Http\Controllers\DashboardAdmin\UmkmController;
use App\Http\Controllers\DashboardAdmin\DashboardController;

use App\Http\Controllers\Client\ClientController;

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
Route::get('/infografis', function () {
    return view('client.infografis');
});

Route::controller(ClientController::class)->group(function (){
    Route::get('/', 'showProfil')->name('profil_desa');
    Route::get('/umkm', 'showUMKM')->name('umkm');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardAdmin\DashboardController::class, 'showPage'])->name('dashboard');
    

    Route::controller(ProfilController::class)->prefix('profils')->group(function () {
        Route::get('', 'index')->name('profil');
        Route::get('edit/{id}', 'edit')->name('profils.edit');
        Route::put('edit/{id}', 'update')->name('profils.update');
    });

    Route::controller(UmkmController::class)->prefix('umkms')->group(function () {
        Route::get('/', 'index')->name('umkms.index');
        Route::get('/create', 'create')->name('umkms.create');
        Route::post('store/', 'store')->name('umkms.store');
        Route::get('show/{umkm}', 'show')->name('umkms.show');
        Route::get('edit/{umkm}', 'edit')->name('umkms.edit');
        Route::put('edit/{umkm}','update')->name('umkms.update');
        Route::delete('/{umkm}','destroy')->name('umkms.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\DashboardAdmin\AuthController::class, 'profile'])->name('profile');
});
