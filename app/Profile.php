<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	/**
	* The database table used by the model.
	*
	* @var string
	*/
	protected $table = 'profiles';

	/**
	* Belgons to a user, returns object
	*
	* @return string
	*/
	public function user()
	{
		return $this->belongsTo('App\User', 'user_id');
	}

}
