<?php

use Illuminate\Support\Facades\Route;



Route::get('/','jobs\lowonganController@getLowonganHome')->name('home');

// router user

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('registeruser');




// router perusahaan


// register user
Route::post('registerUser','user\register@register')->name('registerUser');
// Master
Route::get('/loginadmin','otentikasi\loginController@index')->name('admin');
Route::post('/postlogin','otentikasi\loginController@login')->name('postlogin');
Route::group(['middleware' => 'master'],function(){
    Route::get('/master','rolesController@getViewMaster')->name('adminmaster');
    Route::get('/account','rolesController@getViewAccount')->name('daftar');
    Route::post('/register','admin\accountController@register')->name('register');
    Route::get('/logoutmaster','otentikasi\loginController@logoutmaster')->name('logout');
    Route::resource('/tables','admin\userController');
    Route::resource('/kategoris','admin\kategorisJobs');

});
// admin / perusahaan
Route::post('/postlogin1','otentikasi\userLoginController@login')->name('postlogin1');
Route::post('/login','otentikasi\userLoginController@login')->name('loginuser');
Route::group(['middleware' => 'admin'],function(){
    Route::get('/admin','rolesController@getAdmin')->name('admin');
    Route::resource('/jenispekerjaan','jobs_typeController');
    Route::resource('/lowongan','jobsController');
    Route::get('/adminjobs','rolesController@getJobs')->name('jobsadmin');
    Route::get('/profil','rolesController@getProfil')->name('profil');
    Route::post('/profilpost','profilController@profil')->name('profiladd');
    Route::get('/logout','otentikasi\userLoginController@logout')->name('logoutadmin');
});
// user atau pengguna
Route::group(['middleware' => 'user'],function(){
    Route::get('/company','profilController@companies')->name('company');
    Route::get('/details','profilController@detail')->name('detail');
    Route::resource('/lamaran','jobs\lamaranController');
    Route::get('/logoutuser','otentikasi\userLoginController@logoutuser')->name('logoutuser');
});
