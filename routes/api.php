<?php

use App\Http\Controllers\LotBoqController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RequisitionController;

use App\Http\Controllers\TpsaNotificationController;

use App\Http\Controllers\SiteController;

use App\Http\Controllers\LotController;

use App\Http\Controllers\PDFController;





use Illuminate\Support\Facades\Auth;

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


Route::post('/create_requistion_request', [RequisitionController::class, 'create_requisition']);

Route::post('/notify_email', [TpsaNotificationController::class, 'notify_email']);

Route::get('/import_sites', [SiteController::class, 'import_sites']);

Route::get('/import_lots', [LotController::class, 'import_lots']);

Route::get('/import_boq', [LotBoqController::class, 'import_boq']);


Route::get('/generate_pdf', [PDFController::class, 'generate_pdf']);








