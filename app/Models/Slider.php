<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Slider extends Model
{
    use HasFactory;
    
     protected $appends = ['title','sub_title','desc','button_title'];
    
    public function getTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title1_en;
        } else if (App::isLocale('ar')) {
            return $this->title1_ar;
        }
    }
    public function getButtonTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->button_title_en;
        } else if (App::isLocale('ar')) {
            return $this->button_title_ar;
        }
    }
    public function getSubTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title2_en;
        } else if (App::isLocale('ar')) {
            return $this->title2_ar;
        }
    }
    public function getDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->desc_en;
        } else if (App::isLocale('ar')) {
            return $this->desc_ar;
        }
    }
}
