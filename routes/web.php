<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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
    return view('index');
});

Route::get('/book', function () {
    return view('book');
});

Route::get('/pub', function () {
    return view('pub');
});

Route::get('/supermarket', function () {
    return view('supermarket');
});

//Route::get('/go', function () {
  //  return view('train');
//});


Route::get('/train', function () {
    return view('train');
});

Route::get('/bus', function () {
    return view('bus');
});

Route::get('/drop', function () {
    return view('drop');
});

Route::get('/kandy', function () {
    return view('kandy');
});

Route::get('/busroute', function () {
    return view('busroute');
});


Route::get('/gallery',[WelcomeController::class,'gallery']);

Route::get('/services',[WelcomeController::class,'services']);

Route::get('/index',[WelcomeController::class,'index']);

//Route::get('/train',[WelcomeController::class,'feathData']);
//Route::get('/kandy',[WelcomeController::class,'feathData']);


//Route::get('/bus',[WelcomeController::class,'bus']);

Route::get('/contact',[WelcomeController::class,'contact']);

Route::post('/add',[WelcomeController::class,'addData']);

Route::post('/send',[WelcomeController::class,'addData2']);

Route::post('/go',[WelcomeController::class,'trainn']);

Route::post('/doo',[WelcomeController::class,'route']);

