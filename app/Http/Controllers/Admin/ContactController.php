<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin/contact/index', compact('contacts'));
    }

    public function create(){
        return view('admin/contact/create');
    }

    public function submit(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 'active'
        ]);

        if ($contact) {
            return redirect()->route('contact')
                ->with('success', 'Contact Berhasil Ditambah');
        }

    }

    public function destroy(Request $request) {
        $contact = Contact::findOrFail($request->id);
        $contact->delete();
        return redirect()->route('contact')
            ->with('delete', 'Contact Berhasil Dihapus');
    }
}
