<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ChooseRoleController;
use App\Http\Controllers\AdminPageController;








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



// Admin

Route::group(['middleware' => ['auth'],  'prefix' => 'admin'], function(){

    Route::get('/', [AdminPageController::class, 'index'])->name('admin');

    Route::get('/notifications', [NotificationController::class, 'notifications'])->name('admin.notifications');



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


// mobile layout

Route::get('/mobile', function () {
    return view('mobile_layout.app');
});





Auth::routes();


