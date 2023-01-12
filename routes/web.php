<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LotBoqController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\ChooseRoleController;
use App\Http\Controllers\UnicefPageController;
use App\Http\Controllers\SiteProfileController;
use App\Http\Controllers\NotificationController;





use App\Http\Controllers\StandardBoqLineController;
use App\Http\Controllers\FieldOfficerPageController;
use App\Http\Controllers\CriticalStageReportController;
use App\Http\Controllers\SiteLotBoqLineAnswerController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/loginx', function () {
//     return view('loginx');
// });

// Route::get('/registerx', function () {
//     return view('registerx');
// });


// Get Routes

Route::get('/', [ChooseRoleController::class, 'choose'])->name('choose');

Route::get('/choose', [ChooseRoleController::class, 'choose'])->name('choose');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('auth/{provider}', [SocialiteController::class, 'redirectToProvider']);

Route::get('auth/{provider}/callback', [SocialiteController::class, 'handleProviderCallback']);


Route::get('/getmacshellexec',function()
    {
        $shellexec = shell_exec('getmac'); 
        return $shellexec;
    }
);


// Admin

Route::group(['middleware' => ['auth'],  'prefix' => 'admin'], function(){

    Route::get('/', [AdminPageController::class, 'index'])->name('admin');

    Route::get('/lots', [AdminPageController::class, 'lots'])->name('admin.lots');

    Route::get('/sites', [AdminPageController::class, 'sites'])->name('admin.sites');

    Route::get('/notifications', [AdminPageController::class, 'notifications'])->name('admin.notifications');

    Route::get('/valuations', [AdminPageController::class, 'valuations'])->name('admin.valuations');

    
    
    Route::get('/valuation/{site_id}', [AdminPageController::class, 'valuation'])->name('admin.valuation');
    
    
    Route::get('/contractReports', [AdminPageController::class, 'contractReports'])->name('admin.contractReports');

    Route::get('/contractReport/{contractId}', [AdminPageController::class, 'contractReport'])->name('admin.contractReport');



    Route::get('/lot/{lot_code}', [AdminPageController::class, 'lot'])->name('admin.lot');

    Route::get('/site/{site_id}', [AdminPageController::class, 'site'])->name('admin.site');

    Route::get('/contracts', [AdminPageController::class, 'contracts'])->name('admin.contracts');


});

// Field Officer

Route::group(['middleware' => ['auth'],  'prefix' => 'field'], function(){

    Route::get('/', [FieldOfficerPageController::class, 'index'])->name('field');

    Route::get('/notifications', [NotificationController::class, 'notifications'])->name('field.notifications');

});

// Unicef

Route::group(['middleware' => ['auth'],  'prefix' => 'unicef'], function(){

    Route::get('/', [UnicefPageController::class, 'index'])->name('unicef');

    Route::get('/notifications', [NotificationController::class, 'notifications'])->name('unicef.notifications');

});


Route::post('/generate_report', [PDFController::class, 'generate_report'])->name('generate.pdf');

Route::post('/preview_report', [PDFController::class, 'preview_report'])->name('preview.report');

Route::resource('siteProfile', SiteProfileController::class, ['names' => 'siteProfile']);

Route::resource('criticalStateReport', CriticalStageReportController::class, ['names' => 'criticalStageReport']);

Route::resource('stdBoqLines', StandardBoqLineController::class, ['names' => 'stdBoqLines'])->middleware('auth');

Route::post('/import_boq', [LotBoqController::class, 'importBoq'])->name('import_boq')->middleware('auth');

Route::get('/lotBoq/{lot_id}', [LotBoqController::class, 'lotBoq'])->name('lotBoq')->middleware('auth');

Route::post('/siteLotBoqLineAnswers', [SiteLotBoqLineAnswerController::class, 'siteLotBoqLineAnswers'])->name('siteLotBoqLineAnswers')->middleware('auth');



Route::post('/uploadImages', [SiteController::class, 'uploadImages'])->name('uploadImages')->middleware('auth');




// mobile layout

Route::get('/mobile', function () {
    return view('mobile_layout.app');
});

Route::get('admin/success', function () {
    return view('admin_dashboard.success');
});


Auth::routes();


