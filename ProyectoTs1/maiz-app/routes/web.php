<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ComentarioController;

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
Route::get('/recetas', function () {
    return view('recetas');
});
Route::get('/', [DataController:: class, 'index3'])->name('all_data');
Route::get('/login', function () {
    return view('login');
});
Route::get('/inicio', [DataController:: class, 'index2'])->name('all_data');


Route::get('/contacto', function () {
    return view('contact');
});

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


Route::get('/admin', [ComentarioController:: class, 'index'])->name('name_admin');
Route::patch('/admin', [ComentarioController:: class, 'store'])->name('edit_comment');
Route::delete('/admin/{id}', [ComentarioController:: class, 'destroy'])->name('comment-destroy');
Route::post('/contacto', [ComentarioController:: class, 'store'])->name('save_comment');