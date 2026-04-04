<?php

use App\Http\Controllers\Api\v1\ApiChildhoodGenreController;
use App\Http\Controllers\Api\v1\ApiComposerController;
use App\Http\Controllers\Api\v1\ApiCurrentGenreController;
use App\Http\Controllers\Api\v1\ApiEducationLevelController;
use App\Http\Controllers\Api\v1\ApiTitleController;
use App\Http\Controllers\Api\v1\ApiUserController;
use App\Models\ChildhoodGenre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/users', ApiUserController::class)->except('update');
Route::post('v1/users/{id}/childhood-genres', [ApiChildhoodGenreController::class, 'store']);
Route::post('v1/users/{id}/current-genres', [ApiCurrentGenreController::class, 'store']);
Route::post('v1/users/{id}/education-levels', [ApiEducationLevelController::class, 'store']);

Route::apiResource('v1/composers', ApiComposerController::class);

Route::apiResource('v1/titles', ApiTitleController::class);

// Route::apiResource('v1/childhood-genres', ChildhoodGenre::class)->only('store');