<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View; 

Route::get('/', function () {
    return view('halamanAwal');
});

Route::get('/login',fn()=>view('auth.login'))->name('login');
Route::post('/login' ,[AuthController::class, 'login']);

Route::get('/register',fn()=>view('auth.register'))->name('register');
Route::post('/register' ,[AuthController::class, 'register']);

Route::get('/logout',[AuthController::class, 'logout']);

Route::group(['middleware'=>['auth','check_role:admin,staf']], function(){
    Route::get('/dashboard',[DashboardController::class, 'index']);
});    

Route::group(['middleware'=>['auth','check_role:admin']], function(){
    Route::get('/user',fn()=>'halaman user');    
    Route::get('/fitur',fn()=>view('fitur'));
});    

Route::group(['middleware'=>['auth','check_role:user']], function(){
    Route::get('/home',[DashboardController::class, 'home']);    
    Route::get('/contact',fn()=>view('contact'));
    Route::get('/fitur/form-pengaduan',fn()=>view('fitur.form_pengaduan'));
    Route::post('/fitur/pengaduan/store', [PengaduanController::class, 'store']);


});    

