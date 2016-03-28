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
			'lbl_id'=>'4',
			'lbl_name'=>'sadasdRey',
			'lbl_lastname'=>'Iguin',		
		));
		
		DB:: table('users') -> insert(array(
			'lbl_id'=>'5',
			'lbl_name'=>'sdsdJohn Rey',
			'lbl_lastname'=>'sdsdCenteno Iguin',		
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
