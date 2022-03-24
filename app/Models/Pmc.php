<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
class Pmc extends Model
{
    use HasFactory;
    protected $fillable = ['cat_name','user_id','cat_name_ar'];
 protected $appends = ['cat'];

    public function products()
    {
      return $this->hasMany('App\Models\PmcsProduct','pmc_id');
    }
    
     
   
    public function getCatAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->cat_name;
        } else if (App::isLocale('ar')) {
            return $this->cat_name_ar;
        }
    }
}
