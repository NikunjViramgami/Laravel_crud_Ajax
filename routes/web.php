<?php

use App\Http\Controllers\clubAjaxController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\productAjaxController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector;

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

Route::get('/',function(){
    return view('sidebar');
});
// Route::resource('club',ClubController::class);
// Route::resource('product',ProductController::class);
Route::resource('productAjax',productAjaxController::class);
Route::resource('/ajax',clubAjaxController::class);