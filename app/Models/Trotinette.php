<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trotinette extends Model
{
   use HasFactory;
    protected $fillable = ['nom', 'categorie_id', 'vitesse','poids', 'couleur', 'prix','prix_location', 'quantite'];
    // public function CategorieTrotinette(){
    //     return $this->belongsTo(CategorieTrotinette::class);
    // }
 
    public function categoryT(){
        return $this->belongsTo(CategorieT::class);
    }
}
