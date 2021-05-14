<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\BasicCurdController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

laravel 7 routing system below
|Route::get('/','SiteController@showHome');
Route::get('/about','SiteController@showAbout');
Route::get('/service','SiteController@showService');
Route::get('/portfolio','SiteController@showPortfolio');
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[SiteController::class,'showHome']);

Route::get('/about',[SiteController::class,'showAbout']);
Route::get('/service',[SiteController::class,'showService']);
Route::get('/portfolio',[SiteController::class,'showPortfolio']);







Route::get('/select',[BasicCurdController::class,'onSelect']);
Route::get('/insert',function(){

    return view('insert');
});

Route::get('/delete',function(){

    return view('delete');
});


Route::get('/select',function(){

    return view('select');
});

Route::get('/update',function(){

    return view('update');
});
Route::post('/insertData',[BasicCurdController::class,'onInsert']);
Route::post('/deleteData',[BasicCurdController::class,'onDelete']);
Route::post('/updateData',[BasicCurdController::class,'onUpdate']);
