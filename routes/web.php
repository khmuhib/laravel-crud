<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeaderSectionController;
use App\Http\Controllers\ServiceSectionController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/students/create', [StudentController::class, 'create'])->name('admin.students.create');
Route::post('/admin/students/create', [StudentController::class, 'store'])->name('admin.students.store');
Route::get('/admin/students/list', [StudentController::class, 'index'])->name('admin.students.index');
Route::get('/admin/students/edit/{id}', [StudentController::class, 'edit']);
Route::put('/admin/students/update/{id}', [StudentController::class, 'update']);
Route::get('admin/student/delete/{id}', [StudentController::class, 'destroy']);


// header
Route::get('/admin/header/index', [HeaderSectionController::class, 'index']);
Route::get('/admin/header/index/{id}', [HeaderSectionController::class, 'edit']);
Route::put('admin/header/update/{id}', [HeaderSectionController::class, 'update']);
Route::get('admin/header/delete/{id}', [HeaderSectionController::class, 'destroy']);
Route::get('/admin/header/create/', [HeaderSectionController::class, 'create']);
Route::post('/admin/header/store', [HeaderSectionController::class, 'store']);


// services

Route::get('/admin/service/index', [ServiceSectionController::class, 'index']);
Route::get('/admin/service/create', [ServiceSectionController::class, 'create']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
