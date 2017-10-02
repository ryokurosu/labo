@extends('layout')

@section('content')

<div class="wrap">
 <h1>編集画面</h1>

 <div id="display">
    @foreach($movies as $movie)
    <div class="editer-wrap">
      <div class="editer-iframe-wrap">
        <?php echo $movie->elem  ?>
    </div>
    <div class="editer-meta-wrap">
        <h2 class="movie-title">
            <a href="{{ Request::root()}}/archive/{{ $movie->movie_id }}">{{ $movie->title }}</a>
        </h2>
        <form action="{{ Request::root()}}/editer/{{ $movie->movie_id }}" method="post">
            <input type="hidden" id="movie_id" name="movie_id" value="{{ $movie->movie_id }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="{{$movie->title}}">
            </div>
            <button type="submit" class="btn btn-primary">更新</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endforeach
</div>
</div>  
<div id="pagenate">
    {{ $movies -> links() }} 
</div>  

@endsection

