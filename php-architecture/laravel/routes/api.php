<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Jobs\QueueJob;

Route::get('/users',[UserController::class, 'showAll']);
Route::post('/users',[UserController::class, 'create']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'delete']);


Route::post('/graphql', '\Nuwave\Lighthouse\Support\Http\Controllers\GraphQLController@query');

