<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'id','domain','title','description','keyword','commment_fb','logo','facebook','twitter','imdb'
    ];
}
