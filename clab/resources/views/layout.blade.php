<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
	<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
	<link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
	<title>{{$pagetitle}}</title>
</head>
<body>
	<header id="header">
		<div class="wrap header-wrap">
			<h1 id="logo">
				<a href="{{ Request::root()}}" alt="巨根ラボ | オトコの性器をいろんな角度から大きくするメディア">
					<!-- <img src="logo.png" alt="巨根ラボ"> -->
					巨根ラボ
				</a>
			</h1>
			<!-- <a id="login" href="{{ Request::root()}}/login">ログイン</a> -->
		</div>
		<nav id="tag-nav">
			<ul>
				@foreach($alltags as $tag)
				<li class="tag"><a href="{{ Request::root()}}/tag/{{ $tag->tag_id }}">{{ $tag->tag_name }}</a></li>
				@endforeach
			</ul>
		</nav>
	</header>

	<section id="main">

		@yield('content')


	</section>
	<footer id="footer">
		<div class="footer-1">
			<h2><a href="{{ Request::root()}}">ホーム</a></h2>
			<h2>タグ一覧</h2>
			<ul class="footer-tag">
				@foreach($alltags as $tag)
				<li class="tag"><a href="{{ Request::root()}}/tag/{{ $tag->tag_id }}">{{ $tag->tag_name }}</a></li>
				@endforeach
			</ul>
		</div>
		<div class="footer-2">
			<p id="copy">©　aaa all right realagoiewojiahrta.</p>
		</div>
	</footer>
</body>
</html>
