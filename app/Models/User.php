<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password', 'full_name', 'gender', 'type', 'country', 'shop_name', 'phone','avatar','photo','cover','f_name','s_name'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function details()
    {
        return $this->hasOne('App\Models\UsersDetail', 'user_id');
    }
    public function emails()
  {
    return $this->hasMany('App\Models\UsersEmail','user_id');
  }
  public function contacts()
  {
    return $this->hasMany('App\Models\ContactsUser','user_id');
  }
  public function pmcs()
  {
    return $this->hasMany('App\Models\Pmc','user_id');
  }
   public function sliders()
  {
    return $this->hasMany('App\Models\UsersSlide','user_id');
  } 
     public function contactsUs()
  {
    return $this->hasMany('App\Models\Contact','user_id')->latest();
  } 
   public function certification()
  {
    return $this->hasMany('App\Models\Certification','user_id')->latest();
  } 
      public function notifications()
  {
    return $this->hasMany('App\Models\Notification','user_id')->latest();
  } 
      
}
