

@php
    $file = ACF_CUSTOM::_getField('url_presentation');

    $home = get_home_url();
@endphp

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


</script>
