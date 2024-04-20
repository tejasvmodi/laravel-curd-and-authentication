<?php

use App\Http\Controllers\productcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontrolle;
use App\Models\product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [authcontrolle::class,'login'])->name('loginpage');
Route::post('/login',[authcontrolle::class,'loginuser'])->name('login');
Route::get('/index',[authcontrolle::class,'index'])->name('index');
Route::get('/register',[authcontrolle::class,'register'])->name('register');
Route::post('/done',[authcontrolle::class,'registeruser'])->name('registeruser');
Route::get('logout',[authcontrolle::class,'logout'])->name('Logout');
Route::get('index',[productcontroller::class,'index'])->name('product.index');
Route::get('create',[productcontroller::class,'create'])->name('product.create');
Route::post('store',[productcontroller::class,'store'])->name('product.store');
Route::get('edit/{id}',[productcontroller::class,'edit'])->name('product.edit');
Route::post('update/{id}',[productcontroller::class,'update'])->name('product.update');
Route::get('delete/{id}',[productcontroller::class,'destroy'])->name('product.delete');