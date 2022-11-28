<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::all();
        return view('admin.clients.index', compact('clients'));
    }

    public function create_view() {
        return view('admin.clients.create');
    }

    public function submit(Request $request) {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        if ($request->image != null) {
            $extention = $request->image->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/clients/" . $file_name;
            $request->image->storeAs('public/clients', $file_name);
            $image = $txt;
        } else {
            $image = null;
        }

        $client = Client::create([
            'title' => $request->title,
            'image' => $image,
            'create_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($client) {
            return redirect()->route('clients')
                ->with('success', 'Klien Berhasil Ditambah');
        }
    }

    public function destroy(Request $request) {
        $client = Client::findOrFail($request->id);
        $client->delete();
        return redirect()->route('clients')
            ->with('delete', 'Klien Berhasil Dihapus');
    }

    public function client_description(){
        $description = About::where('type', 'client')->first();
        if(!$description){
            $description = About::create([
                'vission' => '',
                'description' => '',
                'type' => 'client'
            ]);
        }
        return view('admin.clients.description', compact('description'));
    }

    public function client_description_submit(Request $request){
        $description = About::where('type', 'client')->first();
        
        if($description){
            $description->vission = $request->title;
            $description->description = $request->description;
            $description->save();
            
            return redirect()->route('client_description')
            ->with('delete', 'Client Description Berhasil Disimpan');
        }
    }
}
