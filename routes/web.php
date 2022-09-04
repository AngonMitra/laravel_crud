<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AddEmployeeController;

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
//     return view('welcome');
// });
Route::get('/addemployee',[AddEmployeeController::class,'index'])->name("addemployee");
Route::post('/employeestore',[AddEmployeeController::class,'store']);
Route::get('/showemployee',[AddEmployeeController::class,'show']);
Route::get('/deleteemployee/{id}',[AddEmployeeController::class,'destroy']);
Route::get('/editemployee/{id}',[AddEmployeeController::class,'editemp']);
Route::post('/updateemployee/{id}',[AddEmployeeController::class,'update']);





Route::get('/addproducts','App\Http\Controllers\Backend\AddProduct@addproduct')->name("addproducts");
Route::post('/productstore','App\Http\Controllers\Backend\AddProduct@productstore')->name("productstore");
Route::get('/showproduct','App\Http\Controllers\Backend\AddProduct@showproduct')->name("showproduct");
Route::get('/editproduct/{id}','App\Http\Controllers\Backend\AddProduct@editproduct')->name("editproduct");
Route::get('/delete/{id}','App\Http\Controllers\Backend\AddProduct@delete')->name("delete");

Route::post('/update/{id}','App\Http\Controllers\Backend\AddProduct@update')->name("update");

Route::get('/', function(){
   return view('backend.home');
});