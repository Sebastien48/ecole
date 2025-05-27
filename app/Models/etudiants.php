<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class etudiants extends Model
{
    protected $fillable = [
        'matricule',
        'nom_prenom',
        'email',
        'classe',
        'mot de passe',
        
       
        
        
    ];
    protected $table = 'etudiants';
    protected $primaryKey = 'matricule';
    public $timestamps = false;
    protected $casts = [
        'date_naissance' => 'datetime',
    ];
    public function getFullNameAttribute()
    {
        return $this->nom . ' ' . $this->prenom;
    }
}
