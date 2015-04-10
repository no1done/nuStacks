<?php namespace App\Http\Controllers;

use App\Post;
use App\Friend;
use App\User;

class HomeController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		$posts = \Auth::user()->friends()->posts()->latest('created_at')->get();

		//dd($posts);

		return view('app.home')->with([
			'posts' => $posts
		]);
	}


}
