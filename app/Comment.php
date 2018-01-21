<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $fillable=['body'];

    //seobel, likeable, votable ...
    public function commentable() {

    	return $this->morphTo();
    }
}
