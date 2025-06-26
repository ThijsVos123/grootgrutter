<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactie extends Model
{
    protected $table = 'transactie';

    protected $fillable = [
        'medewerker_id',
        'datum',
        'status',
    ];

    // Relatie met medewerker (als je dat gebruikt)
    public function medewerker()
    {
        return $this->belongsTo(Medewerker::class);
    }

    // Relatie met bestellingen
    public function bestellingen()
    {
        return $this->hasMany(Bestelling::class);
    }
}
