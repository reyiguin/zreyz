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
			'lbl_id'=>'7',
			'lbl_name'=>'Rey_USERS',
			'lbl_lastname'=>'Iguin dwdw',		
		));
		
		DB:: table('users') -> insert(array(
			'lbl_id'=>'8',
			'lbl_name'=>'John Rey_USERS',
			'lbl_lastname'=>'Centeno Iguin wdwd',		
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
