<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    //ralación hasMany
    public function books() {

    	return $this->hasMany(Book::class);
    }
}
