<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App; 

class Website extends Model
{
    use HasFactory;
       protected $appends = ['pmc_info','top_dynamic','first_keyword_info'];
   
    public function getPmcInfoAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->pmc_info_en;
        } else if (App::isLocale('ar')) {
            return $this->pmc_info_ar;
        }
    }
    
       public function getTopDynamicAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->top_dynamic_en;
        } else if (App::isLocale('ar')) {
            return $this->top_dynamic_ar;
        }
    }
      public function getFirstKeywordInfoAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->first_keyword_info_en;
        } else if (App::isLocale('ar')) {
            return $this->first_keyword_info_ar;
        }
    }
    
}
