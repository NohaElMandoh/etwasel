<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsUser extends Model
{
    use HasFactory;
    protected $fillable = ['contact','user_id'];
}
