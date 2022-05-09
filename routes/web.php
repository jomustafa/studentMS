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

Route::get('/students/assign', [StudentsController::class, 'create'])->name('students.assign');

Route::resource('/semesters',SemestersController::class);

Route::resource('/students',StudentsController::class);

//mi search
// Route::get('/semesters/search', [SemestersController::class, 'show'])->name('semesters.search');
//Route::get('redirects','App\Http\Controllers\HomeController@index');
// Route::get('units', function(){
//     return view('Units/search');
// })->name('units.search');

// Route::get('semesters', function(){
//     return view('Semesters/index');
// })->name('semesters.index');