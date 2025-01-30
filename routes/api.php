<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GameController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\SceneController;
use App\Http\Controllers\Api\LearnedGameController;
use App\Http\Controllers\Api\ProgressController;
use App\Http\Controllers\Api\SupportedGameController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('games', GameController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('scenes', SceneController::class);
Route::apiResource('learned-games', LearnedGameController::class);
Route::apiResource('progress', ProgressController::class);
Route::apiResource('supported-games', SupportedGameController::class);
