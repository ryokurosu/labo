<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\MovieTag;
use App\Tag;

class ArchiveController extends Controller
{
	public function index(){
		$movies = Movie::paginate(12);
		$alltags = Tag::all();
		$pagetitle = '巨根ラボ | オトコの性器をいろんな角度から大きくするメディア';
		return view('welcome', ['movies' => $movies,'alltags' => $alltags,'pagetitle' => $pagetitle ]);
	}
	public function page($id){
		Movie::where('movie_id',$id)->increment('view',1);
		$movie = Movie::where('movie_id',$id)->first();
		$tag_ids = MovieTag::where('movie_id',$id)->get(['tag_id']);
		$tags = Tag::whereIn('tag_id',$tag_ids)->get();
		$alltags = Tag::all();
		$pop_movies = Movie::orderBy('view','desc')->take(5)->get();
		$new_movies = Movie::orderBy('movie_id','desc')->take(5)->get();

		$pagetitle = $movie->title.' | 巨根ラボ';

		return view('archive', ['movie' => $movie,'tags' => $tags,'alltags' => $alltags,'popmovies' => $pop_movies,'newmovies' => $new_movies,'pagetitle' => $pagetitle ]);
	}
}

?>