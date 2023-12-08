<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $table = 'formations'; // Remplacez 'nom_de_votre_table_apprenants' par le nom de votre table

    // Si vous avez des champs à remplir en masse, vous pouvez spécifier le tableau fillable
    protected $fillable = [
        'nom_formation',
        'durée_formation',
        'niveau_formation'
        // Ajoutez ici d'autres champs de votre table apprenants
    ];
}
