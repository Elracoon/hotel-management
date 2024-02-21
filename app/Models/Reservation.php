<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'date_debut',
        'date_fin',
        'chambre_id'
    ];

    public function chambre()
    {
        return $this->belongsTo(Chambre::class, 'chambre_id');
    }
}
