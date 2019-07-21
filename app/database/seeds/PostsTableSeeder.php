<?php

class PostsTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('posts')->delete();

		Post::create(array(
		));
	}
}