<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinalDecision extends Model
{
    protected $fillable = [
        'userId','preDecisionId','programId','status',
    ];
    protected $table ='finalDecision';
}
