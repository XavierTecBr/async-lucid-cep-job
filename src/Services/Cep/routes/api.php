<?php

/*
|--------------------------------------------------------------------------
| Service - API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for this service.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Prefix: /api/cep

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'cep'], function() {

    // The controllers live in src/Services/Cep/Http/Controllers
    // Route::get('/', 'UserController@index');

    Route::get('/', function() {
        return response()->json(['path' => '/api/cep']);
    });
    
    Route::get('/{cep}', 'CepController@show');

    Route::middleware('auth:api')->get('/user', function ($request) {
        return $request->user();
    });

});