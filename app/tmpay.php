<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tmpay extends Model
{
    protected $table = 'tmpay';

    protected $fillable = [
        'price','date','promotion'
    ];
}
