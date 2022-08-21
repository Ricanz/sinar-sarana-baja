<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Mission;
use App\Models\Service;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function about() {
        $profile = About::where('id', 1)->first();
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
        $data = Service::where('slug', $slug)->where('status', 'active')->first();
        return view('landing-page.services.detail', compact('data'));
    }

    public function product_detail($slug) {
        $data = Service::where('slug', $slug)->where('status', 'active')->first();
        return view('landing-page.products.detail', compact('data'));
    }

    public function test() {
        return view('admin.test');
    }
}
