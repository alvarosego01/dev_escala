
@php
    $file = ACF_CUSTOM::_getField('url_presentation');

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
    <iframe style="min-height: 1500px" src="https://docs.google.com/viewer?url={{$file}}&embedded=true"></iframe>
</object>
@endif