<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;

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
# ----------- view front-end ------------------- #

Route::get('/', [BlogController::class,'index']);
// Route::get('/get-article-content-data', [BlogController::class,'getData'])->name('get-acrticle-content-data');

# --------------- login page ------------- #

Route::get('admin', function(){
	if (session()->has('admin')) {
		return redirect('profile');
	}else{
		return view('back-end.login');
	}
});

Route::get('logout', function(){
		session()->pull('admin');
		return redirect('admin');
});

Route::post('login', [AuthController::class,'adminLogin']);
Route::get('login', [AuthController::class,'adminLogin']);

# --------------- CRUD ----------------- #

Route::get('profile', [BlogController::class,'show']);

Route::get('view/{id}', [BlogController::class,'showBlog']);

Route::get('editblog/{id}', [BlogController::class,'edit']);

Route::get('delete/{id}', [BlogController::class,'destroy']);

Route::get('addblog', [BlogController::class,'create']);

Route::post('updateblog', [BlogController::class,'update']);

Route::post('insertblog', [BlogController::class,'store']);
