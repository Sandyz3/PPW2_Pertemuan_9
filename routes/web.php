<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\web_controller;
use App\Http\Controllers\CVController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\GalleryController;

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
    return view('welcome');
});

Route::get('/send-mail', [SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/dashboard/{id}', 'dashboard')->name('dashboard');
    Route::get('/dashboards', 'dashboards')->name('dashboards');
    Route::get('/delete/{id}', 'delete')->name('delete');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
});

Route::controller(CVController::class)->group(function() {
    // Route::get('/admin_home', 'index')->name('admin.index');
    Route::get('/admin_posts', 'create')->name('admin.create');
    Route::post('/admin_store','store')->name('admin.store');
    Route::get('/admin_destroy/{id}','destroy')->name('admin.destroy');
    Route::get('/admin_show/{id}','show')->name('admin.show');
    Route::get('/admin_edit/{id}','edit')->name('admin.edit');
    Route::post('/admin_update/{id}','update')->name('admin.update');
});

Route::controller(GalleryController::class)->group(function() {
    Route::get('/gallery', 'index')->name('gallery.index');
    Route::get('/gallery/create', 'create')->name('gallery.create');
    Route::post('/gallery/store', 'store')->name('gallery.store');
    Route::get('/gallery/edit/{id}', 'edit')->name('gallery.edit');
    Route::post('/gallery/update/{id}', 'update')->name('gallery.update');
    Route::get('/destroy/{id}', 'destroy')->name('gallery.destroy');
});

Route::controller(web_controller::class)->group(function() {
    Route::get('/public_home', 'index')->name('public.index');
});

Route::controller(web_controller::class)->group(function() {
    Route::get('/public_home', 'index')->name('public.index');
});
