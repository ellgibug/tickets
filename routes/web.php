<?php


Route::get('/', 'PagesController@mainPage')->name('main-page');

Auth::routes();

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('/welcome', 'PagesController@loginOrRegister')->name('login-or-register');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/program', 'PagesController@program')->name('program');
Route::get('/speakers', 'PagesController@speakers')->name('speakers');
Route::get('/tickets', 'PagesController@tickets')->name('tickets');
Route::get('/cart', 'PagesController@cart')->name('cart');

Route::get('/add-to-cart/{id}', 'TicketController@addToCart')->name('add-to-cart');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::resource('speakers', 'SpeakerController');
    Route::resource('conferences', 'ConferenceController');
    Route::resource('sponsors', 'SponsorController');
    Route::resource('users', 'UserController');
});


