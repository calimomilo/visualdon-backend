<?php

use App\Enums\EducationLevel;
use App\Enums\Genre;
use App\Http\Controllers\Api\v1\ApiBlindTestResultController;
use App\Http\Controllers\Api\v1\ApiChildhoodGenreController;
use App\Http\Controllers\Api\v1\ApiComposerController;
use App\Http\Controllers\Api\v1\ApiCurrentGenreController;
use App\Http\Controllers\Api\v1\ApiEducationLevelController;
use App\Http\Controllers\Api\v1\ApiKnownComposerController;
use App\Http\Controllers\Api\v1\ApiKnownComposerTitleController;
use App\Http\Controllers\Api\v1\ApiTitleController;
use App\Http\Controllers\Api\v1\ApiUserController;
use App\Models\ChildhoodGenre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// USERS
Route::apiResource('v1/users', ApiUserController::class)->except('update');

// GENRES (CHILDHOOD + CURRENT)
Route::get('v1/genres', function() {
    return Genre::cases();
});

Route::post('v1/childhood-genres', [ApiChildhoodGenreController::class, 'store']);
Route::delete('v1/childhood-genres', [ApiChildhoodGenreController::class, 'destroy']);

Route::post('v1/current-genres', [ApiCurrentGenreController::class, 'store']);
Route::delete('v1/current-genres', [ApiCurrentGenreController::class, 'destroy']);

// EDUCATION LEVELS
Route::get('v1/education-levels', function() {
    return EducationLevel::cases();
});

Route::post('v1/education-levels', [ApiEducationLevelController::class, 'store']);
Route::delete('v1/education-levels', [ApiEducationLevelController::class, 'destroy']);

// COMPOSERS
Route::apiResource('v1/composers', ApiComposerController::class);

// KNOWN COMPOSERS
Route::post('v1/known-composers', [ApiKnownComposerController::class, 'store']);
Route::delete('v1/known-composers', [ApiKnownComposerController::class, 'destroy']);

// KNOWN COMPOSER TITLES
Route::post('v1/known-composer-titles', [ApiKnownComposerTitleController::class, 'store']);
Route::delete('v1/known-composer-titles', [ApiKnownComposerTitleController::class, 'destroy']);

// TITLES
Route::apiResource('v1/titles', ApiTitleController::class);

// LISTENED TITLES / BLIND TEST RESULTS
Route::post('v1/blind-test-results', [ApiBlindTestResultController::class, 'store']);
Route::delete('v1/blind-test-results', [ApiBlindTestResultController::class, 'destroy']);

// Route::apiResource('v1/childhood-genres', ChildhoodGenre::class)->only('store');