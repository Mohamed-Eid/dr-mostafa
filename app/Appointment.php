<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = [];
    protected $casts = [
        'days' => 'array', // Will convarted to (Array)
    ];

    public  function getContactMethodAttribute($value){
        return [
            0 => 'Phone',
            1 => 'Email',
        ][$value];
    }

    public  function getVisitTimeAttribute($value){
        return [
            0 => 'Morning',
            1 => 'Afternoon',
        ][$value];
    }
}
