<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;

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

Route::get('/', [DataController:: class, 'index3'])->name('all_data');
Route::get('/login', function () {
    return view('login');
});
Route::get('/inicio', [DataController:: class, 'index2'])->name('all_data');


Route::get('/contacto', function () {
    return view('contact');
});
Route::get('/admin', function () {
    return view('admin');
})-> name('name_admin');
Route::get('/admin_create', [LoginController:: class, 'index'])->name('admin');
Route::post('/admin_create', [LoginController:: class, 'store'])->name('save');
Route::patch('/admin_create', [LoginController:: class, 'store'])->name('user-edit');
Route::delete('/admin_create/{id}', [LoginController:: class, 'destroy'])->name('user-destroy');

Route::post('/login',[LoginController :: class, 'verificar']) -> name('verificar');
Route::get('/admin_edit', function () {
    return view('admin_edit');
});
Route::get('/main', function () {
    return view('main');
});
Route::post('/admin_edit', [DataController:: class, 'store'])->name('save_data');
Route::get('/admin_edit', [DataController:: class, 'index'])->name('all_data');
Route::delete('/admin_edit/{id}', [DataController:: class, 'destroy'])->name('data-destroy');