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
use App\Http\Controllers\Api\v1\ApiStatsController;
use App\Http\Controllers\Api\v1\ApiTitleController;
use App\Http\Controllers\Api\v1\ApiUserController;
use App\Models\ChildhoodGenre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// USERS
Route::get('v1/users/self', [ApiUserController::class, 'self'])->middleware('uuid');

Route::apiResource('v1/users', ApiUserController::class)->except('update')
    ->middleware('admin');

Route::get('v1/join-blind-test', function() {
    $response = [
        'uuid' => app(ApiUserController::class)->store(new Request)->uuid
    ];
    return $response;
});

// GENRES (CHILDHOOD + CURRENT)
Route::get('v1/genres', function() {
    return Genre::cases();
});

Route::post('v1/childhood-genres', [ApiChildhoodGenreController::class, 'store'])->middleware('uuid');
Route::delete('v1/childhood-genres', [ApiChildhoodGenreController::class, 'destroy'])->middleware('admin');

Route::post('v1/current-genres', [ApiCurrentGenreController::class, 'store'])->middleware('uuid');
Route::delete('v1/current-genres', [ApiCurrentGenreController::class, 'destroy'])->middleware('admin');

// EDUCATION LEVELS
Route::get('v1/education-levels', function() {
    return EducationLevel::cases();
});

Route::post('v1/education-levels', [ApiEducationLevelController::class, 'store'])->middleware('uuid');
Route::delete('v1/education-levels', [ApiEducationLevelController::class, 'destroy'])->middleware('admin');

// COMPOSERS
Route::apiResource('v1/composers', ApiComposerController::class)
    ->middlewareFor(['store', 'update', 'destroy'], 'admin');

// KNOWN COMPOSERS
Route::post('v1/known-composers', [ApiKnownComposerController::class, 'store'])->middleware('uuid');
Route::delete('v1/known-composers', [ApiKnownComposerController::class, 'destroy'])->middleware('admin');

// KNOWN COMPOSER TITLES
Route::post('v1/known-composer-titles', [ApiKnownComposerTitleController::class, 'store'])->middleware('uuid');
Route::delete('v1/known-composer-titles', [ApiKnownComposerTitleController::class, 'destroy'])->middleware('admin');

// TITLES
Route::apiResource('v1/titles', ApiTitleController::class)
    ->middlewareFor(['store', 'update', 'destroy'], 'admin');

// LISTENED TITLES / BLIND TEST RESULTS
Route::post('v1/blindtest-results', [ApiBlindTestResultController::class, 'store'])->middleware('uuid');
Route::delete('v1/blindtest-results', [ApiBlindTestResultController::class, 'destroy'])->middleware('admin');

// STATS
Route::get('v1/titles/{id}/stats', [ApiStatsController::class, 'title_stats']);
Route::get('v1/composer/{id}/stats', [ApiStatsController::class, 'composer_stats']);
Route::get('v1/blindtest/stats', [ApiStatsController::class, 'blindtest_stats']);