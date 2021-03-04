<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/company', [\App\Http\Controllers\Api\CompanyController::class, 'list']);
Route::get('/product', [\App\Http\Controllers\Api\ProductController::class, 'list']);
