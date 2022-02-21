<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreDecision extends Model
{
    protected $fillable = [
        'userId','status',
    ];
    protected $table ='PreDecision';
}
