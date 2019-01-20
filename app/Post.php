<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'photo_id',
        'body'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function photo() {
        return $this->belongsTo('App\Photo');
    }
}
