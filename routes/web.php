<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\SliderController;
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

Route::get("/",[HomeController::class, 'index'])->name('index');


Route::group(['prefix'=> 'admin'],function(){

Route::get('Panel-Administrativo', [IndexController::class, 'index'])->name('dashboard');
Route::resource('slide', SliderController::class)->parameters(['sliders' => 'slider'])->names('admin.slider');

});
