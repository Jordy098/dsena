<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valuation extends Model
{
    protected $table="valuations";
    protected $fillable=['n_stars','user_id','video_id'];
    
    public function video()
    {
    	return $this->belongsTo('App\Video');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
