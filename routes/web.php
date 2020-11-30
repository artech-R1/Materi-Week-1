<?php

use App\Http\Controllers\{HomeController, PostController, UserController};

use Illuminate\Support\Facades\{Route, Auth};
use Spatie\Permission\Middlewares\RoleMiddleware;

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



Auth::routes();


Route::middleware('role:admin')->get('/', [HomeController::class, 'index'])->name('home');
Route::middleware('role:admin')->resource('admin/user', UserController::class);
Route::resource('post', PostController::class);
Route::get('userpost', [HomeController::class, 'userdata']);
Route::get('userpost', [HomeController::class, 'userPost']);
