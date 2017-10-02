<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\MovieTag;
use App\Tag;

class EditerController extends Controller
{
	public function page($id){
		$movies = Movie::paginate(20);
		$alltags = Tag::all();
		$pagetitle = '編集ページ | 巨根ラボ';
		return view('editer', ['movies' => $movies,'alltags' => $alltags,'pagetitle' => $pagetitle]);
	}
	public static function change(Request $request){
		$input = $request->all();
		$movie = Movie::where('movie_id',$input['movie_id'])->update(['title' => $input['title']]);
		$movies = Movie::paginate(20);
		$alltags = Tag::all();

		foreach ($alltags as $tag => $value) {
			if(preg_match('/'. $value->tag_name .'/',$input['title'])){
				$movietag = new MovieTag;
				$movietag->movie_id = $input['movie_id'];
				$movietag->tag_id = $value->tag_id;
				$movietag->save();
			}
		}

		$pagetitle = '編集ページ | 巨根ラボ';
		return view('editer', ['movies' => $movies,'alltags' => $alltags,'pagetitle' => $pagetitle]);
	}
}

?>