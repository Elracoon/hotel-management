<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

    protected $fillable = [
            "prix",
            "capacite",
            "etage",
            "is_reserved",
            "hotel_id"
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
