<div class="blog-breadcrumb">
	<a href="/blog">Blog</a> /
	@if(!empty($slug) && !empty($title))
		<a href="{{ url('/blog/' . $slug) }}">{{ $title }}</a>
	@endif
</div>
