<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KelolaBukuController;


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
Auth::routes();
Route::redirect('/','/login');
Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('admin/ajaxadmin/dataBuku/{id}',[KelolaBukuController::class, 'getDataBuku']);
Route::resource('profile',ProfileController::class);
Route::resource('kelola_buku',KelolaBukuController::class)->middleware('is_admin');
Route::get('admin/books',[AdminController::class,'books'])
    ->name('admin.books')
    ->middleware('is_admin');
