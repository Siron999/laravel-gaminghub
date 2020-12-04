<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/',[App\Http\Controllers\GameController::class,'index']);
Route::get('/gamedetails/{id}',[App\Http\Controllers\GameController::class,'details']);
Route::get('/productdetails/{id}',[App\Http\Controllers\GameController::class,'details2']);
Route::get('/genre/{id}',[App\Http\Controllers\GameController::class,'show']);
Route::get('/type/{id}',[App\Http\Controllers\GameController::class,'show2']);

 //search route
Route::get('/search',[App\Http\Controllers\GameController::class,'search']);
//middleware for cart
Route::group(['middleware'=>['auth']],function (){
Route::get('/addtocart/{id}',[App\Http\Controllers\GameController::class,'addtocart']);
Route::delete('/removefromcart/{id}',[App\Http\Controllers\GameController::class,'deletefromcart']);
Route::delete('/removeallfromcart/{id}',[App\Http\Controllers\GameController::class,'deleteallfromcart']);
Route::get('/checkout',[App\Http\Controllers\GameController::class,'cart']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//adminroutes wrapped in admin middleware
Route::group(['middleware'=>['auth','admin']],function (){
    Route::get('/admin',[App\Http\Controllers\AdminController::class,'index']);
    Route::get('/admin/games',[App\Http\Controllers\AdminController::class,'index2']);
    Route::delete('/admin/games/{id}',[App\Http\Controllers\AdminController::class,'destroy']);
    Route::get('/admin/products',[App\Http\Controllers\AdminController::class,'index3']);
    Route::delete('/admin/products/{id}',[App\Http\Controllers\AdminController::class,'destroy2']);
    //creating new item
    Route::get('/admin/create/game',[App\Http\Controllers\AdminController::class,'createGame']);
    Route::get('/admin/create/product',[App\Http\Controllers\AdminController::class,'createProduct']);
    Route::post('/admin/create/game',[App\Http\Controllers\AdminController::class,'store'])->name('upload.post');
    Route::post('/admin/create/product',[App\Http\Controllers\AdminController::class,'store2'])->name('upload.post.product');
    //editing item
    Route::get('/admin/edit/game/{id}',[App\Http\Controllers\AdminController::class,'editGame']);
    Route::get('/admin/edit/product/{id}',[App\Http\Controllers\AdminController::class,'editProduct']);
    Route::post('/admin/edit/game/{id}',[App\Http\Controllers\AdminController::class,'updateGame'])->name('edit.post');
    Route::post('/admin/edit/product/{id}',[App\Http\Controllers\AdminController::class,'updateProduct'])->name('edit.post.product');

});



