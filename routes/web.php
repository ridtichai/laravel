<?php

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

Route::get('/login', function () {
    return view('admin\login');
});

Route::get('admin/index','Admins\DashboardController@getIndex');

Route::post('admin/loginme','Admins\loginController@login' );

/*
Route::post('admin/loginme', function (){

    echo "i post";
});
*/