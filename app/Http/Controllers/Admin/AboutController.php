<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Mission;
use Carbon\Carbon;
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

    public function about_short(){
        $short = About::where('type', 'short')->first();
        $left = About::where('type', 'left')->first();
        $right = About::where('type', 'right')->first();
        $now = Carbon::now();
        if(!$short){
            $short = About::create([
                'type' => 'short',
                'description' => '',
                'vission' => '',
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
        if(!$left){
            $left = About::create([
                'type' => 'left',
                'description' => '',
                'vission' => '',
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
        if(!$right){
            $right = About::create([
                'type' => 'right',
                'description' => '',
                'vission' => '',
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
        return view('admin.about.desc', compact('short', 'left', 'right'));
    }

    public function updateShortDesc(Request $request){
        $short = About::where('type', 'short')->first();
        $left = About::where('type', 'left')->first();
        $right = About::where('type', 'right')->first();

        if($request->image){
            $extention = $request->image->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/about/" . $file_name;
            $request->image->storeAs('public/about', $file_name);
        } else {
            $txt = $short->image;
        }

        $short->vission = $request->title;
        $short->description = $request->description;
        $short->image = $txt;
        $short->save();

        $left->description = $request->left;
        $left->save();

        $right->description = $request->right;
        $right->save();
        return redirect()->route('about_short')
                ->with('success', 'Data Berhasil Diperbarui');
        
    }

}
