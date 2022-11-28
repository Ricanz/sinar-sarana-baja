<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Brosur;
use App\Models\Certificate;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Mission;
use App\Models\Service;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index() {
        $products = Product::select('products.slug', 'products.name', 'products.image', 'short_desc')
                    ->where('products.status', 'active')
                    ->take(3)
                    ->get();
        $main_news = Article::inRandomOrder()->where('status', 'active')->latest()->first();
        $news_left = Article::inRandomOrder()->where('status', 'active')->latest()->limit(2)->get();
        $news_right = Article::inRandomOrder()->where('status', 'active')->latest()->limit(2)->get();
        $mobile_news = Article::inRandomOrder()->where('status', 'active')->latest()->limit(5)->get();
        $client = Client::inRandomOrder()->latest()->limit(5)->get();
        $banner = About::where('type', 'banner')->first();
        $primary_contact = Contact::where('status', 'inactive')->first();
        $map = About::where('type', 'maps')->first();
        // $contacts = Contact::limit(3)->get();
        return view('landing-page.index', compact('products', 'main_news', 'news_left', 'news_right', 'mobile_news','client', 'banner', 'primary_contact', 'map'));
    }

    public function about() {
        $profile = About::where('id', 1)->where('type', 'about')->first();
        $mission1 = Mission::where('id', 1)->where('status', 'active')->first();
        $mission2 = Mission::where('id', 2)->where('status', 'active')->first();
        $mission3 = Mission::where('id', 3)->where('status', 'active')->first();
        $mission4 = Mission::where('id', 4)->where('status', 'active')->first();
        return view('landing-page.about.index', compact('profile', 'mission1', 'mission2', 'mission3', 'mission4'));
    }

    public function news() {
        $news = Article::where('status', 'active')->get();
        return view('landing-page.news.index', compact('news'));
    }

    public function news_detail($slug) {
        $article = Article::where('slug', $slug)->first();
        return view('landing-page.news.detail', compact('article'));
    }

    public function service_detail($slug) {
        $data = Service::with('images')->where('slug', $slug)->where('status', 'active')->first();
        return view('landing-page.services.detail', compact('data'));
    }

    public function products() {
        $products = Product::where('products.status', 'active')
                    ->get();
        return view('landing-page.products.index', compact('products'));
    }

    public function product_detail($slug) {
        $data = Product::where('slug', $slug)->where('status', 'active')->first();
        $details = ProductDetail::with('images')->where('product_id', $data->id)->where('slug', '!=', 'deskripsi')->where('status', 'active')->get();
        $primary_tab = ProductDetail::with('images')->where('product_id', $data->id)->where('slug', 'deskripsi')->where('status', 'active')->first();
        return view('landing-page.products.detail', compact('data', 'details', 'primary_tab'));
    }

    public function brochures() {
        $brochures = Brosur::all();
        return view('landing-page.brochures.index', compact('brochures'));
    }

    public function clients() {
        $clients = Client::all();
        return view('landing-page.clients.index', compact('clients'));
    }

    public function certificates() {
        $certificates = Certificate::where('status', 'active')->get();
        return view('landing-page.certificates.index', compact('certificates'));
    }

    public function test() {
        return view('admin.test');
    }
}
