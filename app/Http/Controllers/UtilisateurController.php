<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
    public function create()
    {
        return view('utilisateur.create');
    }

    public function store(Request $request)
    {
        // valider les données
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'nullable|string|max:255',
            'email' => 'required|email',
            'motdepasse' => 'required|string|max:255',
        ]);

        // ajouter dans la base avec mot de passe hashé
        Utilisateur::create([
            'id_user' => $request->id_user,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'motdepasse' => bcrypt($request->motdepasse), 
            'motdepasse_change' => 0,
        ]);

        return redirect('/utilisateur/create')->with('success', 'Utilisateur ajouté !');
    }
}
