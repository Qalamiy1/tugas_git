<?php

use App\Http\Controllers\backend\Blogcontroller as BackendBlogcontroller;
use App\Http\Controllers\backend\Logincontroller;
use App\Http\Controllers\backend\Servicecontroller;
use App\Http\Controllers\backend\Slidecontroller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('ke-welcome');
Route::get('/blog',[BlogController::class,'index'])->name('ke-blog');
Route::get('/blog_detail',[BlogController::class,'blog_detail'])->name('ke-blog_detail');

Route::get('/backend/login',[Logincontroller::class,'index'])->name('ke-Login');
Route::get('/backend/blog',[BackendBlogcontroller::class,'blog'])->name('ke-backend_blog');
Route::get('/backend/service',[Servicecontroller::class,'service'])->name('ke-backend_service');
Route::get('/backend/slider',[Slidecontroller::class,'slider'])->name('ke-backend_slider');

