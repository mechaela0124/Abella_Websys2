<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RecitationController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact',function(){
    return view('Contact', ['name' => 'John']);
});

Route::get('/about', [PostController::class, 'display']);
Route::get('/details', [PostController::class, 'display']);

Route::get('/details/{id}', [StudentController::class, 'display']);
Route::get('/details1', [PostController::class, 'display']);



Route::get('/customer/{custid}/{name}/{address}', [OrderController::class, 'customer']);


Route::get('/item/{itemno}/{name}/{price}', [OrderController::class, 'item']);



Route::get('/order/{custid}/{name}/{orderno}/{date}', [OrderController::class, 'order']);


Route::get('/orderdetails/{transno}/{orderno}/{itemid}/{name}/{price}/{qty}', [OrderController::class, 'orderdetails']);



Route::get('/number', [RecitationController::class, 'showNumber']);
Route::post('/number/check', [RecitationController::class, 'checkNumber']);


Route::get('/table', [RecitationController::class, 'showTable']);
Route::post('/table/generate', [RecitationController::class, 'generateTable']);

Route::get('/login', [RecitationController::class, 'showLogin']);
Route::post('/login/check', [RecitationController::class, 'checkLogin']);


Route::get('/register', [RecitationController::class, 'showRegister']);
Route::post('/register/submit', [RecitationController::class, 'submitRegister']);
