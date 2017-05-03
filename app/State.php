<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table='states';
    protected $fillable=['description'];
    
    public function videos ()
    {
    	return $this->hasMany('App\Video');
    }
}
