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

/* Bosh sahifa */

Route::get('posts', [\App\Http\Controllers\Api\PostsController::class, 'getAll']);
Route::get('posts/special', [\App\Http\Controllers\Api\PostsController::class, 'getSpecialPosts']);
Route::get('posts/andijan', [\App\Http\Controllers\Api\PostsController::class, 'getAndijanPosts']);
Route::get('posts/randomly', [\App\Http\Controllers\Api\PostsController::class, 'getPostsRandomly']);
Route::get('posts/{slug}', [\App\Http\Controllers\Api\PostsController::class, 'getOne']);

Route::get('info-categories', [\App\Http\Controllers\Api\InfoCategoriesController::class, 'getAll']);

Route::get('projects', [\App\Http\Controllers\Api\ProjectsController::class, 'getAll']);
Route::get('projects/{slug}', [\App\Http\Controllers\Api\ProjectsController::class, 'getOne']);

Route::get('sites', [\App\Http\Controllers\Api\LinksController::class, 'getAll']);

//services
Route::get('main-services', [\App\Http\Controllers\Api\ServicesController::class, 'getAllMain']);
Route::get('secondary-services', [\App\Http\Controllers\Api\ServicesController::class, 'getAllSecondary']);
Route::get('services/{slug}', [\App\Http\Controllers\Api\ServicesController::class, 'getOne']);

Route::get('districts/{id}', [\App\Http\Controllers\Api\DistrictsController::class, 'getOne']);

Route::get('arenas', [\App\Http\Controllers\Api\ArenasController::class, 'getAll']);
Route::get('arenas/{slug}', [\App\Http\Controllers\Api\ArenasController::class, 'getOne']);

Route::get('fields', [\App\Http\Controllers\Api\FieldsController::class, 'getAll']);
Route::get('fields/{slug}', [\App\Http\Controllers\Api\FieldsController::class, 'getOne']);


/* viloyat hokimligi bo'limi; */

//hokimlar
Route::get('governors', [\App\Http\Controllers\Api\GovernorsController::class, 'getAll']);
Route::get('governors/{id}', [\App\Http\Controllers\Api\GovernorsController::class, 'getOne']);
//hokim maruzalari
Route::get('speeches', [\App\Http\Controllers\Api\SpeechesController::class, 'getAll']);
Route::get('speeches/{id}', [\App\Http\Controllers\Api\SpeechesController::class, 'getOne']);

//kengashlar
Route::get('councils', [\App\Http\Controllers\Api\CouncilsController::class, 'getAll']);

//rahbariyat
Route::get('andijan', [\App\Http\Controllers\Api\AndijanController::class, 'getOne']);
Route::get('contact', [\App\Http\Controllers\Api\ContactController::class, 'getOne']);
Route::get('documents', [ \App\Http\Controllers\Api\DocumentsController::class, 'getAll']);
Route::get('decisions', [\App\Http\Controllers\Api\DecisionsController::class, 'getAll']);
//partners
Route::get('partners', [\App\Http\Controllers\Api\PartnersController::class, 'getAll']);
Route::get('partners/{slug}', [\App\Http\Controllers\Api\PartnersController::class, 'getOne']);
//tashkilotlar
Route::get('organizations', [\App\Http\Controllers\Api\OrganizationsController::class, 'getAll']);
Route::get('organizations/{slug}', [\App\Http\Controllers\Api\OrganizationsController::class, 'getOne']);

Route::get('press-page', [\App\Http\Controllers\Api\PressPagesController::class, 'getAll']);
Route::get('local-page', [\App\Http\Controllers\Api\LocalPagesController::class, 'getAll']);
Route::get('old-documents', [\App\Http\Controllers\Api\OldDocumentsController::class, 'getAll']);
Route::get('programs', [\App\Http\Controllers\Api\ProgramsController::class, 'getAll']);
Route::get('rekvizits', [\App\Http\Controllers\Api\RekvizitsController::class, 'getAll']);
Route::get('reception-times', [\App\Http\Controllers\Api\ReceptionTimesController::class, 'getAll']);
Route::get('plans', [\App\Http\Controllers\Api\PlansController::class, 'getAll']);
Route::get('discussions', [\App\Http\Controllers\Api\DiscussionsController::class, 'getAll']);

/* Viloyat haqida bo'limi */
Route::get('indicators', [\App\Http\Controllers\Api\IndicatorsController::class, 'getAll']);
Route::get('parks', [\App\Http\Controllers\Api\ParksController::class, 'getAll']);
Route::get('universities', [\App\Http\Controllers\Api\UniversitiesController::class, 'getAll']);
Route::get('buildings', [\App\Http\Controllers\Api\BuildingsController::class, 'getAll']);
//openinfos
Route::get('open-infos', [\App\Http\Controllers\Api\OpenInfosController::class, 'getAll']);
Route::get('open-infos/{slug}', [\App\Http\Controllers\Api\OpenInfosController::class, 'getOne']);

//investments
Route::get('investments', [\App\Http\Controllers\Api\InvestmentsController::class, 'getAll']);
Route::get('investments/{slug}', [\App\Http\Controllers\Api\InvestmentsController::class, 'getOne']);
//tourisms
Route::get('tourisms', [\App\Http\Controllers\Api\TourismsController::class, 'getAll']);
Route::get('tourisms/{slug}', [\App\Http\Controllers\Api\TourismsController::class, 'getOne']);

Route::get('vacancies', [\App\Http\Controllers\Api\VacanciesController::class, 'getAll']);
Route::get('general-info', [\App\Http\Controllers\Api\GeneralInfosController::class, 'getAll']);
//governments
Route::get('governments', [\App\Http\Controllers\Api\GovernmentsController::class, 'getAll']);
Route::get('governments/{slug}', [\App\Http\Controllers\Api\GovernmentsController::class, 'getOne']);

//governments
Route::get('cities', [\App\Http\Controllers\Api\CitiesController::class, 'getAll']);
Route::get('cities/{slug}', [\App\Http\Controllers\Api\CitiesController::class, 'getOne']);
//sessiya kun tartibi
Route::get('agendas', [\App\Http\Controllers\Api\AgendasController::class, 'getAll']);
Route::get('meetings', [\App\Http\Controllers\Api\MeetingsController::class, 'getAll']);
Route::get('comissions', [\App\Http\Controllers\Api\ComissionsController::class, 'getAll']);
Route::get('senators', [\App\Http\Controllers\Api\SenatorsController::class, 'getAll']);
