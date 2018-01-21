<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    //realción belongsTo, pertenece a una categoría
    public function category() {

    	return $this->belongsTo(Category::class);
    }

    public function user() {

    	return $this->belongsTo(User::class);
    }

    public function users() {

    	return $this->belongsToMany(User::class);
    }
}
