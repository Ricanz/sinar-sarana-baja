<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Mission;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::where('id',1)->where('type', 'about')->first();
        if($about == null) {
            About::create([
                'description' => '',
                'vission' => '',
                'image' => ''
            ]);
        }
        return view('admin.about.index', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = About::where('id',1)->first();
        if ($request->image != null) {
            $extention = $request->image->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/about/" . $file_name;
            $request->image->storeAs('public/about', $file_name);
            
            $data->description = $request->description;
            $data->vission = $request->vission;
            $data->image = $txt;
            $data->save();
        }
        return redirect()->route('about')
                ->with('success', 'About Us Berhasil Diperbarui');
    }

    public function mission() {
        $missions = Mission::orderBy('id')->get();
        return view('admin.about.mission', compact('missions'));
    }

    public function edit_mission($id) {
        $mission = Mission::findOrFail($id);
        return view('admin.about.mission-detail', compact('mission'));
    }

    public function update_mission(Request $request) {
        $mission = Mission::where('id', $request->id)->first();
        if ($mission) {
            $mission->title = $request->title;
            $mission->description = $request->description;
            $mission->status = $request->status;
            $mission->slug = str_replace(' ', '-', strtolower($request->title));
            $mission->save();
        }
        return redirect()->route('mission')
                ->with('success', 'Mission Berhasil Diperbarui');
    }

}
