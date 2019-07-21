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
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->unsignedInteger('recommendation_id');
			$table->foreign('recommendation_id')->references('id')->on('recommendations')->onDelete('cascade')->onUpdate('cascade');
			$table->unsignedInteger('artist_id');
			$table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade')->onUpdate('cascade');
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
