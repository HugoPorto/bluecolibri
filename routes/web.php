<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['namespace' => 'Main'], function(){
//     Route::get('users', 'UserController@listAllUsers')->name('allusers');
//     Route::get('users/novo', 'TestController@formAddUser')->name('us.add');
//     Route::post('users/store', 'TestController@storeUser')->name('us.store');
//     Route::put('user/edit/{user}', 'UserController@edit')->name('us.edit');
//     Route::put('user/show/{user}', 'UserController@show')->name('user.show');
//     Route::get('users/editar/{user}', 'TestController@formEditUser')->name('us.editUser');
//     Route::delete('users/destroy/{user}', 'TestController@destroy')->name('us.destroy');
//     Route::get('scraping', 'CouteController@dolar')->name('dl');
// });

Route::resource('users', 'Main\\UserController')->names('user')->parameters(['users' => 'user']);
Route::get('users2', 'Main\\UserController@listAllUsers')->name('allusers');
