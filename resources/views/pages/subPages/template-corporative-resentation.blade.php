
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

@php
    $apiKey = null;
    if ($_SERVER['SERVER_NAME'] == 'localhost') {
         $apikey = '66c1377fb5f046438ff5ca613a0d1c4e';
    }
    if ($_SERVER['SERVER_NAME'] == 'escala.alvarosegovia.com') {
         $apikey = 'b1e0ad6ec30d4cc78be5d5f95b2a5a2e';

    }
    if ($_SERVER['SERVER_NAME'] == 'escala.com') {
         $apikey = '2f828b75c0f542bf85c59e9b5eb705b5';

    }



@endphp



 <div id="adobe-dc-view"></div>
 <script src="https://documentservices.adobe.com/view-sdk/viewer.js"></script>
 <script type="text/javascript">

    document.addEventListener("adobe_dc_view_sdk.ready", function(){
		var adobeDCView = new AdobeDC.View({clientId: "{{$apikey}}", divId: "adobe-dc-view"});
		adobeDCView.previewFile({
		         content: { location: { url: "{{$file}}" } },
                metaData: { fileName: "Presentación" }
		}, {embedMode: "SIZED_CONTAINER"});
	});

 </script>

@endif