<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ReservationEvenement;

class Evenement extends Model
{

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'date',
        'capacite',
        'image'
    ];


    public function evenements()
    {
    	return $this->hasMany(ReservationEvenement::class,'evenement_id','id');
    }


   
}
