<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'job', 'description'];

    protected $guarded = [];

    public  function getImagePathAttribute(){
        return asset('uploads/team_images/'.$this->image);
    }

}
