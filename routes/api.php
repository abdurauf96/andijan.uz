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
Route::get('posts/{slug}', [\App\Http\Controllers\Api\PostsController::class, 'getOne']);
Route::get('info-categories', [\App\Http\Controllers\Api\InfoCategoriesController::class, 'getAll']);

Route::get('projects', [\App\Http\Controllers\Api\ProjectsController::class, 'getAll']);
Route::get('projects/{slug}', [\App\Http\Controllers\Api\ProjectsController::class, 'getOne']);

Route::get('sites', [\App\Http\Controllers\Api\LinksController::class, 'getAll']);

//services
Route::get('main-services', [\App\Http\Controllers\Api\ServicesController::class, 'getAllMain']);
Route::get('secondary-services', [\App\Http\Controllers\Api\ServicesController::class, 'getAllSecondary']);
Route::get('services/{slug}', [\App\Http\Controllers\Api\ServicesController::class, 'getOne']);
//hokimlar
Route::get('governors', [\App\Http\Controllers\Api\GovernorsController::class, 'getAll']);
Route::get('governors/{id}', [\App\Http\Controllers\Api\GovernorsController::class, 'getOne']);
//hokim maruzalari
Route::get('speeches', [\App\Http\Controllers\Api\SpeechesController::class, 'getAll']);
Route::get('speeches/{id}', [\App\Http\Controllers\Api\SpeechesController::class, 'getOne']);

Route::get('councils', [\App\Http\Controllers\Api\CouncilsController::class, 'getAll']);

Route::get('districts/{id}', [\App\Http\Controllers\Api\DistrictsController::class, 'getOne']);

Route::get('arenas', [\App\Http\Controllers\Api\ArenasController::class, 'getAll']);
Route::get('arenas/{slug}', [\App\Http\Controllers\Api\ArenasController::class, 'getOne']);

Route::get('fields', [\App\Http\Controllers\Api\FieldsController::class, 'getAll']);
Route::get('fields/{slug}', [\App\Http\Controllers\Api\FieldsController::class, 'getOne']);

Route::get('andijan', [\App\Http\Controllers\Api\AndijanController::class, 'getOne']);
Route::get('contact', [\App\Http\Controllers\Api\ContactController::class, 'getOne']);
Route::get('documents', [\App\Http\Controllers\Api\DocumentsController::class, 'getAll']);
Route::get('decisions', [\App\Http\Controllers\Api\DecisionsController::class, 'getAll']);
//partners
Route::get('partners', [\App\Http\Controllers\Api\PartnersController::class, 'getAll']);
Route::get('partners/{slug}', [\App\Http\Controllers\Api\PartnersController::class, 'getOne']);
//tashkilotlar
Route::get('organizations', [\App\Http\Controllers\Api\OrganizationsController::class, 'getAll']);
Route::get('organizations/{slug}', [\App\Http\Controllers\Api\OrganizationsController::class, 'getOne']);
