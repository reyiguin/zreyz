<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB:: table('users') -> insert(array(
			'lbl_id'=>'5',
			'lbl_name'=>'wewewe',
			'lbl_lastname'=>'Iguin',		
		));
		
		DB:: table('users') -> insert(array(
			'lbl_id'=>'6',
			'lbl_name'=>'asd',
			'lbl_lastname'=>'Centeno Iguin',		
		));
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
