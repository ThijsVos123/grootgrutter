<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bestellijst extends Model
{
    protected $table = 'bestellijst';

    protected $fillable = [
        'id',
        'medewerker_id',
        'datum',
        'status',
    ];

    public function medewerker()
    {
        return $this->belongsTo(Medewerker::class, 'medewerker_id');
    }

    public function producten()
    {
        return $this->belongsToMany(Product::class, 'bestellijst_product', 'bestellijst_id', 'product_id')
            ->withPivot('aantal');
    }
}
