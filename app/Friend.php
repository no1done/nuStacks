<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Friend extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'friends';

	public function posts()
	{
		return $this->belongsToMany('App\Friend', 'posts', 'user_id', 'user_id');
	}
}
