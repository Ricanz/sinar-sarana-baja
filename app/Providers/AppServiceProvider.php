<?php

namespace App\Providers;

use App\Models\About;
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
        View::share('products', Product::with('details')->with('subs')->where('status', 'active')->get());
        View::share('tab_products', ProductDetail::where('status', 'active')->where('is_product', 'y')->get());
        View::share('contacts', Contact::where('status', 'active')->limit(3)->get());
        View::share('brosur', Brosur::get());
        View::share('footer_desc', About::where('type', 'footer')->first());
    }
}
