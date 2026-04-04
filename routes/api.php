<?php

use App\Http\Controllers\Api\v1\ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/users', ApiUserController::class)->except('update');
