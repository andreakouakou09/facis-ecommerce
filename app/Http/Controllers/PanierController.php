<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commande;
use App\Models\LigneCommande;
use App\Models\Panier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PanierController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        // $article = Article::find($id);

        // $user = Auth::user();

        // $user_id = $user->id;


        // $panier = Panier::where('user_id', $user_id)
        //                     ->where('article_id', $article->id)
        //                     ->first();

        // if ($panier) {

        //     // Si l'article est déjà dans le panier, augmenter la quantité
        //     $panier->quantite += 1;
        //     $panier->save();

        //     return redirect()->back()->with('success', 'Article ajouté au panier avec succès');

        // }else{

        //     $data = new Panier();

        //     $data->user_id = $user_id;

        //     $data->article_id = $article->id;

        //     $data->quantite = 1;

        //     $data->prix = $article->prix;

        //     $data->save();

        //     return redirect()->back()->with('success', 'Article ajouté au panier avec succès');

        // }

        if (!auth()->Auth::check()) {
            return response()->json(['success' => false, 'message' => 'Veuillez vous connecter pour ajouter des articles au panier.'], 401);
        }

        $article = Article::find($id);
        $user = Auth::user();
        $user_id = $user->id;
    
        $panier = Panier::where('user_id', $user_id)
                        ->where('article_id', $article->id)
                        ->first();
    
        if ($panier) {
            $panier->quantite += 1;
            $panier->save();
    
            return response()->json([
                'success' => true,
                'message' => 'Quantité augmentée dans le panier'
            ]);
            
        } else {
            $data = new Panier();
            $data->user_id = $user_id;
            $data->article_id = $article->id;
            $data->quantite = 1;
            $data->prix = $article->prix;
            $data->save();
    
            return response()->json([
                'success' => true,
                'message' => 'Article ajouté au panier'
            ]);
        }


    }

    public function panier()
    {
        if(Auth::id())
        {
            $user = Auth::user();

            $userid = $user->id;

            $count = Panier::where('user_id', $userid)->count();

            $panier = Panier::where('user_id', $userid)->get();

            // Calculer le total général du panier
            $total = $panier->sum(function($panier) {
                return $panier->article->prix * $panier->quantite;
            });

        }else{
            $count = '';
        }
        
        return view('home.panier', compact('count', 'panier', 'total'));
    }

    public function updateQuantity(Request $request, $id)
    {
        $panier = Panier::find($id);

        if ($panier) {
            // Mettre à jour la quantité avec la valeur soumise
            $panier->quantite = $request->quantity;
            $panier->save();

            // Calculer le total général du panier pour l'utilisateur actuel
            $user_id = Auth::id();
            $totalPanier = Panier::where('user_id', $user_id)
                ->join('articles', 'articles.id', '=', 'paniers.article_id')
                ->sum(DB::raw('paniers.quantite * articles.prix'));

            return response()->json([
                'success' => true,
                'newQuantity' => $panier->quantite,
                'newTotalPrice' => $panier->quantite * $panier->article->prix,
                'totalPanier' => $totalPanier // Ajouter le total du panier ici
            ]);
        }

        return response()->json(['success' => false], 400);
    }


    public function removeFromPanier($id)
    {
        // Récupérer l'article du panier en fonction de son ID
        $panier = Panier::find($id);

        // Vérifier que le panier existe et appartient à l'utilisateur connecté
        if ($panier && $panier->user_id == Auth::id()) {
            // Supprimer l'article du panier
            $panier->delete();

            // Recalculer le total général après la suppression
            $totalPanier = Panier::where('user_id', Auth::id())
                ->join('articles', 'articles.id', '=', 'paniers.article_id')
                ->sum(DB::raw('paniers.quantite * articles.prix'));

            return response()->json([
                'success' => true,
                'totalPanier' => $totalPanier,
                'message' => 'Article retiré du panier avec succès'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Erreur lors de la suppression de l\'article'
        ], 400);
    }

    public function confirm_commande(Request $request)
    {
        // Récupérer l'utilisateur authentifié
        $user = Auth::user();

        // Récupérer les articles dans le panier de cet utilisateur
        $paniers = Panier::where('user_id', $user->id)->get();

        if ($paniers->isEmpty()) {
            return redirect()->back()->with('error', 'Votre panier est vide');
        }

         // Calculer le total de la commande
        $total = $paniers->sum(function ($panier) {
            return $panier->quantite * $panier->article->prix;
        });

        // $nom_user = $request->name;
        // $email_user = $request->email;
        $telephone_user = $request->telephone;
        $address_user = $request->email;
        $user_id = Auth::user()->id;

        // Créer la commande
        $commande = new Commande();
        $commande->user_id = $user_id;
        $commande->total = $total;
        $commande->telephone = $telephone_user;
        $commande->adresse = $address_user;
        $commande->statut =  'en attente';
        $commande->save();

        // Ajouter les articles à la commande (dans la table `commande_items`)
        foreach ($paniers as $panier) {
            $lignecommande = new LigneCommande();
            $lignecommande->commande_id = $commande->id;
            $lignecommande->article_id  = $panier->article_id;
            $lignecommande->quantite = $panier->quantite;
            $lignecommande->prix = $panier->article->prix;
            $lignecommande->save();
        }
        
        // Vider le panier
        Panier::where('user_id', $user->id)->delete();

        return redirect()->route('produits')->with('success', 'Commande confirmée avec succès');

        // $commande = new Commande();
        // $commande->user_id = $user_id;
        // $commande->telephone = $telephone_user;
        // $commande->adresse = $address_user;
        // $commande->statut = 
        // $commande->save();

    }


        

        
        
   

}
