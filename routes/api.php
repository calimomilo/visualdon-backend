<?php

use App\Http\Controllers\Api\v1\ApiComposerController;
use App\Http\Controllers\Api\v1\ApiTitleController;
use App\Http\Controllers\Api\v1\ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/users', ApiUserController::class)->except('update');

Route::apiResource('v1/composers', ApiComposerController::class);

Route::apiResource('v1/titles', ApiTitleController::class);
