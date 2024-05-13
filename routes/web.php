<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//   -----  StudentController ---- Routes //
  
Route::get('add-student', [App\Http\Controllers\StudentController::class, 'create'])->name('studentForm');
Route::post('add-student', [App\Http\Controllers\StudentController::class, 'store'])->name('complete.Form');



// -----Update route ---//

 
Route::get('students', [App\Http\Controllers\StudentController::class, 'index'])->name('index');




//  -----For edit the data Route --//
Route::get('edit-student/{id}', [App\Http\Controllers\StudentController::class, 'edit']);




  // ----Route for update the data ------//
  Route::put('update-student/{id}', [App\Http\Controllers\StudentController::class, 'update']);


  
// ----Route for delete the data --//

Route::get('delete-student/{id}', [App\Http\Controllers\StudentController::class, 'destroy']);




// -----Route for Admin view --//

Route::get('dashboard', [App\Http\Controllers\StudentController::class, 'admin'])->name('admin');