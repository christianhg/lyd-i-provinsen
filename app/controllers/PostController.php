<?php

class PostController extends BaseController
{
	public function showNewest()
	{
		//return View::make('post')->withPost(Post::take(1));
		return View::make('post', array('post' => Post::take(1)->get()));
	}
}