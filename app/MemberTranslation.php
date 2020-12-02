<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberTranslation extends Model
{
    protected $fillable = ['name', 'job', 'description'];
}
