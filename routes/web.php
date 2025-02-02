<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

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
//     return view('home');
// });
// Route::get('/home', function () {
//     return view('home', ['name' => 'This is function']);
// });
// Route::get('/home', [UserController::class, 'index']);
// Route::get('/user', [UserController::class, 'show']);
Route::get('/', [StudentController::class, 'show']);
// Route::delete('delete', [StudentController::class, 'destroy'])->name('delete');
Route::delete('delete{id}', StudentController::class .'@destroy')->name('delete');
// Route::post('create', StudentController::class .'@store')->name('store');
Route::get('create', [StudentController::class, 'create'])->name('create');
Route::post('store', [StudentController::class, 'store'])->name('store');
Route::get('edit/{student_id}', [StudentController::class, 'update'])->name('edit');

Route::post('edit-store', [StudentController::class, 'editStore'])->name('editStore');

