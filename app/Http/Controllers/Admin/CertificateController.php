<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index() {
        $certificates = Certificate::all();
        return view('admin.certificates.index', compact('certificates'));
    }

    public function create_view() {
        return view('admin.certificates.create');
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
            $txt = "storage/certificates/" . $file_name;
            $request->image->storeAs('public/certificates', $file_name);
            $image = $txt;
        } else {
            $image = null;
        }

        if ($request->file != null) {
            $extention = $request->file->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/certificates/" . $file_name;
            $request->file->storeAs('public/certificates', $file_name);
            $file = $txt;
        } else {
            $file = null;
        }

        $certificate = Certificate::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'file' => $file,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($certificate) {
            return redirect()->route('certificates')
                ->with('success', 'Sertifikat Berhasil Ditambah');
        }
    }

    public function destroy(Request $request) {
        $certificate = Certificate::findOrFail($request->id);
        $certificate->delete();
        return redirect()->route('certificates')
            ->with('delete', 'Sertifikat Berhasil Dihapus');
    }
}
