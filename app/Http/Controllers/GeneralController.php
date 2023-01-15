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
use App\Models\ServiceIcon;
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
        $article_description = About::where('type', 'article')->first();
        $client_description = About::where('type', 'client')->first();
        
        $short = About::where('type', 'short')->first();
        $left = About::where('type', 'left')->first();
        $right = About::where('type', 'right')->first();
        $service_icon = ServiceIcon::orderBy('id')->get();
        $service_desc = About::where('type', 'service')->first();
        // $contacts = Contact::limit(3)->get();
        return view('landing-page.index', compact('products', 'main_news', 'news_left', 'news_right', 'mobile_news','client', 'banner', 'primary_contact', 'map', 'article_description', 'client_description', 'short', 'left', 'right', 'service_icon', 'service_desc'));
    }

    public function about() {
        $profile = About::where('id', 1)->where('type', 'about')->first();
        $mission1 = Mission::where('id', 1)->where('status', 'active')->first();
        $mission2 = Mission::where('id', 2)->where('status', 'active')->first();
        $mission3 = Mission::where('id', 3)->where('status', 'active')->first();
        $mission4 = Mission::where('id', 4)->where('status', 'active')->first();
        $vission_banner = About::where('type', 'vis_banner')->first();
        // dd($vission_banner);
        return view('landing-page.about.index', compact('profile', 'mission1', 'mission2', 'mission3', 'mission4', 'vission_banner'));
    }

    public function news() {
        $news = Article::where('status', 'active')->get();
        $newsletter = About::where('type', 'fot_banner')->first();
        return view('landing-page.news.index', compact('news', 'newsletter'));
    }

    public function news_detail($slug) {
        $article = Article::where('slug', $slug)->first();
        $newsletter = About::where('type', 'fot_banner')->first();
        return view('landing-page.news.detail', compact('article','newsletter'));
    }

    public function service_detail($slug) {
        $data = Service::with('images')->where('slug', $slug)->where('status', 'active')->first();
        $newsletter = About::where('type', 'fot_banner')->first();
        return view('landing-page.services.detail', compact('data', 'newsletter'));
    }

    public function products() {
        $products = Product::where('products.status', 'active')
                    ->get();
        $newsletter = About::where('type', 'fot_banner')->first();
        return view('landing-page.products.index', compact('products', 'newsletter'));
    }

    public function product_detail($slug) {
        $data = Product::where('slug', $slug)->where('status', 'active')->first();
        $details = ProductDetail::with('images')->where('product_id', $data->id)->where('slug', '!=', 'deskripsi')->where('status', 'active')->get();
        $primary_tab = ProductDetail::with('images')->where('product_id', $data->id)->where('slug', 'deskripsi')->where('status', 'active')->first();
        $newsletter = About::where('type', 'fot_banner')->first();
        return view('landing-page.products.detail', compact('data', 'details', 'primary_tab', 'newsletter'));
    }

    public function sub_detail($slug) {
        $details = ProductDetail::where('slug', $slug)->where('status', 'active')->where('is_product', 'y')->where('new_page', 'y')->first();
        $data = Product::where('id', $details->product_id)->first();
        $newsletter = About::where('type', 'fot_banner')->first();
        return view('landing-page.products.newPage', compact('data', 'details', 'newsletter'));
    }

    public function brochures() {
        $brochures = Brosur::all();
        $newsletter = About::where('type', 'fot_banner')->first();
        return view('landing-page.brochures.index', compact('brochures', 'newsletter'));
    }

    public function clients() {
        $clients = Client::all();
        $newsletter = About::where('type', 'fot_banner')->first();
        return view('landing-page.clients.index', compact('clients', 'newsletter'));
    }

    public function certificates() {
        $certificates = Certificate::where('status', 'active')->get();
        $newsletter = About::where('type', 'fot_banner')->first();
        return view('landing-page.certificates.index', compact('certificates', 'newsletter'));
    }

    public function test() {
        return view('admin.test');
    }
}
