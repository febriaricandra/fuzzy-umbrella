<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendaController;
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



// create admin route
Route::get('/admin', [AdminController::class, 'index'])->name("admin.index");
Route::get('/admin/anggota', [AdminController::class, 'anggota'])->name("admin.anggota");
Route::get('/admin/list', [AdminController::class, 'anggotaList'])->name("admin.listanggota");
Route::post('/admin/create', [AdminController::class, 'create'])->name("admin.anggota.create");
Route::delete('/admin/list/{id}', [AdminController::class, 'delete'])->name("admin.anggota.delete");
Route::get('/admin/agenda', [AgendaController::class, 'index'])->name("agenda.index");

//create user route


// welcome route
Route::get('/', function(){
    return view('welcome');
});

Route::get('/users', [LoginController::class, 'index'])->name("users.index");
Route::get('/users/auth', [LoginController::class, 'authenticate'])->name("users.index.auth");