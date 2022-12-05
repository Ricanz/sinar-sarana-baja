<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Service;
use App\Models\ServiceIcon;
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

    public function edit_view($id) {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }
    
    public function update(Request $request) {
        $service = Service::findOrFail($request->id);

        $service->title = $request->title;
        $service->description = $request->description;
        $service->status = $request->status;
        $service->slug = str_replace(' ', '-', strtolower($request->title));
        $service->save();
        if($service) {
            return redirect()->route('services')
                ->with('success', 'Service Berhasil Diubah');
        }
    }

    public function destroy(Request $request) {
        $service = Service::findOrFail($request->id);
        $service->delete();
        return redirect()->route('services')
            ->with('delete', 'Service Berhasil Dihapus');
    }

    public function homepage(){
        $service_desc = About::where('type', 'service')->first();
        $now = Carbon::now();
        if(!$service_desc){
            About::create([
                'type' => 'service',
                'vission' => 'Jasa',
                'description' => '',
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
        $icons = ServiceIcon::orderBy('id')->get();

        return view('admin.services.desc', compact('service_desc', 'icons'));
    }

    public function homepage_update(Request $request){
        $service_desc = About::where('type', 'service')->first();
        if($service_desc){
            $service_desc->vission = $request->title;
            $service_desc->description = $request->description;
            $service_desc->save();
        }
        return redirect()->route('homepage_service')
                ->with('success', 'Service Berhasil Diubah');
    }

    public function icon_edit($id){
        $icon = ServiceIcon::findOrFail($id);
        return view('admin.services.icon', compact('icon'));
    }

    public function icon_update(Request $request){
        $icon = ServiceIcon::findOrFail($request->id);

        if($icon){
            if ($request->image != null) {
                $extention = $request->image->extension();
                $file_name = time() . '.' . $extention;
                $txt = "storage/products/" . $file_name;
                $request->image->storeAs('public/products', $file_name);
                $image = $txt;
            } else {
                $image = $icon->image;
            }
            $icon->title = $request->title;
            $icon->description = $request->description;
            $icon->image = $image;
            $icon->save();
        }
        return redirect()->route('homepage_service')
                ->with('success', 'Service Berhasil Diubah');
    }
}
