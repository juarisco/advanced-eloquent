<?php

namespace AdvancedELOQUENT\Http\Controllers;

use AdvancedELOQUENT\Book;
use AdvancedELOQUENT\User;
use Illuminate\Http\Request;
use AdvancedELOQUENT\Http\Requests;

class UserController extends Controller
{
    
    public function getEditManyToMany($user_id) {

    	$user=User::find($user_id);
    	$books=Book::orderBy('title', 'ASC')->lists('title', 'id');

    	return view('manytomany.edit', compact('user', 'books'));
    }

    public function putEditManyToMany(Request $request, $user_id) {

    	$user=User::find($user_id);
    	//dd($request->get('books'));
    	$user->manyBooks()->sync($request->get('books'));
    	
    	return redirect('/');
    	
    }

    public function getUser($id) {

        $user=User::find($id);

        return view('user', compact('user'));

    }
}
