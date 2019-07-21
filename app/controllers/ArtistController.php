<?php

class ArtistController extends BaseController
{
	public function showArtists()
	{
		$artists = Artist::find();
		return View::make('dashboard.artists.index', $artists);
	}

	public function newArtist()
	{

	}
}