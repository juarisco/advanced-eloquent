<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    //return view('welcome');
    return AdvancedELOQUENT\Book::all();
});*/

/*Route::get('/', function () {
    
    $books=AdvancedELOQUENT\Book::get();

    return view('destroy', compact('books'));
    
});

Route::delete('destroy', function(Illuminate\Http\Request $request) {

	$ids=$request->get('ids');

	if (count($ids)) {
		AdvancedELOQUENT\Book::destroy($ids);
	}

	return back();
});*/

/*Route::get('/', function () {
    
    $categories= AdvancedELOQUENT\Category::whereHas('books', function($query) {
    	$query->where('status', 'public');
    })->get();

    return view('relationship', compact('categories'));
    
});*/

Route::get('/', function () {

	$users=AdvancedELOQUENT\User::all();

	return view('manytomany', compact('users'));
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
    //
});