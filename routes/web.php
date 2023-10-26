<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix' => 'app'], function () {
    Route::get('login',[FrontendController::class,'login'])->name('login');
    Route::post('submitLogin',[FrontendController::class,'submitLogin'])->name('submitLogin');
    Route::get('registration',[FrontendController::class,'registration'])->name('registration');
    
    
    

// Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (){
Route::get('index',[FrontendController::class,'index'])->name('index');

Route::get('home',[HomeController::class,'home'])->name('home');

Route::post('submit',[HomeController::class,'submit'])->name('submit');
Route::get('list',[HomeController::class,'list'])->name('list');
Route::get('edit',[HomeController::class,'edit'])->name('edit');

Route::put('update',[HomeController::class,'update'])->name('update');


// });

// });
