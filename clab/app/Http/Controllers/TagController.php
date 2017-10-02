<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovieTag;
use App\Tag;
use App\Movie;

class TagController extends Controller
{
	public function page($id){
		$tag_name = Tag::where('tag_id',$id)->first(['tag_name']);
		$movie_ids = MovieTag::where('tag_id',$id)->get(['movie_id']);
		$movies = Movie::whereIn('movie_id',$movie_ids)->paginate(10);
		$alltags = Tag::all();
		$pagetitle = $tag_name->tag_name.' | オトコの性器をいろんな角度から大きくするメディア';
		return view('tag', ['movies' => $movies,'tag' => $tag_name,'alltags' => $alltags,'pagetitle' => $pagetitle]);
	}
}

?>