<?php

namespace App\Http\Controllers;

use App\Models\Appointement;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\User;
use App\Models\Panier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $categories = Categorie::all();

        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Panier::where('user_id', $userid)->count();
        }else{
            $count = '';
        }

        return view('home.accueil', compact('count', 'articles', 'categories'));
    }

    public function apropos()
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Panier::where('user_id', $userid)->count();
        }else{
            $count = '';
        }
        return view('home.apropos', compact('count'));
    }

    public function produits()
    {
        $categories = Categorie::all();
        $articles = Article::paginate(6);
        // $articles = Article::all();
        
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Panier::where('user_id', $userid)->count(); 
        }else{
            $count = '';
        }
        return view('home.produits', compact('categories', 'articles', 'count'));
    }

    public function services()
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Panier::where('user_id', $userid)->count();
        }else{
            $count = ''; 
        }
        
        return view('home.services', compact('count'));
    }

    public function actualites()
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Panier::where('user_id', $userid)->count();
        }else{
            $count = ''; 
        }
        
        return view('home.actualites', compact('count'));
    }

    public function contact()
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Panier::where('user_id', $userid)->count();
        }else{
            $count = ''; 
        }
        
        return view('home.contact', compact('count'));
    }

    public function contact_store(Request $request)
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Panier::where('user_id', $userid)->count();
        }else{
            $count = ''; 
        }

        $request->validate([
            'nom' => 'required|string|max:225',
            'email' => 'required|string|max:225',
            'telephone' => 'required|string|max:225',
            'sujet' => 'required|string|max:225',
            'message' => 'required|string|max:225'
        ]);

        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->telephone = $request->telephone;
        $contact->sujet = $request->sujet;
        $contact->message = $request->message;
        $contact->save();

        // Redirection vers la page d'accueil avec un message de succès
        return redirect()->route('contact')->with('success', 'Message enregistré avec succès');














        // return view('home.accueil', compact('count'))->with('success', 'Message enregistré avec succès');

        // return view('home.contact', compact('count'));

        // dd($request->all());

        // if(Auth::id())
        // {
        //     $user = Auth::user();
        //     $userid = $user->id;
        //     $count = Panier::where('user_id', $userid)->count();
        // }else{
        //     $count = ''; 
        // }

        // $donnee = $request->validate([
        //     'nom' => 'required|string|max:225',
        //     'email' => 'required|string|max:225',
        //     'telephone' => 'required|string|max:225',
        //     'sujet' => 'required|string|max:225',
        //     'message' => 'required|string|max:225'
        // ]);

        // dd($donnee);

        // $contact = new Contact();
        // $contact->nom = $request->nom;
        // $contact->email = $request->email;
        // $contact->telephone = $request->telephone;
        // $contact->sujet = $request->sujet;
        // $contact->message = $request->message;
        // $contact->save();

        // return view('home.accueil', compact('count'));
    }



    public function appointement_store(Request $request)
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Panier::where('user_id', $userid)->count();
        }else{
            $count = ''; 
        }


        $donnee = $request->validate([
            'nom' => 'required|string|max:225',
            'telephone' => 'required|string|max:225',
            'adresse' => 'required|string|max:225',
            'date' => 'required|string|max:225',
            'service' => 'required|string|max:225',
            'message' => 'required|string|max:225'
        ]);


        $appointement = new Appointement();
        $appointement->nom = $request->nom;
        $appointement->telephone = $request->telephone;
        $appointement->adresse = $request->adresse;
        $appointement->date = $request->date;
        $appointement->services = $request->service;
        $appointement->message = $request->message;
        $appointement->save();

        // dd('Appointement saved!');

        return redirect()->route('services')->with('success', 'Rendez-vous enregistré avec succès');
    }
}
