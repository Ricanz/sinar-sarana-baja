<?php

namespace App\Providers;

use App\Models\Brosur;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('services', Service::where('status', 'active')->get());
        View::share('products', Product::with('details')->where('status', 'active')->get());
        View::share('tab_products', ProductDetail::where('status', 'active')->where('is_product', 'y')->get());
        View::share('contacts', Contact::limit(3)->get());
        View::share('brosur', Brosur::get());
    }
}
