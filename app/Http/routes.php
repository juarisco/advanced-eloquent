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

/*Route::get('/', function () {

	$users=AdvancedELOQUENT\User::all();

	return view('manytomany', compact('users'));
});*/

/*Route::get('/', function () {

	$users=AdvancedELOQUENT\User::all();

	return view('manytomany.index', compact('users'));
});

Route::get('edit-manytomany/{user_id}', [
	'as' => 'getEdit',
	'uses' => 'UserController@getEditManyToMany'
]);

Route::put('put-manytomany/{user_id}', [
	'as' => 'putEdit',
	'uses' => 'UserController@putEditManyToMany'
]);*/

/*Route::get('/', function () {


	$books=DB::table('categories')
		->join('books','categories.id', '=', 'books.category_id')
		->where('books.status', 'public')
		->select('categories.name as category', 'books.title', 'books.description')
		->get();

	//dd($books);
	return view('querybuilder.index', compact('books'));
});*/

/*use AdvancedELOQUENT\User;

Route::get('/', function () {

	$user=User::find(1);

	echo $user->name;
	foreach ($user->exams as $exam) {
		
		echo 
			'<li>'
			. $exam->title
			. 'Nota ' . $exam->pivot->score
			. ' Fecha ' . $exam->pivot->created_at
			. '</li>';
	}
	//return $user->name;
});*/

use AdvancedELOQUENT\Book;

Route::get('/', function () {

	$books=Book::with('category', 'user')->get();

	//dd($books);

	return view('home', compact('books'));

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