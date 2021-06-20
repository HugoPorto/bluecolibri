<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/dolar', 'api\\CouteController@dolar');

Route::get('/dolar', 'api\\CouteController@dolar');
Route::get('/euro', 'api\\CouteController@euro');
Route::get('/bitcoin', 'api\\CouteController@bitcoin');
Route::get('/ouro', 'api\\CouteController@ouro');
Route::get('/allcoins', 'api\\CouteController@allcoins');

Route::get('/ok', function(){
    return ['status' => true];
});
