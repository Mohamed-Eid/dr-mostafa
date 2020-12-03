<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $guarded = [];

    public  function getImagePathAttribute(){
        return asset('uploads/gallary_images/'.$this->image);
    }
}
