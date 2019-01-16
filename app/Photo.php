<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $dir = "/images/";

    public function getNameAttribute($photo) {
        return $this->dir.$photo;
    }
}
