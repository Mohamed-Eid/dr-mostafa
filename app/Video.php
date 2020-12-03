<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $guarded = [];

    public function embeded_link()
    {
        return 'https://www.youtube.com/embed/'.get_video_id($this->link);
    } 
}
