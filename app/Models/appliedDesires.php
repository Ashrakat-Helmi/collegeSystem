<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appliedDesires extends Model
{
    protected $fillable = [
        'firstDesire','secondDesire','thirdDesire','id' , 'studentName'
    ];
    protected $table ='applieddesires';
}
