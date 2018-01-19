<?php

namespace AdvancedELOQUENT;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    //ralación hasMany, tiene muchos libros..
    public function books() {

    	return $this->hasMany(Book::class);
    }

    public function getNumBooksAttribute() {

    	return count($this->books);
    }
}
