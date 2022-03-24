<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PmcsProductsMedia extends Model
{
    use HasFactory;
     protected $fillable = [
        'user_id',
        'pmc_product_id',
        'type',
        'image','video'
      
    ];
}
