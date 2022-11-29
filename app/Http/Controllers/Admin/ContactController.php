<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::where('status', 'active')->get();
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

    public function footer_desc(){
        $footer = About::where('type', 'footer')->first();
        $now = Carbon::now();
        if($footer == null){
            About::create([
                'type' => 'footer',
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }

        return view('admin.contact.desc', compact('footer'));
    }

    public function footer_desc_submit(Request $request){
        $data = About::where('type', 'footer')->first();
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
        return redirect()->route('footer')
                ->with('success', 'Footer Berhasil Diperbarui');
    }

    public function footer_maps(){
        $now = Carbon::now();
        $map = About::where('type', 'maps')->first();
        if(!$map){
            $map = About::create([
                'description' => '',
                'type' => 'maps',
                'created_at' =>  $now,
                'updated_at' => $now
            ]);
        }

        $contact = Contact::where('status', 'inactive')->first();
        if(!$contact){
            $contact = Contact::create([
                'name' => '',
                'email' => '',
                'phone' => '',
                'status' => 'inactive',
                'created_at' =>  $now,
                'updated_at' => $now
            ]);
        }
        
        return view('admin.contact.maps', compact('map', 'contact'));
    }

    public function footer_maps_submit(Request $request){
        $now = Carbon::now();
        $contact = Contact::where('status', 'inactive')->first();
        $map = About::where('type', 'maps')->first();
        if($contact){
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->updated_at = $now;
            $contact->save();
        }

        if($map){
            $map->description = $request->maps;
            $map->updated_at = $now;
            $map->save();
        }

        
        return redirect()->route('footer_maps')
                ->with('success', 'Contact & Map Berhasil Diperbarui');
    }
}

