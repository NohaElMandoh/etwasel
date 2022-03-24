<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class UsersDetail extends Model
{
    use HasFactory;
 protected $fillable = ['campany_name_ar','user_id','campany_name_en','category_id',
    'industry_field_id','location_img','location_url','certification','location_map','campany_about','logo','shop_name','shop_info','employees','country',
'address','wechat','phone2','city','state','postal_code','campany_category_id','campany_about_ar','package_id','city_id'];
      protected $appends = ['campany_name','about_campany'];
   
    public function getCampanyNameAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->campany_name_en;
        } else if (App::isLocale('ar')) {
            return $this->campany_name_ar;
        }
    }
    
      public function getAboutCampanyAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->campany_about;
        } else if (App::isLocale('ar')) {
            return $this->campany_about_ar;
        }
    }
    
    public function campany_category()
    {
      return $this->belongsTo('App\Models\CampanyCategory','campany_category_id');
    }
    
    public function package()
    {
      return $this->belongsTo('App\Models\Package');
    }
}
