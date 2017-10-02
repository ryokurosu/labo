<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Tag;

class SitemapController extends Controller
{

public function sitemap()
{

	$allmovies = Movie::all();
	$alltags = Tag::all();
  return response()->view('sitemap',['movies' => $allmovies,'tags' => $alltags])->header('Content-Type', 'text/xml');
}

}