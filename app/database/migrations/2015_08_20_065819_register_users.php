<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegisterUsers extends Migration {

	public function up()
	{
		DB:: table('register_users') -> insert(array(
			'firstname'=>'Rey',
			'middlename'=>'Centeno',
			'lastname'=>'Iguin',		
		));
		
		DB:: table('register_users') -> insert(array(
			'firstname'=>'Juan',
			'middlename'=>'Dela',
			'lastname'=>'Cruz',		
		));
	}

	public function down()
	{
		
	}

}
