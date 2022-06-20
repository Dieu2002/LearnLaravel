<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;
// use App\Http\Controllers\SumController;
// use App\Http\Controllers\signupController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\addProductController;
use App\Http\Controllers\CreateTable;
use App\Http\Controllers\CategoryController;




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

Route::get('tinhtong', function () {
    return view('sum');
});
Route::post('tinhtong',[SumController::class,'tinhtong']);

Route::get('signup',[signupController::class,'index']);
Route::post('signup',[signupController::class,'displayInfor']);

Route::get('showsp',[addProductController::class,'index']);
Route::post('showsp',[addProductController::class,'showProduct']);
// blade 
Route::get('trangchu',[PageController::class,'getIndex']);
Route::get('loaisp',[PageController::class,'getLoaiSP']);
Route::get('chitietsp',[PageController::class,'getChitietSP']);
Route::get('lienhe',[PageController::class,'getContact']);
Route::get('about',[PageController::class,'getAbout']);

//
Route::get('table',[CreateTable::class,'createTable']);
Route::get('cate',[CategoryController::class,'Category']);



