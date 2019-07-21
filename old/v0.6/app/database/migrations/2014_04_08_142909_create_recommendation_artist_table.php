<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecommendationArtistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recommendation_artist', function(Blueprint $table)
		{
			$table->increments('id');
			$table->fereign('recommendation_id')->references('id')->on('recommendations');
			$table->fereign('artist_id')->references('id')->on('artists');
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
		Schema::drop('recommendation_artist');
	}

}
