<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class UsersKeyword extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','date_from','date_to','keyword','price','position','pmc_product_id','total'];
    
     
}
