<?php

namespace App\Http\Controllers;

use App\Models\Appointement;
use App\Models\Article;
use App\Models\Commande;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $articles = Article::count();
        $appointements = Appointement::count();
        $contacts = Contact::count();
        $commandes = Commande::count();

         // Charger les commandes avec les utilisateurs associés

         $lists_commande = Commande::with('user')->orderBy('created_at', 'desc')->take(5)->get();

        // $commandes = Commande::with('user')->get();

        // $lists_commande = Commande::orderBy('created_at', 'desc')->take(5)->get();
        return view('admin.dashboard', compact('articles', 'appointements', 'contacts', 'commandes', 'lists_commande'));
    }

    public function liste_contact()
    {
        $contacts = Contact::all();
        return view('admin.contact.liste', compact('contacts'));
    }

    public function liste_appointement()
    {
        $appointements = Appointement::all();
        return view('admin.appointement.liste', compact('appointements'));
    }
}
