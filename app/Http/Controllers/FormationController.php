<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;


class FormationController extends Controller
{
    public function listeFormation()
    {
        // Récupérer la liste des formations depuis la base de données
        $formations = Formation::all();

        // Retourner une vue avec la liste des formations
        return view('liste-formation', compact('formations'));
    }
    public function create()
    {
        // Création d'un nouvel formation avec des valeurs spécifiées
        $nouvellFormation = Formation::create([
          'nom_formation' => 'laravel',
          'durée_formation' => '10 MOIS',
          'niveau_formation' => 'l3',

            // Autres champs de votre modèle
        ]);

        return 'formation créé avec succès!';
    }
}



