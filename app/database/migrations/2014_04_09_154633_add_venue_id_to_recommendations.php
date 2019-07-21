<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVenueIdToRecommendations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recommendations', function($table)
		{
			$table->unsignedInteger('venue_id');
			$table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recommendations', function($table)
		{
			$table->dropColumn('venue_id');
		});
	}

}
