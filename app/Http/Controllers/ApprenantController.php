<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function listeApprenant()
    {
        // Récupérer la liste des apprenants depuis la base de données
        $apprenants = Apprenant::all();

        // Retourner une vue avec la liste des apprenants
        return view('liste-apprenant', compact('apprenants'));
    }
    public function create()
    {
        // Création d'un nouvel Apprenant avec des valeurs spécifiées
        $nouvelApprenant = Apprenant::create([
          'nom' => 'dieng',
          'prenom' => 'ibrahima',
          'adresse'=>'dakar',
          'classe'=>'L3'

        ]);

        return 'apprenant créé avec succès!';
    }
}
