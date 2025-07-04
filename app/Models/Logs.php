<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Logs extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'oudvoorraad',
        'nieuwvoorraad',
        'reden',
        'user_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
