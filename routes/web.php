<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\InfoCategoriesController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\LinksController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\DistrictsController;
use App\Http\Controllers\Admin\ArenasController;
use App\Http\Controllers\Admin\FieldsController;
use App\Http\Controllers\Admin\GovernorsController;
use App\Http\Controllers\Admin\CouncilsController;
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\Admin\SpeechesController;
use App\Http\Controllers\Admin\AndijanController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\DocumentsController;
use App\Http\Controllers\Admin\DecisionsController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\OrganizationsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/', 'App\Http\Controllers\Admin\AdminController@index');
    Route::resource('users', 'App\Http\Controllers\Admin\UsersController');
    Route::resource('activitylogs', 'App\Http\Controllers\Admin\ActivityLogsController')->only([
        'index', 'show', 'destroy'
    ]);

    Route::resource('posts', PostsController::class);
    Route::post('posts/image-upload', [PostsController::class, 'imageUpload'])->name('postImageUpload');
    Route::resource('info-categories', InfoCategoriesController::class);
    Route::resource('projects', ProjectsController::class);
    Route::post('projects/image-upload', [ProjectsController::class, 'imageUpload'])->name('projectImageUpload');
    Route::resource('links', LinksController::class);
    Route::resource('services', ServicesController::class);
    Route::post('services/image-upload', [ServicesController::class, 'imageUpload'])->name('serviceImageUpload');
    Route::resource('districts', DistrictsController::class);
    Route::resource('arenas', ArenasController::class);
    Route::post('arenas/image-upload', [ArenasController::class, 'imageUpload'])->name('arenaImageUpload');

    Route::resource('fields', FieldsController::class);
    Route::post('fields/image-upload', [FieldsController::class, 'imageUpload'])->name('fieldImageUpload');

    Route::resource('governors', GovernorsController::class);

    Route::resource('councils', CouncilsController::class);
    Route::resource('members', MembersController::class);

    Route::resource('speeches', SpeechesController::class);

    Route::resource('andijan', AndijanController::class);
    Route::post('andijan/image-upload', [AndijanController::class, 'imageUpload'])->name('andijanImageUpload');

    Route::resource('contacts', ContactsController::class);
    Route::resource('documents', DocumentsController::class);
    Route::resource('decisions', DecisionsController::class);

    Route::resource('partners', PartnersController::class);
    Route::post('partner/image-upload', [PartnersController::class, 'imageUpload'])->name('partnerImageUpload');

    Route::resource('organizations', OrganizationsController::class);

    Route::resource('settings', 'App\Http\Controllers\Admin\SettingsController');
    Route::get('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator'])->name('generator');
    Route::post('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

});

require __DIR__.'/auth.php';


