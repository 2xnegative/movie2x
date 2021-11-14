<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    protected $fillable = [
            'title_category'
    ];

    public function CategoryMovie()
    {
        return $this->hasMany('App\Categorys_movies');
    }
}
