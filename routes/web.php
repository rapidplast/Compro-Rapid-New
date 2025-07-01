<?php

use App\Http\Controllers\AboutUstController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\InovationController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\SertifikasiController;
use Illuminate\Support\Facades\Route;

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
    return view('Home.home');
});

Route::get('/contact_us', [ContactUsController::class, 'contact_us']);
Route::get('/about_us', [AboutUstController::class, 'about_us']);
Route::get('/inovation', [InovationController::class, 'inovation']);
Route::get('/product', [ProductController::class, 'product']);
Route::get('/sertifikasi', [SertifikasiController::class, 'sertifikasi']);
Route::get('/carrier', [CarrierController::class, 'carrier']);
Route::get('/carrier/see_more/{id}', [CarrierController::class, 'see_more']);
Route::get('/quality', [QualityController::class, 'quality']);

//Admin
Route::get('/admin', [LoginAdminController::class, 'admin']);
Route::get('/login_admin', [LoginAdminController::class, 'index']);
Route::post('/login', [LoginAdminController::class, 'login'])->name('login');
Route::post('/logout', [LoginAdminController::class, 'logout'])->name('logout');
Route::middleware(['admin'])->group(function () {
    Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');
    Route::get('/update_carrier/{id}', [AdminController::class, 'update'])->name('update');
    Route::post('/update_carrier/{id}', [AdminController::class, 'updateCarrier'])->name('update_carrier');
    Route::get('/create_carrier', [AdminController::class, 'create'])->name('create');
    Route::post('/create_carrier', [AdminController::class, 'createCarrier'])->name('create_carrier');
    Route::get('/admin/home', [AdminController::class, 'home']);
    Route::get('/admin/contact_us', [AdminController::class, 'contact_us']);
    Route::get('/admin/about_us', [AdminController::class, 'about_us']);
    // Route::get('/admin/product', [AdminController::class, 'product']);
    Route::get('/admin/sertifikasi', [AdminController::class, 'sertifikasi']);
    Route::get('/admin/carrier', [AdminController::class, 'carrier']);
    Route::get('/admin/carrier/see_more/{id}', [AdminController::class, 'see_more']);
    Route::get('/admin/product', [ProductController::class, 'product_admin'])->name('product_admin');
    // Route::get('/products/category', [ProductController::class, 'getByCategory'])->name('products.byCategory');
    Route::get('/admin/product/add', [ProductController::class, 'tambah_product_admin']);
    Route::post('/product/add', [ProductController::class, 'create_product'])->name('product');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete']);
    Route::get('/admin/inovation', [InovationController::class, 'show'])->name('inovation');
    // Route::get('/show/admin/inovation', [InovationController::class, 'show'])->name('show');
    Route::post('/admin/create/inovation', [InovationController::class, 'create'])->name('create.inovation');
    Route::post('/admin/delete/inovation/{id}', [InovationController::class, 'hapus'])->name('hapus.inovation');
    Route::get('admin/quality', [QualityController::class, 'quality']);
});
