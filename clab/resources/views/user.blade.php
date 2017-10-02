@extends('layout')

@section('content')

<div class="wrap">
    <h2>{{$user->screen_name}}さんのページ</h2>
    <div id="user_popular">
        @foreach($movies as $movie)
        <div class="user-movie">
          <div class="iframe-wrap">
            <?php echo $movie->elem  ?>
        </div>
        <div class="movie-meta-wrap">
            <h2 class="movie-title">
                <a href="{{ Request::root()}}/archive/{{ $movie->movie_id }}">{{ $movie->title }}</a>
            </h2>
        </div>
    </div>
    @endforeach
</div>
</div>  

@endsection

