<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];
    protected $primarykey = 'id';

    public function modeles()
    {
        return $this->hasMany(Modele::class,'marque_id');
    }
    public function voitures()
    {
        return $this->hasMany(Voiture::class, 'marque_id');
    }
}
