<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create_view(){
        return view('admin.services.create');
    }

    public function submit(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $service = Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'active',
            'slug' => str_replace(' ', '-', strtolower($request->title)),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if($service) {
            return redirect()->route('services')
                ->with('success', 'Service Berhasil Ditambah');
        }


    }
}
