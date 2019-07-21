<?php

class Recommendation extends Eloquent
{
	protected $table = 'recommendations';

	public function artists()
	{
		return $this->hasMany('Artist');
	}

	public function venue()
	{
		return $this->hasOne('Venue');
	}
}