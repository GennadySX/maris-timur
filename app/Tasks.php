<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    //
    protected $fillable = [
        'name',
        'plan_cost',
        'description',
        'permissions',
    ];
}
