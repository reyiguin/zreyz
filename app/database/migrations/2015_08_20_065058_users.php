<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB:: table('users') -> insert(array(
			'lbl_id'=>'10',
			'lbl_name'=>'Rey_123',
			'lbl_lastname'=>'Iguin',		
		));
		
		DB:: table('users') -> insert(array(
			'lbl_id'=>'11',
			'lbl_name'=>'John Rey dwdadawd',
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
