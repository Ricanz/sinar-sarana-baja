<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function about() {
        return view('landing-page.about.index');
    }

    public function news() {
        return view('landing-page.news.index');
    }

    public function news_detail() {
        return view('landing-page.news.detail');
    }

    public function service_detail($slug) {
        $data = Service::where('slug', $slug)->where('status', 'active')->first();
        return view('landing-page.services.detail', compact('data'));
    }
}
