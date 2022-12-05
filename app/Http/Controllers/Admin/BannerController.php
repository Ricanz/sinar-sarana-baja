<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(){
        $banner = About::where('type', 'banner')->first();
        $now = Carbon::now();
        if($banner == null){
            About::create([
                'type' => 'banner',
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }

        return view('admin/banner/index', compact('banner'));
    }

    public function submit(Request $request){
        $data = About::where('type', 'banner')->first();
        if ($request->image != null) {
            $extention = $request->image->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/about/" . $file_name;
            $request->image->storeAs('public/about', $file_name);
        } else{
            $txt = $data->image;
        }
        $data->description = $request->description;
        $data->vission = $request->title;
        $data->image = $txt;
        $data->save();
        return redirect()->route('banner')
                ->with('success', 'Banner Berhasil Diperbarui');
    }

    public function vission(){
        $vission = About::where('type', 'vis_banner')->first();
        if(!$vission){
            About::create([
                'type' => 'vis_banner',
                'vission' => '',
                'description' => '',
                'image' => 'custom/landing-page//images/vision-bg.png'
            ]);
        }
        return view('admin.banner.vission', compact('vission'));
    }

    public function vission_update(Request $request){
        $vission = About::where('type', 'vis_banner')->first();
        if($vission){
            if ($request->image != null) {
                $extention = $request->image->extension();
                $file_name = time() . '.' . $extention;
                $txt = "storage/about/" . $file_name;
                $request->image->storeAs('public/about', $file_name);
            } else{
                $txt = $vission->image;
            }
            $vission->image = $txt;
            $vission->save();
        }
        return redirect()->route('vission_banner')
                ->with('success', 'Banner Berhasil Diperbarui');
    }
}
