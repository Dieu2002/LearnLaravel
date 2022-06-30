<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;
// use App\Http\Controllers\SumController;
// use App\Http\Controllers\signupController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\addProductController;
use App\Http\Controllers\CreateTable;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageOneController;
use App\Http\Controllers\NewsController;







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
Route::get('detail',[PageController::class,'getDetail']);


//
Route::get('table',[CreateTable::class,'createTable']);
Route::get('cate',[CategoryController::class,'Category']);
// bài 4 đề 2
// Route::get('showsp',[HomeController::class,'index']);
// Route::post('showsp',[HomeController::class,'addProduct']);
Route::get('showsp',[addProductController::class,'index']);
Route::post('showsp',[addProductController::class,'showProduct']);
// Query Builder 
Route::get('/',function(){
    $data =DB::table('products')->get();
    //$users= DB::table('customers')->orderBy('name','desc')->get();
    //$users= DB::table('customers')->first();// lấy giá trị đầu tiên của bảng 
    //$users= DB::table('customers')->find(3);// vị trí thứ ba trong bảng customer 

    //print_r($users);
});
///

// Route::get('',[PageOneController::class,'getIndexHome']);
// Route::get('/type/{id}',[PageOneController::class,'getLoaiSp']);
// Route::get('/loaisp',[PageOneController::class,'getLoaiSp']);
// Route::get('/detail/{id}',[PageOneController::class,'getDetail']);
// Route::get('/lienhe',[PageOneController::class,'getLienhe']);
// Route::get('/about',[PageOneController::class,'getAbout']);
// CRUD ngày 24/06

// Route::get('/admin',[PageOneController::class,'getAdminAdd']);
// Route::post('/admin',[PageOneController::class,'postAdminAdd'])->name('admin-add-form');

// Route::get('/showadmin',[PageOneController::class,'getIndexAdmin']);



// Route::get('/admin-edit-form/{id}',[PageOneController::class,'getAdminEdit']);
// Route::post('/admin-edit',[PageOneController::class,'postAdminEdit']);
// Route::post('/admin-delete/{id}',[PageOneController::class,'postAdminDelete']);

/// New 

Route::get('/newadd',[NewsController::class,'getAdd']);
Route::post('/newadd',[NewsController::class,'postAdminAdd'])->name('admin-add-form');;

Route::get('/showad',[NewsController::class,'getAdmin']);

Route::get('/new-edit-form/{id}',[NewsController::class,'getAdminEdit']);
Route::post('/new-edit',[NewsController::class,'postAdminEdit']);
Route::post('/new-delete/{id}',[NewsController::class,'postAdminDelete']);








