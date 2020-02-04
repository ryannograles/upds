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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/admin_dashboard', 'AdminController@index')->name('admindash');

//Route::get('/admin', 'AdminLoginController')->name('admin');

Auth::routes();

Route::post('/login/custom',[
    'uses' => 'StudentLoginController@login',
    'as' =>'login.custom'
]);

Route::put('/studentupdate/{student_id}','StudentLoginController@updateStudentInfo');

Route::put('/motherupdate/{student_id}','StudentLoginController@updateMotherInfo');

Route::put('/fatherupdate/{student_id}','StudentLoginController@updateFatherInfo');
