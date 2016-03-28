<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Reservation extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	protected $fillable = ['userid','parking_space_id','parking_space_branch_id','payment_id','plate_number','park_in_date_time','park_out_date_time','reservation_date_time'];  
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'reservations';
	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	protected $hidden = array('password', 'remember_token');
	
	public static function validate($data){
		return Validator::make($data, static::$rules);
	}
	
}
?>
