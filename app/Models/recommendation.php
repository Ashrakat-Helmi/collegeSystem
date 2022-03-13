<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recommendation extends Model
{
    protected $fillable = [
        'firstDesire', 'secondDesire', 'thirdDesire', 'userid'
    ];
    protected $table = 'desires';
}
