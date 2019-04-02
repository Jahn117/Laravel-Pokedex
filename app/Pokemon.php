<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    public function trainer(){
    	return $this->belongsTo('Blog\Trainer');
    }
}
