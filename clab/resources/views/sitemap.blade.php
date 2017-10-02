<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>{{ url('/') }}</loc>
		<lastmod>2017-09-30</lastmod>
	</url>

	@foreach($movies as $movie)
	<url>
		<loc>{{ url('/') }}/archive/{{ $movie->movie_id}}</loc>
	</url>
	@endforeach
	@foreach($tags as $tag)
	<url>
	<loc>{{ url('/') }}/tag/{{ $tag->tag_id}}</loc>
	</url>
	@endforeach
</urlset>