<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreDecision extends Model
{
    protected $fillable = [
        'userId','status',
    ];
    protected $table ='PreDecision';
}
