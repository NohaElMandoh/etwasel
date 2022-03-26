<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Laravel\Scout\Searchable;

class PmcsProduct extends Model
{
//,Searchable
    use HasFactory,Searchable;
    
    protected $fillable = ['user_id','pmc_id','product_name_en','product_name_ar','image','video','unit_id','currency_id',
    'min_order','min_price','max_price','load_time','product_desc','home_keywords','pages_keywords','product_desc_ar'];
    
     protected $appends = ['product_name','product_description'];
   
    public function getProductNameAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->product_name_en;
        } else if (App::isLocale('ar')) {
            return $this->product_name_ar;
        }
    }
       public function getProductDescriptionAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->product_desc;
        } else if (App::isLocale('ar')) {
            return $this->product_desc_ar;
        }
    }
    // public function getAvaliableAttribute($value)
    // {
    //   return true;
    // }
    
   
    public function user()
    {
      return $this->belongsTo('App\Models\User','user_id');
    }
    public function unit()
    {
      return $this->belongsTo('App\Models\Unit','unit_id');
    }
    public function currency()
    {
      return $this->belongsTo('App\Models\Currency','currency_id');
    }
    public function pmc()
    {
      return $this->belongsTo('App\Models\Pmc','pmc_id');
    }
    public function media()
    {
      return $this->hasMany('App\Models\PmcsProductsMedia','pmc_product_id');
    }
    
     public function keywords()
    {
      return $this->hasMany('App\Models\UsersKeyword','pmc_product_id');
    }
}
