<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title','description'];

    protected $guarded = [];

    public  function getImagePathAttribute(){
        return asset('uploads/service_images/'.$this->image);
    }

    public  function getIconPathAttribute(){
        return asset('uploads/service_images/'.$this->icon);
    }
}
