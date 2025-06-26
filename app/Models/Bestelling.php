<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bestelling extends Model
{
    protected $table = 'bestelling';

    protected $fillable = [
        'transactie_id',
        'product_id',
        'omschrijving',
        'prijs',
        'aantal',
    ];
}
