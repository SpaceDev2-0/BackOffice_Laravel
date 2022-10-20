<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationEvenement extends Model
{
    protected $fillable = [
        'evenement_id',
        'nb_place',
        'user',
      
    ];

    public function evenementRv()
    {
    	return $this->belongsTo(Evenement::class,'evenement_id','id');
    }

   

}
