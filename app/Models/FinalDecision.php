<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinalDecision extends Model
{
    protected $fillable = [
        'id', 'userId', 'preDecisionId', 'programId', 'status',
    ];
    protected $table = 'final_decisions';
}
