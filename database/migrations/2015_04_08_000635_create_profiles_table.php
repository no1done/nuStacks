<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('profile_picture_id')->unsigned();
			$table->string('title');
			$table->string('address1');
			$table->string('address2');
			$table->string('phone');
			$table->string('relationship_status');
			$table->string('occupation');
			$table->string('employer');
			$table->string('tagline');
			$table->text('aboutme');
			$table->enum('find_by_phone', ['Y', 'N'])->default('N');
			$table->enum('find_by_email', ['Y', 'N'])->default('Y');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
