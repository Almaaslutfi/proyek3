<?php

use Illuminate\Support\Facades\Auth;
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


// Route::group(['middleware' => ['guest']], function() {
// });
Auth::routes();

// Route::group(['middleware' => ['auth', 'permission']], function () {
    // Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('produk')->group(function () {
        Route::get('/', [App\Http\Controllers\Produk\KategoriController::class, 'index'])->name('kategori-index');
        Route::post('/tambah', [App\Http\Controllers\Produk\KategoriController::class, 'tambah'])->name('kategori-tambah');
        Route::put('/kategori-update/{id}', [App\Http\Controllers\Produk\KategoriController::class, 'update'])->name('kategori-update');
        Route::delete('/kategori-delete/{id}', [App\Http\Controllers\Produk\KategoriController::class, 'destroy'])->name('kategori-delete');
    });
    // Route::group(['middleware' => ['role:user']], function () {
        Route::prefix('permission')->group(function () {
            Route::get('/', [App\Http\Controllers\PermissionController::class, 'index'])->name('permission-index');
            Route::post('/tambah', [App\Http\Controllers\PermissionController::class, 'tambah'])->name('permission-tambah');
            Route::put('/permission-update/{id}', [App\Http\Controllers\PermissionController::class, 'update'])->name('permission-update');
            Route::delete('/permission-delete/{id}', [App\Http\Controllers\PermissionController::class, 'destroy'])->name('permission-delete');
        });
        Route::prefix('role')->group(function () {
            Route::get('/', [App\Http\Controllers\RoleController::class, 'index'])->name('role-index');
            Route::post('/tambah', [App\Http\Controllers\RoleController::class, 'tambah'])->name('role-tambah');
            Route::put('/role-update/{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('role-update');
            Route::delete('/role-delete/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('role-delete');
        });
    // });
    Route::get('/', function () {
        return view('home');
    });
    Route::prefix('satuan')->group(function () {
        Route::get('/', [App\Http\Controllers\Produk\SatuanController::class, 'index'])->name('satuan-index');
        Route::post('/tambah', [App\Http\Controllers\Produk\SatuanController::class, 'tambah'])->name('satuan-tambah');
        Route::put('/satuan-update/{id}', [App\Http\Controllers\Produk\SatuanController::class, 'update'])->name('satuan-update');
        Route::delete('/satuan-delete/{id}', [App\Http\Controllers\Produk\SatuanController::class, 'destroy'])->name('satuan-delete');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/form', [App\Http\Controllers\FormController::class, 'index'])->name('form-index');
    Route::get('/form/export', [App\Http\Controllers\FormController::class, 'export'])->name('form-export');
    Route::get('/form/cari', [App\Http\Controllers\FormController::class, 'search'])->name('form-search');
    Route::post('/form-tambah', [App\Http\Controllers\FormController::class, 'tambah'])->name('form-tambah');
    Route::get('/form-edit/{id}', [App\Http\Controllers\FormController::class, 'edit'])->name('form-edit');
    Route::patch('/form-update/{id}', [App\Http\Controllers\FormController::class, 'update'])->name('form-update');
    Route::delete('/form-delete/{id}', [App\Http\Controllers\FormController::class, 'delete'])->name('form-delete');
    Route::patch('/form-restore/{id}', [App\Http\Controllers\FormController::class, 'restore'])->name('form-restore');
    // Route::resource('roles', RolesController::class);
    // Route::resource('permissions', PermissionsController::class);
});

