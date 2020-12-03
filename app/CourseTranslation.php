<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseTranslation extends Model
{
    protected $fillable = ['name', 'instructor', 'about_instructor','about_course'];
}
