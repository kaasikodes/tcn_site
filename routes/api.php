<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturesController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\MaterialsController;

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

Route::get('videos', [VideosController::class, 'index']);
Route::get('videos/{category}/category',[VideosController::class, 'category']);

Route::get('lectures', [LecturesController::class, 'index']);
Route::get('lectures/{category}/category',[LecturesController::class, 'category']);


Route::get('materials', [MaterialsController::class, 'index']);
Route::get('materials/{category}/category',[MaterialsController::class, 'category']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});