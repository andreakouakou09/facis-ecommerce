<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function edit()
    {
        // Récupérer l'admin connecté
        $admin = Auth::guard('admin')->user();
        
        // Retourner la vue pour éditer le profil avec les données de l'admin
        return view('admin.profile.edit', compact('admin'));
    }

    // Mettre à jour le profil de l'admin
    public function update(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:admins,email,' . Auth::guard('admin')->id(),
            'password' => 'nullable|min:8|confirmed',  // Mot de passe non obligatoire, mais doit être confirmé si fourni
        ]);

        // Récupérer l'admin connecté
        $admin = Auth::guard('admin')->user();

        // Mise à jour des informations
        $admin->name = $request->name;
        $admin->email = $request->email;

        // Si un mot de passe est fourni, on le met à jour
        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        // Enregistrer les changements
        $admin->save();

        // Rediriger avec un message de succès
        return redirect()->route('admin.profile.edit')->with('success', 'Profil mis à jour avec succès.');
    }

    // Supprimer le profil de l'admin
    public function destroy()
    {
        // Récupérer l'admin connecté
        $admin = Auth::guard('admin')->user();

        // Supprimer l'admin
        $admin->delete();

        // Déconnecter l'admin
        Auth::guard('admin')->logout();

        // Rediriger vers la page de login
        return redirect()->route('admin.login')->with('success', 'Profil supprimé avec succès.');
    }

}
