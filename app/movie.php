<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $fillable = [
        'title','description','url','sound','image','vip','runtime','director','actors','country','year','resolution','view','imdb'
    ];


    public function CategoryMovie()
    {
        return $this->hasMany('App\Categorys_movies');
    }
}
