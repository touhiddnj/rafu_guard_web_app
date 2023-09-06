<?php

use App\Http\Controllers\Api\ExtensionController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::get('/custom-blocking-list', [ExtensionController::class, 'customBlockingList']);
    Route::get('/custom-blocking-domain', [ExtensionController::class, 'customBlockingDomainList']);
    Route::post('/custom-blocking-add', [ExtensionController::class, 'customBlockingAdd']);
    Route::get('/extension');
    Route::post('/log-activity', [ExtensionController::class, 'logActivity']);
    // Add more routes here
});
