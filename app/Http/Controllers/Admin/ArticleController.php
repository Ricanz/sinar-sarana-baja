<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('admin.news.index', compact('articles'));
    }

    public function create_view() {
        return view('admin.news.create');
    }

    public function submit(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($request->image != null) {
            $extention = $request->image->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/article/" . $file_name;
            $request->image->storeAs('public/article', $file_name);
            $image = $txt;
        } else {
            $image = null;
        }
        $article = Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'short_desc' => substr(strip_tags($request->description), 0, 200),
            'status' => 'active',
            'slug' => str_replace(' ', '-', strtolower($request->title)),
            'image' => $image,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if($article) {
            return redirect()->route('articles')
                    ->with('success', 'Article Berhasil Ditambah');
        }
    }

    public function edit_view($id) {
        $article = Article::findOrFail($id);
        return view('admin.news.edit', compact('article'));
    }

    public function update(Request $request) {
        $article = Article::findOrFail($request->id);
        
        if ($request->image != null) {
            $extention = $request->image->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/article/" . $file_name;
            $request->image->storeAs('public/article', $file_name);
            $image = $txt;
        } else {
            $image = $article->image;
        }

        $article->title = $request->title;
        $article->description = $request->description;
        $article->status = $request->status;
        $article->short_desc = substr(strip_tags($request->description), 0, 200);
        $article->slug = str_replace(' ', '-', strtolower($request->title));
        $article->image = $image;
        $article->save();
        
        return redirect()->route('articles')
            ->with('edit', 'Article Berhasil Diperbarui');
        
    }

    public function destroy(Request $request) {
        $article = Article::findOrFail($request->id);
        $article->delete();
        return redirect()->route('articles')
            ->with('delete', 'Article Berhasil Dihapus');
    }

    public function article_description(){
        $description = About::where('type', 'article')->first();
        if(!$description){
            $description = About::create([
                'vission' => '',
                'description' => '',
                'type' => 'article'
            ]);
        }
        return view('admin.news.description', compact('description'));
    }

    public function article_description_submit(Request $request){
        $description = About::where('type', 'article')->first();
        
        if($description){
            $description->vission = $request->title;
            $description->description = $request->description;
            $description->save();

            return redirect()->route('article_description')
            ->with('delete', 'Article Description Berhasil Diubah');
        }
    }
}
