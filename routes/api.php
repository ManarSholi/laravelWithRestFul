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
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);

Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);
/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::put('/update/{id}', [App\Http\Controllers\API\AuthController::class, 'update']);

Route::delete('/delete/{id}', [App\Http\Controllers\API\AuthController::class, 'deleteUser']);

Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::get('/profile', function (Request $request){
        return auth()->user();
    });

    Route::resource('programs', App\Http\Controllers\API\ProgramController::class);

    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});

