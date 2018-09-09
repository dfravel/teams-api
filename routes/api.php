<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// manage the login process
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');


// get the list of all the teams in the database
Route::apiResource('teams', 'TeamController');
