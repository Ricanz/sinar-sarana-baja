<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\ProductDetail;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function product() {
        $galleries = Gallery::where('type', 'product')->get();
        return view('admin.galleries.product', compact('galleries'));
    }

    public function prod_create() {
        $tabs = ProductDetail::with('product')->get();
        return view('admin.galleries.product-create', compact('tabs'));
    }

    public function prod_submit(Request $request) {
        $request->validate([
            'image' => 'required',
        ]);

        if ($request->image != null) {
            $extention = $request->image->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/galleries/" . $file_name;
            $request->image->storeAs('public/galleries', $file_name);
            $image = $txt;
        } else {
            $image = null;
        }

        $gallery = Gallery::create([
            'parent_id' => $request->tab_id,
            'image' => $image,
            'type' => 'product',
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        if($gallery) {
            return redirect()->route('productGallery')
                ->with('success', 'Gambar Berhasil Ditambah');
        }
    }

    public function prod_destroy(Request $request) {
        $gallery = Gallery::findOrFail($request->id);
        $gallery->delete();
        return redirect()->route('productGallery')
            ->with('delete', 'Gambar Berhasil Dihapus');
    }

    public function service() {
        $galleries = Gallery::where('type', 'service')->get();
        return view('admin.galleries.service', compact('galleries'));
    }

    public function serv_create() {
        $tabs = Service::get();
        return view('admin.galleries.service-create', compact('tabs'));
    }

    public function serv_submit(Request $request) {
        $request->validate([
            'image' => 'required',
        ]);

        if ($request->image != null) {
            $extention = $request->image->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/galleries/" . $file_name;
            $request->image->storeAs('public/galleries', $file_name);
            $image = $txt;
        } else {
            $image = null;
        }

        $gallery = Gallery::create([
            'parent_id' => $request->tab_id,
            'image' => $image,
            'type' => 'service',
            'status' => 'active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        if($gallery) {
            return redirect()->route('serviceGallery')
                ->with('success', 'Gambar Berhasil Ditambah');
        }
    }

    public function serv_destroy(Request $request) {
        $gallery = Gallery::findOrFail($request->id);
        $gallery->delete();
        return redirect()->route('serviceGallery')
            ->with('delete', 'Gambar Berhasil Dihapus');
    }
}
