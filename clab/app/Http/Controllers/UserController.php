<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\User;
use App\Tag;


class UserController extends Controller
{
	public function page($id){
		$user = User::where('user_id',$id)->first();
		$fav_array = explode(',',$user->fav_movie);
		$fav_movies = Movie::whereIn('movie_id',$fav_array)->get();
		$alltags = Tag::all();
		$pagetitle = $user->name.'さんのページ | 巨根ラボ';
		return view('user', ['user' => $user,'movies' => $fav_movies,'alltags' => $alltags,'pagetitle' => $pagetitle]);
	}
}

?>