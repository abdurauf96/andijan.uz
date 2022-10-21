<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\InfoCategoriesController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\LinksController;
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

    Route::resource('settings', 'App\Http\Controllers\Admin\SettingsController');
    Route::get('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator'])->name('generator');
    Route::post('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

});

require __DIR__.'/auth.php';


