<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\DashboardController;

// use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard','DashboardController@index');
Route::get('/home','App\Http\Controllers\HomeController@index');
Route::get('/about', 'App\Http\Controllers\AboutController@index');
Route::get('/partnership', 'App\Http\Controllers\PartnershipController@index');
Route::get('/education', 'App\Http\Controllers\EducationController@index');
Route::get('/contact', 'App\Http\Controllers\ContactController@index');
Route::get('/college', 'App\Http\Controllers\CollegeController@index');
// Route::get('/dashboard',[DashboardController::class, 'index']);

// Route::get('/dashboard2','DashboardController');