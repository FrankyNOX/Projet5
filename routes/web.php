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

Route::get('/home', 'HomeController@index')->name('home');


/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
    Route::get('dashboard','HomeController@index')->name('dashbord');

    Route::resource('users', 'UsersController')->middleware('Role:Superadmin|Admin');

    Route::get('profileedit/{id}', 'ProfileController@edit');

    Route::put('profileupdate/{id}', 'ProfileController@update');

    Route::get('language', 'UsersController@language')->name('langue');

    Route::get('send', 'NotifyController@index');

Route::get('mail', function () {
    $order = App\Order::find(1);

    return (new App\Notifications\StatusUpdate($order))
        ->toMail($order->user);
});
