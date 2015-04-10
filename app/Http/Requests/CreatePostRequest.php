<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePostRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return \Auth::check(); //must be logged in to post
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'post' => 'required|min:1',
			'published' => 'required',
		];
	}

}
