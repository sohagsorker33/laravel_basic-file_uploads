<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FromController;
use App\Http\Controllers\DemoController;
  Route::get('/', function () {
    return view('welcome');
});  
 Route::view('/normal_from','froms.form')->name('get.from');
 Route::view('/login_from','froms.login');
 Route::view('/contact_from','froms.contact');
 Route::post("/handle",[FromController::class,'submission'])->name('post.from');
 Route::get('/demo1',[DemoController::class,'demo1']);
 Route::get('/demo2',[DemoController::class,'demo2']);
 Route::get('/demo3',[DemoController::class,'demo3']);
 Route::get('/demo4',[DemoController::class,'demo4']);
 Route::get('/demo5',[DemoController::class,'demo5']);
 Route::get('/demo6',[DemoController::class,'demo6']);
 Route::get('/demo7',[DemoController::class,'demo7']);
 Route::get('/demo8',[DemoController::class,'demo8']);
 //request url post get dui route a hobe---
 Route::get('/demo9/{num1}/{num2}',[DemoController::class,'demo9']);
 Route::post('/demo9/{num1}/{num2}',[DemoController::class,'demo9']);
 //request body post get dui route a hobe---
 Route::get('/demo10',[DemoController::class,'demo10']);
 Route::post('/demo10',[DemoController::class,'demo10']);
 Route::get('/demo11',[DemoController::class,'demo11']); 
 Route::post('/demo11',[DemoController::class,'demo11']);
 Route::get('/demo12',[DemoController::class,'demo12']);
 Route::post('/demo12',[DemoController::class,'demo12']);
 Route::get('/demo13',[DemoController::class,'demo13']);
 Route::post('/demo13',[DemoController::class,'demo13']);