
@php
    $file = ACF_CUSTOM::_getField('url_presentation');

@endphp


@if ($file != null)
<object
	data="{{$file}}"
	type="application/pdf"
	width="100%"
	height="100%"
>
	<iframe
		src="{{$file}}"
		width="100%"
		height="100%"
		style="border: none"
	>
		<p>
			Your browser does not support PDFs.
			<a href="{{$file}}">Download the PDF</a>
		</p>
	</iframe>
</object>

@endif