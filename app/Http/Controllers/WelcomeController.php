<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Request;

use App\User;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome.index');
	}

	/**
	 * Show the continued registration form to user.
	 *
	 * @return Response
	 */
	public function details()
	{
		$input = Request::all();

		return view('welcome.details')->with([
			'post' => $input
        ]);
	}

	/**
	 * create a new user based on inputted fields.
	 *
	 * @return Response
	 */
	public function store()
	{

	}

}
