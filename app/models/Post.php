<?php

class Post extends Eloquent
{
	protected $table = 'posts';

	public function recommendations()
	{
		return $this->hasMany('Recommendation');
	}

	public function image() {
		return $this->hasOne('Image');
	}
}