<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AboutUsController;
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


// Route::get('admin/about-us', [AboutUsController::class, 'index']);
Route::get('/about-us', [GeneralController::class, 'about']);
Route::get('/news', [GeneralController::class, 'news']);
Route::get('/news-detail/{slug}', [GeneralController::class, 'news_detail']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    });

    Route::get('admin/about', [AboutController::class, 'index'])->name('about');
    Route::post('admin/submit', [AboutController::class, 'update'])->name('updateAbout');
});
require __DIR__.'/auth.php';
