<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\User;
use App\Friend;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['firstname', 'surname', 'email', 'password', 'permant_publish', 'unique_link'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token', 'admin', 'permant_publish'];

	public function posts()
	{
		return $this->hasMany('App\Post');
	}

	public function friends()
	{
		return $this->belongsToMany('App\User', 'friends', 'user_id', 'friend_id');
	}

	public function followers()
    {
        return $this->hasMany('Follower', 'follower_id', 'id');
    }

    public function following()
    {
        return $this->hasMany('Follower', 'user_id', 'id');
    }

	public function stacks()
	{
		return $this->hasMany('App\Stack');
	}

	public function images()
	{
		return $this->hasMany('App\Image');
	}

	public function profile()
	{
		return $this->hasOne('App\Profile');
	}

	public function addFriend(User $user)
    {
        $this->friends()->attach($user->id);
    }

    public function removeFriend(User $user)
    {
        $this->friends()->detach($user->id);
    }

	public function getNameAttribute()
    {
        return $this->attributes['firstname'] . ' ' . $this->attributes['surname'];
    }

}
