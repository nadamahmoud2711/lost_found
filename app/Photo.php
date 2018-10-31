<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos_posts';

	public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function post(){

	    return $this->belongsTo('App\Post','post_id','id');
    }
    
}
