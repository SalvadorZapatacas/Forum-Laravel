<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Thread extends Model
{



    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function getPostsCountAttribute(){
        return $this->posts->count();
    }

    public function getCreatedAtAttribute($date) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y H:i:s');
    }
}
