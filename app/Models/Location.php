<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'idVelo',
        'idClient',
        'idStation',
        'dateDebut',
        'dateFin',
        'prix',
        'statutPaiement',
        'statutLocation',
        'remarque',
        'idAgent',
    ];

    public function accessoires()
    {
        return $this->hasMany(Accessoire::class);
    }
}
