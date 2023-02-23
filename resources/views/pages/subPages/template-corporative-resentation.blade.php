
@php
    $file = ACF_CUSTOM::_getField('url_presentation');

    echo $file;
@endphp
{{--

    <script>
 let $file_url = "{{ $file }}";
function download(url, filename) {
  fetch(url)
    .then(response => response.blob())
    .then(blob => {
      const link = document.createElement("a");
      link.href = URL.createObjectURL(blob);
      link.download = filename;
      link.click();
  })
  .catch(console.error);
}

download( $file_url,"presentacion.pdf");

window.location = ('{{$home}}');


</script> --}}


@if ($file != null)
<object style="min-height: 1500px" data="{{$file}}" type="application/pdf">
    <iframe  src="https://docs.google.com/viewer?url=your_url_to_pdf&embedded=true"></iframe>
</object>
----
<iframe src="http://docs.google.com/gview?url={{$file}}&embedded=true" style="width:100%; height:1500px;" frameborder="0"></iframe>

@endif