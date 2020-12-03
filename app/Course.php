<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'instructor', 'about_instructor','about_course'];

    protected $guarded = [];


    public  function getImagePathAttribute(){
        return asset('uploads/course_images/'.$this->image);
    }
}
