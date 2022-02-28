<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class desires extends Model
{
    protected $fillable = [
        'firstDesire','secondDesire','thirdDesire','userid'
    ];
    protected $table ='desires';
}
