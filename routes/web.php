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

Auth::routes();

Route::get('/admin-login', 'AdminLoginController@index');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::post('/studentinfo', [
    'uses' => 'StudentInfoController@store',
    'as' => 'store.info'
]);

Route::post('/studentinfo', [
    'uses' => 'StudentInfoController@store',
    'as' => 'store.info'
]);

Route::put('/updateinfos/{student_id}','AdminController@updateInfo');

Route::get('/admin-dashboard', 'AdminController@index')->name('admindash');

Route::post('/login/admincustom',[
    'uses' => 'AdminLoginController@login',
    'as' =>'login.admin'
]);


Route::post('/login/custom',[
    'uses' => 'StudentLoginController@login',
    'as' =>'login.custom'
]);
