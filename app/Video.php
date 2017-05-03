<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table='videos';
     protected $fillable=['url','word_id','region_id','state_id','user_id'];

     public function region()
     {
     	return $this->belongsTo('App\Region');
     }
     public function word()
     {
     	return $this->belongsTo('App\Word');
     }
     public function state()
     {
     	return $this->belongsTo('App\State');
     }
     public function valuations()
     {
        return $this->hasMany('App\Valuation');
     }
     public function favorite()
     {
        return $this->hasMany('App\Favorite');
     }
     public function user()
     {
        return $this->belongsTo('App\User');
     }
}
