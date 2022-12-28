<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Mail\TestGmail;
use App\Http\Controllers;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MailController;
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
    return view('welcome');
});

//==========================Admin Auth Routes================================================
Route::post('/admin/save',[AdminController::class, 'save'])->name('admin.save');
Route::post('/admin/check',[AdminController::class, 'check'])->name('admin.check');
Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

Route::group(['middleware'=>['AdminCheck']], function(){
    Route::get('/admin/login',[AdminController::class, 'login'])->name('admin.login');
    Route::get('/admin/register',[AdminController::class, 'register'])->name('admin.register');

    Route::get('/admin/dashboard',[AdminController::class, 'dashboard']);
});

//==========================User Auth Routes================================================
Route::post('/user/save',[UserController::class, 'usersave'])->name('user.save');
Route::post('/user/check',[UserController::class, 'usercheck'])->name('user.check');
Route::get('/user/logout',[UserController::class, 'userlogout'])->name('user.logout');

Route::group(['middleware'=>['UserCheck']], function(){
    Route::get('/user/login',[UserController::class, 'userlogin'])->name('user.login');
    Route::get('/user/register',[UserController::class, 'userregister'])->name('user.register');

    Route::get('/user/view',[UserController::class, 'userview'])->name('user.view');
});

//==========================Others  Routes================================================

Route::get('train/create', 'App\Http\Controllers\TrainController@create')->name('train.create');
Route::post('train/store', 'App\Http\Controllers\TrainController@store')->name('train.store');

Route::get('train/read', 'App\Http\Controllers\TrainController@read')->name('train.read');

Route::get('train/edit/{train_id}', 'App\Http\Controllers\TrainController@edit')->name('train.edit');
Route::post('train/update/{train_id}', 'App\Http\Controllers\TrainController@update')->name('train.update');
Route::get('train/delete/{train_id}', 'App\Http\Controllers\TrainController@delete')->name('train.delete');



Route::get('reservation/create', 'App\Http\Controllers\ReservationController@create')->name('reservation.create');
Route::post('reservation/store', 'App\Http\Controllers\ReservationController@store')->name('reservation.store');

Route::get('reservation/read', 'App\Http\Controllers\reservationController@read')->name('reservation.read');

Route::get('reservation/edit/{id}', 'App\Http\Controllers\ReservationController@edit');
Route::post('reservation/update/{id}', 'App\Http\Controllers\ReservationController@update')->name('reservation.update');
Route::get('reservation/delete/{id}', 'App\Http\Controllers\ReservationController@delete')->name('reservation.delete');


Route::get('/email', 'App\Http\Controllers\EmailController@create');
Route::post('/email', 'App\Http\Controllers\EmailController@sendEmail')->name('send.email');


Route::get('file/file','App\Http\Controllers\FileController@files');
Route::get('file/create','App\Http\Controllers\FileController@create')->name('file.create');
Route::post('file/store','App\Http\Controllers\FileController@store')->name('file.store');
Route::resource('files', 'App\Http\Controllers\FileController');
Route::get('file/{uuid}/download', 'App\Http\Controllers\FileController@download')->name('file.download');
Route::get('file/{id}/delete', 'App\Http\Controllers\FileController@delete')->name('file.delete');