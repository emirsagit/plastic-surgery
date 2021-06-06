<?php

use App\Http\Controllers\AdminMediaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\AdminServicesController;
use App\Http\Controllers\OnlineAppointmentController;
use App\Http\Controllers\AdminNotificationsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;

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

$currentLocale = app()->getLocale();
/* other languages */

/* admin */
require __DIR__ . '/auth.php';
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminNotificationsController::class, 'index'])->name('admin.notifications');
    Route::resource('services', AdminServicesController::class, [
        'as' => 'admin'
    ]);
    Route::resource('image', AdminMediaController::class, [
        'as' => 'admin'
    ]);
});
/* endadmin */

Route::post('/appointment', [OnlineAppointmentController::class, 'store'])->name('appointment');

foreach (config('localization.languages') as $locale) {
    app()->setLocale($locale);
    Route::prefix($locale)->group(function () {
        Route::get('/', [HomeController::class, 'index']);
        Route::get(trans('routes.about'), [HomeController::class, 'about']);
        Route::get(trans('routes.contact'), [HomeController::class, 'contact']);
        Route::get(trans('routes.services'), [ServicesController::class, 'index']);
        Route::get(trans('routes.blog'), [BlogController::class, 'index']);
        Route::get(trans('routes.gallery'), [GalleryController::class, 'index'])->name('gallery');
    });
};
    
app()->setLocale($currentLocale);
/* some tr routes withoud tr for seo*/
Route::get('/language/{locale}', [LocalizationController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/{service}', [ServicesController::class, 'show'])->name('services.show');
