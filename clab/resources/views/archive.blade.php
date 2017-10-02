@extends('layout')

@section('content')
<div class="wrap">
    <article id="content">
        <div id="archive-main">

            <div class="archive-title-wrap">
                <h2 class="archive-title">
                    {{ $movie->title }}
                </h2>
            </div>

            <div class="archive-movie-wrap">
              <div class="iframe-wrap">
                <?php echo $movie->elem  ?>
            </div>
            <div class="archive-meta">
                <ul id="tag-area">
                    @foreach($tags as $tag)
                    <li class="tag"><a href="{{ Request::root()}}/tag/{{ $tag->tag_id }}">{{ $tag->tag_name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="new-posts">
            <h2>最新の動画</h2>
            <ul>
             @foreach($newmovies as $movie)
             <li>
                <div class="new-movie-wrap">
                    <?php echo $movie->elem ?>
                </div>
                <a class="new-movie-title" href="{{ Request::root()}}/archive/{{ $movie->movie_id }}">{{$movie->title}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
</article>
<section id="sidebar">
    <div class="ad">
        <!-- ad -->
    </div>
    <div id="popular-post">
        <h2>人気の動画</h2>
        <ul>
          @foreach($popmovies as $movie)
          <li><a href="{{ Request::root()}}/archive/{{ $movie->movie_id }}">{{$movie->title}}</a><span class="view">{{$movie->view}}view</span></li>
          @endforeach
      </ul>
  </div>
  <div id="sidebar-tag">
    <h2>タグ一覧</h2>
    <ul class="sidebar-tag-list">
        @foreach($alltags as $tag)
        <li class="tag"><a href="{{ Request::root()}}/tag/{{ $tag->tag_id }}">{{ $tag->tag_name }}</a></li>
        @endforeach
    </ul>
</div>
</section>
</div>  
@endsection
