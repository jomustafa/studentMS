<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SemestersController;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [HomeController::class, 'checkUserType']);

Route::get('/', function (){
    return view('mainpage' );
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/units', UnitsController::class)->only([
    'index'
]);

Route::get('/manageUnits', function (){
    return view('units.create' );
});

Route::get('/units/create', [UnitsController::class, 'create'])->name('units.create');

//semesters
Route::get('/semesters', [SemestersController::class, 'index'])->name('semester.index');
Route::get('/semester/create', [SemestersController::class, 'create'])->name('semester.create');
Route::get('/semester/{semester}/show', [SemestersController::class, 'show'])->name('semester.show');
Route::post('/semester/store', [SemestersController::class, 'store'])->name('semester.store');
Route::get('/semester/{semester}/edit', [SemestersController::class, 'edit'])->name('semester.edit');
Route::put('/semester/{semester}/update', [SemestersController::class, 'update'])->name('semester.update');
Route::delete('/semester/{semester}/destroy', [SemestersController::class, 'destroy'])->name('semester.destroy');

// Route::get('/semester/{semester}/student/create', [StudentsController::class, 'create'])->name('students.create');
// Route::post('/semester/{semester}/student/store', [StudentsController::class, 'store'])->name('students.store');

Route::get('/student/create', [StudentsController::class, 'create'])->name('students.create');
Route::post('/student/store', [StudentsController::class, 'store'])->name('students.store');

Route::get('/students/{semester}/student/edit', [StudentsController::class, 'edit'])->name('students.edit');
Route::put('/students/{semester}/student/update', [StudentsController::class, 'update'])->name('students.update');
Route::get('/student/{student}/destroy', [StudentsController::class, 'destroy'])->name('students.destroy');