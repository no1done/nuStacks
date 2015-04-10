<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameRequesteridColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('friends', function($table)
		{
		    $table->renameColumn('requester_id', 'friend_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('friends', function($table)
		{
		    $table->renameColumn('friend_id', 'requester_id');
		});
	}

}
