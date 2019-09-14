<?php
Route::get('/', 'WebSiteController@index')->name('home');

route::get('mail', 'mailController@index');
route::post('postMail', 'mailController@post')->name('postMail');
Route::get('csrf', function () {
    return Session::token();
});

Auth::routes();
