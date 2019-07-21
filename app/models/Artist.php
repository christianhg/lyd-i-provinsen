<?php

class Artist extends Eloquent
{
	protected $table = 'artists';

	public function recommendations()
	{
		return $this->belongsToMany('Recommendation');
	}
}