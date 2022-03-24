<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
class City extends Model
{
    use HasFactory;
     protected $appends = ['name'];
   
    public function getNameAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->name_en;
        } else if (App::isLocale('ar')) {
            return $this->name_ar;
        }
    }
}
