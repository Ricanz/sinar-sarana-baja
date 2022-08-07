<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function about() {
        return view('landing-page.about.index');
    }

    public function news() {
        return view('landing-page.news.index');
    }
}
