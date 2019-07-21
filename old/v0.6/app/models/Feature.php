<?php

class Feature extends Eloquent
{
	protected $table = 'features';

	public function image()
	{
		return $this->hasOne('Image');
	}
}