<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfq extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id','industry_field_id','product_name_en','product_name_ar','product_desc_en','product_desc_ar','region_id'];
  
    public function user()
    {
      return $this->belongsTo('App\Models\User','user_id');
    }
    public function industryField()
    {
      return $this->belongsTo('App\Models\IndustriesField','industry_field_id');
    }
    public function region()
    {
      return $this->belongsTo('App\Models\Region','region_id');
    }
}
