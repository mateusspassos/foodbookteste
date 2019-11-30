<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['title','body','name'];
    protected $dates = ['created_at','updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User','name');
    }
}

