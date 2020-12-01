<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['translated_value'];

    protected $guarded = [];

    public  function getImagePathAttribute(){
        return asset('uploads/setting_images/'.$this->image);
    }
}
