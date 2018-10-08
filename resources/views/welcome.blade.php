<link href="{{ asset('assets/css/paper-dashboard.min790f.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/loading.css') }}">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div id="loadingData"></div>

<script type="text/javascript">
  var loader = '<div id="loading"  style="background:  #0a0a0aeb !important;"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
    if ( $('#loading').length ) {
      $('#loading').remove();
    }
    $('#loadingData').append(loader);
    window.location.href="/login";
</script>