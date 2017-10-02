@extends('layout')

@section('content')

<div class="wrap">
    <div id="display">
        @foreach($movies as $movie)
        <div class="movie-wrap">
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
<div id="pagenate">
    {{ $movies -> links() }} 
</div>  
</div>  


@endsection

