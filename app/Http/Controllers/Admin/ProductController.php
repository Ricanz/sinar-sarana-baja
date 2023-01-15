<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Service;
use App\Models\SubDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create_view() {
        return view('admin.products.create');
    }

    public function submit(Request $request) {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        if ($request->image != null) {
            $extention = $request->image->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/products/" . $file_name;
            $request->image->storeAs('public/products', $file_name);
            $image = $txt;
        } else {
            $image = null;
        }

        $product = Product::create([
            'name' => $request->title,
            'image' => $image,
            'status' => 'active',
            'slug' => str_replace(' ', '-', strtolower($request->title)),
            'short_desc' => substr(strip_tags($request->description), 0, 255),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if($product) {
            if($request->description) {
                ProductDetail::create([
                    'product_id' => $product->id,
                    'title' => 'Deskripsi',
                    'slug' => 'deskripsi',
                    'description' => $request->description
                ]);
            }
        }

        if($product) {
            return redirect()->route('products')
                ->with('success', 'Product Berhasil Ditambah');
        }
    }

    public function edit_view ($id) {
        $product = Product::findOrFail($id);
        $detail = ProductDetail::where('product_id', $product->id)->where('slug', 'deskripsi')->first();
        return view('admin.products.edit', compact('product', 'detail'));
    }

    public function update(Request $request) {
        $product = Product::findOrFail($request->id);
        $detail = ProductDetail::where('product_id', $product->id)->where('slug', 'deskripsi')->first();
        if ($request->image != null) {
            $extention = $request->image->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/products/" . $file_name;
            $request->image->storeAs('public/products', $file_name);
            $image = $txt;
        } else {
            $image = $product->image;
        }

        $product->name = $request->title;
        $product->image = $image;
        $product->short_desc = substr(strip_tags($request->description), 0, 255);
        $product->slug = str_replace(' ', '-', strtolower($request->title));
        $product->save();

        $detail->description = $request->description;
        $detail->save();

        return redirect()->route('products')
                ->with('success', 'Product Berhasil Diubah');

    }

    public function destroy(Request $request) {
        $product = Product::findOrFail($request->id);
        $product->delete();
        $detail = ProductDetail::where('product_id', $request->id);
        $detail->delete();
        return redirect()->route('products')
            ->with('delete', 'Product Berhasil Dihapus');
    }

    // Tab Function

    public function tabs() {
        $tabs = ProductDetail::with('product')->orderBy('created_at', 'DESC')->get();
        return view('admin.products.tab', compact('tabs'));
    }

    public function create_tab() {
        $products = Product::where('status', 'active')->orderBy('name', 'asc')->get();
        return view('admin.products.tab_create', compact('products'));
    }

    public function submit_tab(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $product_id = (int)$request->product_id;

        $detail = ProductDetail::create([
            'product_id' => $product_id,
            'title' => $request->title,
            'slug' => str_replace(' ', '-', strtolower($request->title)),
            'description' => $request->description,
            'is_product' => $request->is_product,
            'new_page' => $request->new_page,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if($detail) {
            return redirect()->route('tabs')
                ->with('success', 'Tab Product Berhasil Ditambah');
        }
    }

    public function edit_tab($id) {
        $tab = ProductDetail::with('product')->where('id', $id)->where('status', 'active')->first();
        $products = Product::where('status', 'active')->orderBy('name', 'asc')->get();
        return view('admin.products.tab_edit', compact('tab', 'products'));
    }

    public function update_tab(Request $request){
        $detail = ProductDetail::findOrFail($request->id);
        $detail->title = $request->title;
        $detail->description = $request->description;
        $detail->save();

        if($detail) {
            return redirect()->route('tabs')
                ->with('success', 'Service Berhasil Diubah');
        }
    }

    public function destroy_tab(Request $request) {
        $tab = ProductDetail::findOrFail($request->id);
        $tab->delete();
        return redirect()->route('tabs')
            ->with('delete', 'Tab Berhasil Dihapus');
    }

    public function subs(){
        // $data = SubDetail::with('detail')->with('product')->orderByDesc('updated_at')->get();
        $data = SubDetail::select('sub_details.id', 'products.name as product_name', 'product_details.title as product_detail', 'sub_details.updated_at', 'sub_details.title', 'sub_details.status')
                    ->with('detail')
                    ->leftJoin('product_details', 'sub_details.product_detail_id', 'product_details.id')
                    ->leftJoin('products', 'product_details.product_id', 'products.id')
                    ->orderByDesc('sub_details.updated_at')->get();
        return view('admin.products.sub', compact('data'));
    }

    public function create_sub(){
        $products = ProductDetail::with('product')->where('status', 'active')->where('is_product', 'y')->where('new_page', 'y')->get();
        return view('admin.products.sub_create', compact('products'));
    }

    public function submit_sub(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'product_detail_id' => 'required'
        ]);

        $product_detail_id = (int)$request->product_detail_id;

        $detail = SubDetail::create([
            'product_detail_id' => $product_detail_id,
            'title' => $request->title,
            'slug' => str_replace(' ', '-', strtolower($request->title)),
            'description' => $request->description,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if($detail) {
            return redirect()->route('subs')
                ->with('success', 'Sub Product Berhasil Ditambah');
        }
    }

    public function edit_sub($id){
        $sub = SubDetail::with('detail')->where('id', $id)->where('status', 'active')->first();
        $details = ProductDetail::with('product')->where('status', 'active')->where('is_product', 'y')->where('new_page', 'y')->orderBy('title', 'asc')->get();
        $selected_tab = ProductDetail::with('product')->where('id', $sub->product_detail_id)->first();

        return view('admin.products.sub_edit', compact('sub', 'details', 'selected_tab'));
    }

    public function update_sub(Request $request){
        $sub = SubDetail::findOrFail($request->id);
        $sub->title = $request->title;
        $sub->description = $request->description;
        $sub->save();

        if($sub) {
            return redirect()->route('subs')
                ->with('success', 'Sub Product Berhasil Diubah');
        }
    }

    public function destroy_sub(Request $request) {
        $tab = SubDetail::findOrFail($request->id);
        $tab->delete();
        return redirect()->route('subs')
            ->with('delete', 'Sub Product Berhasil Dihapus');
    }
}
