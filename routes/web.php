<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\regiscontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\forgotcontroller;


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
    return view('print-2');
});
// Login
Route ::get ('login',[logincontroller::class,'login']);
Route::post('/login', [logincontroller::class, 'authenticate']);
Route::get('/logout', [logincontroller::class, 'logout']);

// Register
Route::get ('/register',[regiscontroller::class,'regis']);
Route::post ('/register',[regiscontroller::class,'store']);

// halaman index awal
Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('login')->middleware('auth');
});

// Passenger
Route::get('/Passenger',[PassengerController::class,'index'])->name('login')->middleware('auth');
Route::post('/Passenger',[PesananController::class,'store']);

// Pesanan 
 Route::group(['middleware'=>['auth','ceklevel:admin']],function(){
    Route::get('/pesanann',[PesananController::class,'admin'])->name('login')->middleware('auth');
});
Route::group(['middleware'=>['auth','ceklevel:user']],function(){
    Route::get('/pesanan',[PesananController::class,'pesanan'])->name('login')->middleware('auth');
});

// update/detele
Route::get('/tampilkandata/{id}',[PesananController::class,'tampilkandata'])->name('tampilkandata')->name('login')->middleware('auth');
Route::post('/updatedata/{id}',[PesananController::class,'updatedata'])->name('updatedata')->name('login')->middleware('auth');

//delete
Route::get('/delete/{id}',[PesananController::class,'detele'])->name('delete')->name('login')->middleware('auth');

//detail
Route::get('/detail/{id}',[PesananController::class,'detail'])->name('detaildata')->name('login')->middleware('auth');

//print
Route::get('/print/{id}',[PesananController::class,'print'])->name('print')->name('login')->middleware('auth');
Route::get('/print2/{id}',[PesananController::class,'print2'])->name('print2')->name('login')->middleware('auth');

// forgot controller
Route::get('/Forgot',[forgotcontroller::class,'forgot']);
Route::post('/Forgot',[forgotcontroller::class,'password']);


