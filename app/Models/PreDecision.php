<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreDecision extends Model
{

    protected $fillable = [
        'id',
        'userId',
        'status',
    ];
    protected $table ='pre_decisions';
}
