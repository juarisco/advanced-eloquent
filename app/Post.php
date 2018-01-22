<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable=['title', 'body'];

    /*public function comments() {

    	//return $this->morphMany('AdvancedELOQUENT\Comment', 'commentable');
    	return $this->morphMany(Comment::class, 'commentable');
    }*/

    public function tags() {

    	return $this->morphToMany(Tag::class, 'taggable');
    }


}
