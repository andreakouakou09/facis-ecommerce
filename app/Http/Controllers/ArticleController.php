<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view("admin.articles.index", compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view("admin.articles.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:225',
            'prix' => 'required|string|max:225',
            'categorie' => 'required|string|max:225',
            'prix' => 'required|string|max:225',
            'imagearticle' => 'required|mimes:jpeg,jpg,png|max:2048',
            'description' => 'required|string|max:225'
        ]);

        if($request->has('imagearticle'))
        {
            $file = $request->file('imagearticle');
            $extension = $file->getClientOriginalExtension();

            $filename = "produit_".time().'.'.$extension;
            $file->move('uploads/articles/', $filename);
        }

        $article = new Article();
        $article->nom = $request->nom;
        $article->prix = $request->prix;
        $article->categorie_id = $request->categorie;
        $article->description = $request->description;
        $article->image = $filename;
        $article->stock = $request->stock;
        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(article $article)
    {
        $categories = Categorie::all();
        return view('admin.articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, article $article)
    {
        $request->validate([
            'nom' => 'required|string|max:225',
            'prix' => 'required|string|max:225',
            'categorie' => 'required|string|max:225',
            'imagearticle' => 'required|mimes:jpeg,jpg,png|max:2048',
            'description' => 'required|string|max:225'
        ]);

        if($request->has('imagearticle'))
        {
            $file = $request->file('imagearticle');
            $extension = $file->getClientOriginalExtension();

            $filename = "produit_".time().'.'.$extension;
            $file->move('uploads/articles/', $filename);
        }

        $article->nom = $request->nom;
        $article->prix = $request->prix;
        $article->categorie_id = $request->categorie;
        $article->description = $request->description;
        $article->image = $filename;
        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $article->delete();
        
        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès');
    }
}
