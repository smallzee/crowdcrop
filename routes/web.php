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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/404', 'HomeController@error_page')->name('error_page');
Route::get('/419', 'HomeController@error_page_expired')->name('error_page_expired');
Route::resource('/contact-us', 'ContactController');
Route::resource('/about-us', 'AboutController');
Route::resource('/farmer', "FarmerController");

Auth::routes();
Route::group(['namespace'=>'panel','prefix'=>'panel'], function (){
    // dashboard
    Route::resource('/dashboard', "DashboardController");
    Route::resource('/role', "RoleController");
    Route::resource('/partners', "PartnersController");
    Route::resource('/partners-agent', "PartnerAgentController");
    Route::resource('/administrative', "AdministrativeController");
    Route::resource('/change-password', "ChangePasswordController");
    Route::resource('/farmers', "FarmersController");
    // settings
    Route::resource('/settings', "SettingsController");

    Route::get('/logout', function () {
        auth()->logout();
        return redirect('login')->with('alert_success','You have successfully logged out');
    });

});
