<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ManageUsers;
use App\Models\Notice;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
	$news = Notice::all();
    return view('welcome', ['news' => $news]);
});

Auth::routes();

Route::prefix('/new')->group(function () {
	Route::get('/', [NewsController::class, 'index'])->name('news.index');
	Route::post('/create', [NewsController::class, 'create'])->name('news.store');
	Route::get('/delete/{id}', [NewsController::class, 'destroy'])->name('news.delete');
	Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
	Route::put('/update/{id}', [NewsController::class, 'update'])->name('news.update');
});

Route::prefix('/user')->group(function () {
	Route::get('/', [UserController::class, 'index'])->name('user.index');
	Route::post('/register', [UserController::class, 'store'])->name('user.register');
	Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
	Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
	Route::put('/update/{id}', [UserController::class, 'update'])->name('user.manager.update');
	Route::put('/password/{id}', [UserController::class, 'password'])->name('user.password');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	//Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

