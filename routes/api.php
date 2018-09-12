<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('user', 'UserController@getAuthenticatedUser');

    // standard resource controller for teams
    Route::apiResource('teams', 'TeamController');

    // standard resource controller for players
    Route::apiResource('players', 'PlayersController');

    // simple - just want to see who we have as users in the system
    Route::get('user-list', 'UserController@getUserList');
});



