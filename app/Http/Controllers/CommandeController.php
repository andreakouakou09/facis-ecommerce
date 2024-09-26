<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::all();
        return view('admin.commandes.index', compact('commandes'));
    }

    public function show()
    {
        $commandes = Commande::all();
        return view('admin.commandes.index', compact('commandes'));
    }

    public function mesCommandes()
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Récupérer les commandes de cet utilisateur
        $mescommandes = $user->commandes()->with('items.article')->get();

        // Retourner la vue avec les commandes
        // return view('admin.commandes.by_user', compact('mescommandes'));
        return view('dashboard', compact('mescommandes'));
    }

    public function show_mesCommandes($id)
    {
        $commande = Commande::with('items.article')->findOrFail($id);

        return view('admin.commandes.show_by_user', compact('commande'));
    }

}
