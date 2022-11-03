<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LevelMoltenController;

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
// Route::get('molten', [LevelMoltenController::class, 'index']);
Route::group(['prefix' => 'v1'],function (){
    Route::apiResource('molten',LevelMoltenController::class);
});

// Route::get('molten', [LevelMoltenController::class, 'index']);
// Route::get('molten/show/{id}', [LevelMoltenController::class, 'show']);
// Route::post('molten/store', [LevelMoltenController::class, 'store']);
// Route::post('molten/update/{player}', [LevelMoltenController::class, 'update']);
// Route::get('molten/delete/{player}', [LevelMoltenController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
