<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VerkoopStatistieken extends Model
{
    protected $table = 'verkoopstatistieken';

    protected $fillable = [
        'artikelgroep', 'jaar', 'maand', 'totaal_aantal'
    ];
}
