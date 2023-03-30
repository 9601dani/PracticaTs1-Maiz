<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('main');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/inicio', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('contact');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admin_create', [LoginController:: class, 'index'])->name('admin');
Route::post('/admin_create', [LoginController:: class, 'store'])->name('save');

Route::patch('/admin_create', [LoginController:: class, 'store'])->name('user-edit');
Route::delete('/admin_create', [LoginController:: class, 'index'])->name('user-destroy');


Route::get('/admin_edit', function () {
    return view('admin_edit');
});
Route::get('/main', function () {
    return view('main');
});