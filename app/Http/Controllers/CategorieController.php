<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view("admin.categories.index", compact(('categories')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:225',
            'description' => 'required|string|max:225'
        ]);

        $categorie = new Categorie();
        $categorie->nom = $request->nom;
        $categorie->description = $request->description;
        $categorie->save();

        return redirect()->route('categories.index')->with('success', 'Categorie ajoutée avec succès');
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
    public function edit(categorie $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $category)
    {
        $request->validate([
            'nom' => 'required|string|max:225',
            'description' => 'required|string|max:225'
        ]);

        $category->nom = $request->nom;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Categorie modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        
        return redirect()->route('categories.index')->with('success', 'Categorie supprimé avec succès');
    }
}
