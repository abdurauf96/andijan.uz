<?php

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


Route::get('posts', [\App\Http\Controllers\Api\PostsController::class, 'getAll']);
Route::get('posts/{id}', [\App\Http\Controllers\Api\PostsController::class, 'getOne']);
Route::get('info-categories', [\App\Http\Controllers\Api\InfoCategoriesController::class, 'getAll']);
Route::get('projects', [\App\Http\Controllers\Api\ProjectsController::class, 'getAll']);
Route::get('projects/{id}', [\App\Http\Controllers\Api\ProjectsController::class, 'getOne']);
Route::get('sites', [\App\Http\Controllers\Api\LinksController::class, 'getAll']);
Route::get('services', [\App\Http\Controllers\Api\ServicesController::class, 'getAll']);
Route::get('services/{id}', [\App\Http\Controllers\Api\ServicesController::class, 'getOne']);
Route::get('districts/{id}', [\App\Http\Controllers\Api\DistrictsController::class, 'getOne']);
Route::get('arenas', [\App\Http\Controllers\Api\ArenasController::class, 'getAll']);
Route::get('arenas/{id}', [\App\Http\Controllers\Api\ArenasController::class, 'getOne']);
