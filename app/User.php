<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';
    protected $fillable=['nick','name','email','password','birthday','rol_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }
    public function valuations()
    {
        return $this->hasMany('App\Valuation');
    }
    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }
    public function videos()
    {
        return $this->hasMany('App\Video');
    }

}
