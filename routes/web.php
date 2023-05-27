<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/logcheck',[HomeController::class,'loginto'])->name('logincheck');
Route::get('/forget-password',[HomeController::class,'forgetpass'])->name('forget-password');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/setting',[AdminController::class,'setting'])->name('setting');
    Route::post('/update/info/1',[AdminController::class,'update_setting'])->name('update.setting');
    //Post Route
    Route::get('/post',[AdminController::class,'post'])->name('post');
    Route::post('/post/add',[MyPostController::class,'add'])->name('post.add');
    Route::get('/post/delete/{id}',[MyPostController::class,'delete'])->name('post.delete');
    Route::post('/post/update/{id}',[MyPostController::class,'update'])->name('post.update');
    //Portfolio Route
    Route::get('/portfolio',[AdminController::class,'portfolio'])->name('portfolio');
    Route::post('/portfolio/add',[PortfolioController::class,'add'])->name('porject.add');
    Route::get('/portfolio/delete/{id}',[PortfolioController::class,'delete'])->name('porject.delete');
    Route::post('/portfolio/update/{id}',[PortfolioController::class,'update'])->name('porject.update');
    //Contact Form
    Route::post('/contact',[ContactController::class,'contact'])->name('contact');
});
