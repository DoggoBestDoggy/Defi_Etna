<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class trombi extends Controller
{
    public function add_profile(Request $request) //Fonction pour ajouter un profil dans la table
    {
        $validated = $request->validate([ //Vérifie les données saisies
            'login' => ['required', 'min:1', 'max:8'],
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email', 'unique:profiles'],
            'picture' => ['required'],
            'work' => ['required', 'max:45'],
            'role' => ['required', 'integer']
        ]);

        $Profile = Profile::create($validated); //Ajoute les données dans la table

        return redirect('/');
    }
}
