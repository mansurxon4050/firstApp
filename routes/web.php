<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[TaskController::class,'index'])->name('index');
Route::resource('task',TaskController::class);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//Route::get('/create',[StudentController::class,'create'])->name('create');
