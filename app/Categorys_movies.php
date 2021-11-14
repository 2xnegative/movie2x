<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorys_movies extends Model
{
    protected $fillable = [
        'category_id','movie_id'
    ];

    public function genre()
    {
        return $this->belongTo('App\genre');
    }

    public function movie()
    {
        return $this->belongTo('App\movie');
    }
}
