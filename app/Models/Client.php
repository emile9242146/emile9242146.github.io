<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['prenom','nom','date_naissance','lieu_naissance','adresse','numero_carte','jour_entree','jour_sortie'];

    public $timestamps = false;


    // public function getNumeroCarteAttribute($value){
    //     return $this->attributes['numero_carte'];
    // }

    public function setNumeroCarteAttribute($numero_carte){
        $this->attributes['numero_carte'] = strtolower($numero_carte);

    }
}
