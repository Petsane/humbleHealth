<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/about', [DashboardController::class, 'about'])->name('about');
Route::get('/product', [DashboardController::class, 'product'])->name('product');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/new-product', [AdminController::class, 'newProduct'])->name('new-product');
Route::post('/upload-product', [AdminController::class, 'uploadProduct'])->name('upload-product');
Route::post('/update-product', [AdminController::class, 'updateProduct'])->name('updateProduct');
Route::post('/delete-product', [AdminController::class, 'destroy'])->name('delete');