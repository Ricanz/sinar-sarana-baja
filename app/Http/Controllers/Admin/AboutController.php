<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
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
        $about = About::where('id',1)->first();
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

}
