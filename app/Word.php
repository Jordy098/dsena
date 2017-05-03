<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $table='words';
    protected $fillable=['name','category_id'];

    public function category ()
    {
    	return $this->belongsTo('App\Category');
    }
    public function videos ()
    {
    	return $this->hasMany('App\Video');
    }
}
