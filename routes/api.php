<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\TeamMembershipController;

Route::apiResource('users', UserController::class);
Route::apiResource('teams', TeamController::class);

Route::post('teams/{team}/members', [TeamMembershipController::class, 'store']);
Route::put('teams/{team}/members/{user}', [TeamMembershipController::class, 'update']);
Route::delete('teams/{team}/members/{user}', [TeamMembershipController::class, 'destroy']);

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
