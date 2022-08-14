<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

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
    return view('landing-page.index');
});


Route::get('/about-us', [GeneralController::class, 'about']);
Route::get('/news', [GeneralController::class, 'news']);
Route::get('/news-detail/{slug}', [GeneralController::class, 'news_detail']);
Route::get('/service/{slug}', [GeneralController::class, 'service_detail']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    });

    // Profile
    Route::get('admin/about', [AboutController::class, 'index'])->name('about');
    Route::post('admin/submit', [AboutController::class, 'update'])->name('updateAbout');

    // Mission
    Route::get('admin/mission', [AboutController::class, 'mission'])->name('mission');
    Route::get('admin/mission/edit/{id}', [AboutController::class, 'edit_mission']);
    Route::post('admin/mission/submit', [AboutController::class, 'update_mission'])->name('updateMission');

    // Services
    Route::get('admin/services', [ServicesController::class, 'index'])->name('services');
    Route::get('admin/services/create', [ServicesController::class, 'create_view']);
    Route::post('admin/services/submit', [ServicesController::class, 'submit'])->name('addService');
    Route::get('admin/service/edit/{id}', [ServicesController::class, 'edit_view']);
    Route::post('admin/service/update', [ServicesController::class, 'update'])->name('updateService');
    Route::post('admin/service/delete', [ServicesController::class, 'destroy'])->name('deleteService');
});
require __DIR__.'/auth.php';
