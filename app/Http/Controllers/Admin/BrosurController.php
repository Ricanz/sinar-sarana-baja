<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brosur;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BrosurController extends Controller
{
    public function index() {
        $brochures = Brosur::all();
        return view('admin.brochures.index', compact('brochures'));
    }

    public function create_view() {
        return view('admin.brochures.create');
    }

    public function submit(Request $request) {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'file' => 'required',
        ]);

        if ($request->image != null) {
            $extention = $request->image->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/brochures/" . $file_name;
            $request->image->storeAs('public/brochures', $file_name);
            $image = $txt;
        } else {
            $image = null;
        }

        if ($request->file != null) {
            $extention = $request->file->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/brochures/" . $file_name;
            $request->file->storeAs('public/brochures', $file_name);
            $file = $txt;
        } else {
            $file = null;
        }

        $brochure = Brosur::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'file' => $file,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($brochure) {
            return redirect()->route('brochures')
                ->with('success', 'Brosur Berhasil Ditambah');
        }
    }

    public function destroy(Request $request) {
        $brochure = Brosur::findOrFail($request->id);
        $brochure->delete();
        return redirect()->route('brochures')
            ->with('delete', 'Brosur Berhasil Dihapus');
    }

}
