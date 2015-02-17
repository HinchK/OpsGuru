<?php namespace OpsGuru;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * OpsGuru\User
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $avatar
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\OpsGuru\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\OpsGuru\User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\OpsGuru\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\OpsGuru\User whereAvatar($value)
 * @method static \Illuminate\Database\Query\Builder|\OpsGuru\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\OpsGuru\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\OpsGuru\User whereUpdatedAt($value)
 */
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
	protected $fillable = ['username', 'email', 'avatar', 'access_token'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

}
