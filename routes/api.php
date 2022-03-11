<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\News\NewsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group(['prefix' => 'news'], function () {
    Route::get('/', [NewsController::class, 'newsGet']);
    Route::get('/{id}', [NewsController::class, 'newsById']);
    Route::post('/create', [NewsController::class, 'newsCreate']);
    Route::put('/{id}', [NewsController::class, 'newsUpdate']);
    Route::delete('/{id}', [NewsController::class, 'newsDelete']);
});
