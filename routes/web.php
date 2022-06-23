<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SemestersController;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResitsController;

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

Route::get('/mainpage', function (){
    return view('semesters/mainpage' );
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//route to indicate that the selected is not accessable
Route::get('/forbidden', function(){
    return view('notAccessable');
});

//routes that can be accessed by administrators, lecturers, course admins
//semesters routes
Route::get('/semesters/{semester?}', [SemestersController::class, 'index'])->name('semester.index')->middleware('auth');
Route::get('/semesters/{semester}/search', [SemestersController::class, 'search'])->name('semester.search')->middleware('auth');
Route::get('/semester/{semester}/show', [SemestersController::class, 'show'])->name('semester.show')->middleware('auth');
Route::get('/semester/{semester}/showUnits', [SemestersController::class, 'showUnits'])->name('semester.showUnits')->middleware('auth');
//student routes
Route::get('/students/index', [StudentsController::class, 'index'])->name('students.index')->middleware('auth');
// Route::get('/student/{student}/showSemester', [StudentsController::class, 'show'])->name('students.show');
//units routes
Route::get('/units/index', [UnitsController::class, 'index'])->name('units.index')->middleware('auth');
//resit routes 
Route::get('/resits/index', [ResitsController::class, 'index'])->name('resits.index')->middleware('auth');
Route::get('/resit/create', [ResitsController::class, 'create'])->name('resits.create')->middleware('auth');
Route::post('/resit/store', [ResitsController::class, 'store'])->name('resits.store')->middleware('auth');
Route::get('/resit/{resit}/destroy', [ResitsController::class, 'destroy'])->name('resits.destroy')->middleware('auth');

    //routes that can be accessed only by Academic Administrators
    Route::group(['middleware' => 'App\Http\Middleware\AcademicAdminMiddleware'], function(){
        //semesters routes
        Route::get('/semester/create', [SemestersController::class, 'create'])->name('semester.create')->middleware('auth');
        Route::post('/semester/store', [SemestersController::class, 'store'])->name('semester.store')->middleware('auth');
        Route::get('/semester/{semester}/edit', [SemestersController::class, 'edit'])->name('semester.edit')->middleware('auth');
        Route::put('/semester/{semester}/update', [SemestersController::class, 'update'])->name('semester.update')->middleware('auth');
        Route::get('/semester/{semester}/destroy', [SemestersController::class, 'destroy'])->name('semester.destroy')->middleware('auth');
        //student routes
        Route::get('/student/create', [StudentsController::class, 'create'])->name('students.create')->middleware('auth');
        Route::post('/student/store', [StudentsController::class, 'store'])->name('students.store')->middleware('auth');
        Route::get('/students/{student}/edit', [StudentsController::class, 'edit'])->name('students.edit')->middleware('auth');
        Route::put('/students/{student}/update', [StudentsController::class, 'update'])->name('students.update')->middleware('auth');
        Route::get('/student/{student}/destroy', [StudentsController::class, 'destroy'])->name('students.destroy')->middleware('auth');
        //unit routes 
        Route::get('/unit/create', [UnitsController::class, 'create'])->name('units.create')->middleware('auth');
        Route::post('/unit/store', [UnitsController::class, 'store'])->name('units.store')->middleware('auth');
        Route::get('/unit/{unit}/edit', [UnitsController::class, 'edit'])->name('units.edit')->middleware('auth');
        Route::put('/unit/{unit}/update', [UnitsController::class, 'update'])->name('units.update')->middleware('auth');
        Route::get('/unit/{unit}/destroy', [UnitsController::class, 'destroy'])->name('units.destroy')->middleware('auth');
});


