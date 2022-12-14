<?php

use App\Http\Controllers\Admin\AccreditationsController;
use App\Http\Controllers\Admin\AgendasController;
use App\Http\Controllers\Admin\AnswersController;
use App\Http\Controllers\Admin\AppealsController;
use App\Http\Controllers\Admin\AppFormsController;
use App\Http\Controllers\Admin\AwardsController;
use App\Http\Controllers\Admin\CarPricesController;
use App\Http\Controllers\Admin\CitiesController;
use App\Http\Controllers\Admin\CitizensController;
use App\Http\Controllers\Admin\ComissionMembersController;
use App\Http\Controllers\Admin\ComissionsController;
use App\Http\Controllers\Admin\ConstitutionsController;
use App\Http\Controllers\Admin\CouncilDecisionsController;
use App\Http\Controllers\Admin\ExtraServicesController;
use App\Http\Controllers\Admin\GeneralInfosController;
use App\Http\Controllers\Admin\GovernmentsController;
use App\Http\Controllers\Admin\HolidaysController;
use App\Http\Controllers\Admin\InformationsController;
use App\Http\Controllers\Admin\MeetingsController;
use App\Http\Controllers\Admin\OrgansController;
use App\Http\Controllers\Admin\QuestionsController;
use App\Http\Controllers\Admin\RegionWebsitesController;
use App\Http\Controllers\Admin\SchedulesController;
use App\Http\Controllers\Admin\SenatorsController;
use App\Http\Controllers\Admin\SymbolsController;
use App\Http\Controllers\Admin\WebsitesController;
use App\Http\Controllers\Admin\TendersController;
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
use App\Http\Controllers\Admin\PressPagesController;
use App\Http\Controllers\Admin\LocalPagesController;
use App\Http\Controllers\Admin\OldDocumentsController;
use App\Http\Controllers\Admin\ProgramsController;
use App\Http\Controllers\Admin\RekvizitsController;
use App\Http\Controllers\Admin\ReceptionTimesController;
use App\Http\Controllers\Admin\PlansController;
use App\Http\Controllers\Admin\DiscussionsController;
use App\Http\Controllers\Admin\IndicatorsController;
use App\Http\Controllers\Admin\ParksController;
use App\Http\Controllers\Admin\UniversitiesController;
use App\Http\Controllers\Admin\BuildingsController;
use App\Http\Controllers\Admin\OpenInfosController;
use App\Http\Controllers\Admin\InvestmentsController;
use App\Http\Controllers\Admin\TourismsController;
use App\Http\Controllers\Admin\VacanciesController;
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

Route::get('/cache', function () {
    \Artisan::call('config:cache');
    return back();
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function(){

    Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/', 'App\Http\Controllers\Admin\AdminController@index');
    Route::resource('users', 'App\Http\Controllers\Admin\UsersController');
    Route::resource('activitylogs', 'App\Http\Controllers\Admin\ActivityLogsController')->only([
        'index', 'show', 'destroy'
    ]);

    //bosh sahifa
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
    Route::resource('schedules', SchedulesController::class);
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
    Route::resource('press-pages', PressPagesController::class);
    Route::resource('local-pages', LocalPagesController::class);
    Route::resource('old-documents', OldDocumentsController::class);
    Route::resource('programs', ProgramsController::class);
    Route::resource('rekvizits', RekvizitsController::class);
    Route::resource('reception-times', ReceptionTimesController::class);
    Route::resource('plans', PlansController::class);
    Route::resource('discussions', DiscussionsController::class);
    Route::resource('indicators', IndicatorsController::class);
    Route::resource('parks', ParksController::class);
    Route::resource('universities', UniversitiesController::class);
    Route::resource('buildings', BuildingsController::class);
    Route::resource('open-infos', OpenInfosController::class);

    Route::resource('investments', InvestmentsController::class);
    Route::post('investments/image-upload', [InvestmentsController::class, 'imageUpload'])->name('investmentImageUpload');

    Route::resource('tourisms', TourismsController::class);
    Route::post('tourisms/image-upload', [TourismsController::class, 'imageUpload'])->name('tourismImageUpload');

    Route::resource('vacancies', VacanciesController::class);

    Route::resource('general-infos', GeneralInfosController::class);
    Route::post('general-infos/image-upload', [GeneralInfosController::class, 'imageUpload'])->name('generalInfoImageUpload');

    Route::resource('governments', GovernmentsController::class);
    Route::post('governments/image-upload', [GovernmentsController::class, 'imageUpload'])->name('governmentImageUpload');
    Route::resource('cities', CitiesController::class);
    Route::resource('agendas', AgendasController::class);
    Route::resource('meetings', MeetingsController::class);


    Route::resource('comissions', ComissionsController::class);
    Route::resource('comission-members', ComissionMembersController::class);

    Route::resource('senators', SenatorsController::class);
    Route::resource('council-decisions', CouncilDecisionsController::class);

    Route::resource('informations', InformationsController::class);
    Route::resource('awards', AwardsController::class);
    Route::resource('holidays', HolidaysController::class);
    Route::resource('organs', OrgansController::class);
    Route::resource('websites', WebsitesController::class);
    Route::resource('accreditations', AccreditationsController::class);
    Route::resource('symbols', SymbolsController::class);

    Route::resource('symbols', SymbolsController::class);
    Route::post('symbols/image-upload', [SymbolsController::class, 'imageUpload'])->name('symbolsImageUpload');

    Route::resource('constitutions', ConstitutionsController::class);
    Route::resource('region-websites', RegionWebsitesController::class);
    Route::resource('car-prices', CarPricesController::class);

    Route::resource('app-forms', AppFormsController::class);
    Route::post('app-forms/image-upload', [SymbolsController::class, 'imageUpload'])->name('appFormImageUpload');

    Route::resource('citizens', CitizensController::class);
    Route::resource('tenders', TendersController::class);
    Route::resource('extra-services', ExtraServicesController::class);
    Route::resource('appeals', AppealsController::class)->only(['index', 'destroy']);

    Route::resource('questions', QuestionsController::class);
    Route::resource('answers', AnswersController::class);

    Route::resource('settings', 'App\Http\Controllers\Admin\SettingsController');
    Route::get('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator'])->name('generator');
    Route::post('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

});

require __DIR__.'/auth.php';
