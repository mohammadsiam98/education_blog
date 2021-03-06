<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Blog');
    }
    public function user()
    {
        return $this->belongsTo('App\Blog');
    }
}