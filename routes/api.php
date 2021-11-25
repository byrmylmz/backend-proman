<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\FlatController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;

use App\Models\User;

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


/**
 * resources
 */
Route::get('/user/{id}', function ($id) {
    return new UserResource(User::findOrFail($id));
});

Route::get('/users', function () {
    return new UserCollection(User::all());

});

/**
 * Normal Route
 */
Route::apiResource('sites',SiteController::class);
Route::apiResource('blocks',BlockController::class);
Route::apiResource('flats',FlatController::class);
Route::apiResource('persons',PersonController::class);

/**
 * Login Register and Logout
 */
Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
Route::post('logout', [AuthController::class,'logout']);



