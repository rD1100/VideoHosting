<?php

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
Route::view('/dashboard','User.Dashboard.dashboardPage');
Route::view('/videos','User.Videos.videosPage');
Route::view('/reports','User.Reports.reportsPage');
Route::view('/UserPage','User.UserPage.userProfile');
Route::view('/SettingsPage','User.SettingsPage.SettingsPage');
Route::view('/SignIn','Authentication.SignIn');
Route::view('/SignUp','Authentication.SignUp');
Route::view('/try','try');
Route::get('/', function () {
    return view('welcome');
});
