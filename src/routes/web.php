<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use PharIo\Manifest\Author;

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

//Route::get('register/step1', [AuthorController::class, 'register1']);
Route::post('register', [AuthorController::class, 'register2']);
//Route::post('register/step2', [AuthorController::class, 'register']);
//Route::get('/login', [AuthorController::class, 'login']);
//Route::post('/login', [AuthorController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {    
    Route::match(['get', 'post'], '/weight_logs', [AuthorController::class, 'weightHandler']);   
   // Route::get('weight_logs/update', [AuthorController::class, 'update']);
    //Route::get('weight_logs/goal_setting', [AuthorController::class, 'goal_setting']);
   //Route::post('/logout', [AuthorController::class, 'destroy'])
   // ->name('logout');   
    
});

//Route::get('/weight_logs', [AuthorController::class, 'weight'])->name('weight_logs');
//Route::post('/weight_logs', [AuthorController::class, 'weightregister']);