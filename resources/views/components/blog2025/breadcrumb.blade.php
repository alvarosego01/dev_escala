@if(!empty($slug) && !empty($title))
<nav class="blog-breadcrumb">
	<a href="/blog">Blog</a> /
	<a href="{{ url('/blog/' . $slug) }}">{{ $title }}</a>
</nav>
@endif
