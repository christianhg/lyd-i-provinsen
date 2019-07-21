<?php

class Image extends Eloquent
{
	protected $table = 'images';

	public function posts()
	{
		return $this->belongsToMany('Post');
	}

	public function features()
	{
		return $this->belongsToMany('Feature');
	}
}