<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Service;
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
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if($product) {
            if($request->description) {
                ProductDetail::create([
                    'product_id' => $product->id,
                    'title' => 'Deskripsi',
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
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request) {
        $product = Product::findOrFail($request->id);

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
        $product->save();

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
        $tabs = ProductDetail::with('product')->get();
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

        $detail = ProductDetail::create([
            'product_id' => $request->product_id,
            'title' => $request->title,
            'description' => $request->description,
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
}
