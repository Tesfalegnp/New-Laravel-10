<?php

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
use App\Http\Controllers\ItemController;

Route::get('/', [ItemController::class, 'index'])->name('items.index');
Route::post('/items', [ItemController::class, 'store']);
Route::put('/items/{id}', [ItemController::class, 'update']);
Route::delete('/items/{id}', [ItemController::class, 'destroy']);
Route::get('/items', [ItemController::class, 'register'])->name('items.welcome');
Route::get('/bed_or', [ItemController::class, "bed_ord"])->name('items.abi');
Route::get('/login',[ItemController::class, 'Login'])->name('items.login');
Route::post('/admin/login', [ItemController::class, 'login_check'])->name('admin.login');