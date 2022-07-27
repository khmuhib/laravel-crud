<?php

use App\Http\Controllers\AboutSectionController;
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

Route::get('/admin/services/index', [ServiceSectionController::class, 'index']);
Route::get('/admin/services/create', [ServiceSectionController::class, 'create']);
Route::post('/admin/serivces/create', [ServiceSectionController::class, 'store']);
Route::get('/admin/services/edit/{id}', [ServiceSectionController::class, 'edit']);
Route::put('/admin/services/edit/{id}', [ServiceSectionController::class, 'update']);
Route::get('/admin/services/delete/{id}', [ServiceSectionController::class, 'destroy']);



// about

Route::get('/admin/about/index', [AboutSectionController::class, 'index']);
Route::get('/admin/about/create', [AboutSectionController::class, 'create']);
Route::post('/admin/about/store', [AboutSectionController::class, 'store']);
Route::get('/admin/about/delete/{id}', [AboutSectionController::class, 'destroy']);
Route::get('/admin/about/edit/{id}', [AboutSectionController::class, 'edit']);
Route::put('/admin/about/edit/{id}', [AboutSectionController::class, 'update']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
