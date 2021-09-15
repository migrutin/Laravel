<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CostController;

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


Route::post('/save',[CustomerController::class, 'save'])->name('save');
Route::post('/log',[CustomerController::class,'log'])->name('log');
Route::get('/logout',[CustomerController::class,'logout'])->name('logout');
Route::get('/register',[CustomerController::class, 'register'])->name('register');
Route::post('/create',[CostController::class,'createCost'])->name('create');
Route::get('delete/{id}',[CostController::class,'destroy']);
Route::get('update/{id}',[CostController::class,'update']);
Route::post('/execute',[CostController::class,'execute'])->name('execute');


Route::group(['middleware'=>['AuthCheck']], function(){
    
    Route::get('/',[CustomerController::class, 'login'])->name('login');
    Route::get('/dashboard',[CustomerController::class,'dashboard'])->name('dashboard');
});