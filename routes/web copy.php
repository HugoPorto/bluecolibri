<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('list-users', 'UsersController@listUsers');
Route::get('list-users', 'UserController@listUsers');

// Route::group(['namespace' => 'Form'], function(){
//     Route::get('users', 'TestController@listAllUsers')->name('us');
//     Route::get('users/novo', 'TestController@formAddUser')->name('us.add');
//     Route::post('users/store', 'TestController@storeUser')->name('us.store');
//     Route::put('user/edit/{user}', 'TestController@edit')->name('us.edit');
//     Route::get('users/editar/{user}', 'TestController@formEditUser')->name('us.editUser');
//     Route::delete('users/destroy/{user}', 'TestController@destroy')->name('us.destroy'); 
//     Route::get('scraping', 'CouteController@dolar')->name('dl');
// });

Route::group(['namespace' => 'Main'], function(){
    Route::get('users', 'UserController@listAllUsers')->name('allusers');
    Route::get('users/novo', 'TestController@formAddUser')->name('us.add');
    Route::post('users/store', 'TestController@storeUser')->name('us.store');
    Route::put('user/edit/{user}', 'UserController@edit')->name('us.edit');
    Route::put('user/show/{user}', 'UserController@show')->name('user.show');
    Route::get('users/editar/{user}', 'TestController@formEditUser')->name('us.editUser');
    Route::delete('users/destroy/{user}', 'TestController@destroy')->name('us.destroy'); 
    Route::get('scraping', 'CouteController@dolar')->name('dl');
});

Route::resource('users', 'Form\\TestUserController')->names('user')->parameters(['users' => 'users']);
// Route::resource('coins', 'Main\\CoinController')->names('allcoins');

