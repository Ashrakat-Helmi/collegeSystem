<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    protected $fillable = [
        'name',
    ];
    protected $table ='programs';
}
