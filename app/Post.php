<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	/**
	* The database table used by the model.
	*
	* @var string
	*/
	protected $table = 'posts';

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = ['user_id', 'post', 'published', 'deleted'];

	public function user()
	{
		return $this->belongsTo('App\User', 'user_id');
	}

}
