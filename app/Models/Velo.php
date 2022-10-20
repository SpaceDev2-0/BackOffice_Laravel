<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Velo extends Model
{
    use HasFactory;
    protected $fillable = ['velo_name', 'category_id','velo_spefication', 'velo_availability','velo_prix_location', 'velo_image'];

    public function category(){
        return $this->belongsTo(Category::class ,'category_id', 'id');
    }
}
