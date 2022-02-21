<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = [
        'question','answer','userId',
    ];
    protected $table ='questions';
}
