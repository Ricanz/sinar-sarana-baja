<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrosurController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ProductController;
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
    return view('landing-page.maintenance');
});

Route::get('/home', [GeneralController::class, 'index']);

Route::get('/about-us', [GeneralController::class, 'about']);
Route::get('/news', [GeneralController::class, 'news']);
Route::get('/news-detail/{slug}', [GeneralController::class, 'news_detail']);
Route::get('/service/{slug}', [GeneralController::class, 'service_detail']);
Route::get('/products', [GeneralController::class, 'products']);
Route::get('/product-detail/{slug}', [GeneralController::class, 'product_detail']);
Route::get('/brochures', [GeneralController::class, 'brochures']);
Route::get('/clients', [GeneralController::class, 'clients']);
Route::get('/certificates', [GeneralController::class, 'certificates']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    });
    // Test
    Route::get('admin/test', [GeneralController::class, 'test']);

    // Profile
    Route::get('admin/about', [AboutController::class, 'index'])->name('about');
    Route::post('admin/submit', [AboutController::class, 'update'])->name('updateAbout');

    // Mission
    Route::get('admin/mission', [AboutController::class, 'mission'])->name('mission');
    Route::get('admin/mission/edit/{id}', [AboutController::class, 'edit_mission']);
    Route::post('admin/mission/submit', [AboutController::class, 'update_mission'])->name('updateMission');

    // Products
    Route::get('admin/products', [ProductController::class, 'index'])->name('products');
    Route::get('admin/product/create', [ProductController::class, 'create_view']);
    Route::post('admin/product/submit', [ProductController::class, 'submit'])->name('addProduct');
    Route::get('admin/product/edit/{id}', [ProductController::class, 'edit_view']);
    Route::post('admin/product/update', [ProductController::class, 'update'])->name('updateProduct');
    Route::post('admin/product/delete', [ProductController::class, 'destroy'])->name('deleteProduct');

    // Tabs
    Route::get('admin/product-tabs', [ProductController::class, 'tabs'])->name('tabs');
    Route::get('admin/product-tab/create', [ProductController::class, 'create_tab']);
    Route::post('admin/product-tab/submit', [ProductController::class, 'submit_tab'])->name('addTab');
    Route::get('admin/product-tab/edit/{id}', [ProductController::class, 'edit_tab']);
    Route::post('admin/product-tab/update', [ProductController::class, 'update_tab'])->name('updateTab');
    Route::post('admin/product-tab/delete', [ProductController::class, 'destroy_tab'])->name('deletTab');

    // Services
    Route::get('admin/services', [ServicesController::class, 'index'])->name('services');
    Route::get('admin/services/create', [ServicesController::class, 'create_view']);
    Route::post('admin/services/submit', [ServicesController::class, 'submit'])->name('addService');
    Route::get('admin/service/edit/{id}', [ServicesController::class, 'edit_view']);
    Route::post('admin/service/update', [ServicesController::class, 'update'])->name('updateService');
    Route::post('admin/service/delete', [ServicesController::class, 'destroy'])->name('deleteService');

    // Brosur
    Route::get('admin/brochures', [BrosurController::class, 'index'])->name('brochures');
    Route::get('admin/brochure/create', [BrosurController::class, 'create_view']);
    Route::post('admin/brochure/submit', [BrosurController::class, 'submit'])->name('addBrochure');
    Route::post('admin/brochure/delete', [BrosurController::class, 'destroy'])->name('deleteBrochure');

    // Clients
    Route::get('admin/clients', [ClientController::class, 'index'])->name('clients');
    Route::get('admin/client/create', [ClientController::class, 'create_view']);
    Route::post('admin/client/submit', [ClientController::class, 'submit'])->name('addClient');
    Route::post('admin/client/delete', [ClientController::class, 'destroy'])->name('deleteClient');

    // Certificates
    Route::get('admin/certificates', [CertificateController::class, 'index'])->name('certificates');
    Route::get('admin/certificate/create', [CertificateController::class, 'create_view']);
    Route::post('admin/certificate/submit', [CertificateController::class, 'submit'])->name('addCertificate');
    Route::post('admin/certificate/delete', [CertificateController::class, 'destroy'])->name('deleteCertificate');

    // Article
    Route::get('admin/articles', [ArticleController::class, 'index'])->name('articles');
    Route::get('admin/article/create', [ArticleController::class, 'create_view']);
    Route::post('admin/article/submit', [ArticleController::class, 'submit'])->name('addArticle');
    Route::get('admin/article/edit/{id}', [ArticleController::class, 'edit_view']);
    Route::post('admin/article/update', [ArticleController::class, 'update'])->name('updateArticle');
    Route::post('admin/article/delete', [ArticleController::class, 'destroy'])->name('deleteArticle');

    // Galleries
    Route::get('admin/product/galleries', [GalleryController::class, 'product'])->name('productGallery');
    Route::get('admin/product/gallery/create', [GalleryController::class, 'prod_create']);
    Route::post('admin/product/gallery/submit', [GalleryController::class, 'prod_submit'])->name('addProdGal');
    Route::post('admin/product/gallery/delete', [GalleryController::class, 'prod_destroy'])->name('deleteProdGal');

    Route::get('admin/service/galleries', [GalleryController::class, 'service'])->name('serviceGallery');
    Route::get('admin/service/gallery/create', [GalleryController::class, 'serv_create']);
    Route::post('admin/service/gallery/submit', [GalleryController::class, 'serv_submit'])->name('addServGal');
    Route::post('admin/service/gallery/delete', [GalleryController::class, 'serv_destroy'])->name('deleteServGal');

    // Banner
    Route::get('admin/banner', [BannerController::class, 'index'])->name('banner');
    Route::post('admin/banner/submit', [BannerController::class, 'submit'])->name('addBanner');

    // Contact
    Route::get('admin/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('admin/contact/create', [ContactController::class, 'create']);
    Route::post('admin/contact/submit', [ContactController::class, 'submit'])->name('addContact');
    Route::post('admin/contact/delete', [ContactController::class, 'destroy'])->name('deleteContact');
});
require __DIR__.'/auth.php';
