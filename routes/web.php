<?php

/*
|--------------------------------------------------------------------------
| Webルート
|--------------------------------------------------------------------------
|
| ここでアプリケーションのWebルートを登録できます。"web"ルートは
| ミドルウェアのグループの中へ、RouteServiceProviderによりロード
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('home', 'HomeController@index')->name('home');


});


Route::get('account', 'MockController@account');



Route::put('account', 'MockController@postaccount')->name('postaccount');



Route::get('profile', 'MockController@profile') -> name('profile');

Route::put('profile', 'MockController@reprofile') -> name('reprofile');

Route::get('search', 'MockController@search');
Route::get('user', 'MockController@user');
Route::get('following', 'MockController@following');
Route::get('followers', 'MockController@followers');

Route::post('search', 'HomeController@reading') -> name('reading');