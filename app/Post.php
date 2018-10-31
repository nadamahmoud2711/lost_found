<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['lost', 'gender','description','location_description','city','area','latitude','longitude','age_from','age_to','name','lost_or_found','embedding','user_id'];

    public function photos(){

        return $this->hasMany('App\Photo','post_id','id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
