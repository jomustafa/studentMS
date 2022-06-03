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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', [HomeController::class, 'checkUserType']);

Route::get('/mainpage', function (){
    return view('semesters/mainpage' );
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//semesters routes
Route::get('/semesters', [SemestersController::class, 'index'])->name('semester.index');
Route::get('/semester/create', [SemestersController::class, 'create'])->name('semester.create');
Route::get('/semester/{semester}/show', [SemestersController::class, 'show'])->name('semester.show');
Route::get('/semester/{semester}/showUnits', [SemestersController::class, 'showUnits'])->name('semester.showUnits');
Route::post('/semester/store', [SemestersController::class, 'store'])->name('semester.store');
Route::get('/semester/{semester}/edit', [SemestersController::class, 'edit'])->name('semester.edit');
Route::put('/semester/{semester}/update', [SemestersController::class, 'update'])->name('semester.update');
Route::get('/semester/{semester}/destroy', [SemestersController::class, 'destroy'])->name('semester.destroy');

//student routes
Route::get('/students/index', [StudentsController::class, 'index'])->name('students.index');
Route::get('/student/create', [StudentsController::class, 'create'])->name('students.create');
Route::post('/student/store', [StudentsController::class, 'store'])->name('students.store');
Route::get('/students/{student}/edit', [StudentsController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}/update', [StudentsController::class, 'update'])->name('students.update');
Route::get('/student/{student}/destroy', [StudentsController::class, 'destroy'])->name('students.destroy');

//units routes
Route::get('/units/index', [UnitsController::class, 'index'])->name('units.index');
Route::get('/unit/create', [UnitsController::class, 'create'])->name('units.create');
Route::post('/unit/store', [UnitsController::class, 'store'])->name('units.store');
Route::get('/unit/{unit}/edit', [UnitsController::class, 'edit'])->name('units.edit');
Route::put('/unit/{unit}/update', [UnitsController::class, 'update'])->name('units.update');
Route::get('/unit/{unit}/destroy', [UnitsController::class, 'destroy'])->name('units.destroy');