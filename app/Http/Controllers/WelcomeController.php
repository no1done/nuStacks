<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Request;
use App\Http\Requests\RegisterUserRequest;
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
	public function register()
	{
		return view('welcome.register');
	}

	/**
	 * create a new user based on inputted fields.
	 *
	 * @param RegisterUserRequest $request
	 * @return Response
	 */
	public function store(RegisterUserRequest $request)
	{
		$data = $request->all();

		$user = new User;

		$name = explode(' ', $data['name']);

		$user->firstname = $name[0];

		if(!empty($name[1]) ? $user->surname = $name[1] : $user->surname = "");

		$user->email = $data['email'];

		$user->password = bcrypt($data['password']);

		$user->unique_link = $data['unique_link'];

		if($user->save())
		{
			return redirect('/');
		}
	}

}
