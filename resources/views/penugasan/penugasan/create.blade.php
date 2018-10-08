@extends('layouts.backend')
@section('title')
  Penugasan Baru
@endsection

@section('judul')
  Penugasan Baru
@endsection
@section('content')
<style>

#loading {
    background: #ffffff42 url("img/page-bg.png") repeat scroll 0 0;
    height: 100%;
    left: 0;
    margin: auto;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999999;
}
.bokeh {
    border: 0.01em solid rgba(150, 150, 150, 0.1);
    border-radius: 50%;
    font-size: 100px;
    height: 1em;
    list-style: outside none none;
    margin: 0 auto;
    position: relative;
    top: 35%;
    width: 1em;
    z-index: 2147483647;
}
.bokeh li {
    border-radius: 50%;
    height: 0.2em;
    position: absolute;
    width: 0.2em;
}
.bokeh li:nth-child(1) {
    animation: 1.13s linear 0s normal none infinite running rota, 3.67s ease-in-out 0s alternate none infinite running opa;
    background: #00c176 none repeat scroll 0 0;
    left: 50%;
    margin: 0 0 0 -0.1em;
    top: 0;
    transform-origin: 50% 250% 0;
}
.bokeh li:nth-child(2) {
    animation: 1.86s linear 0s normal none infinite running rota, 4.29s ease-in-out 0s alternate none infinite running opa;
    background: #ff003c none repeat scroll 0 0;
    margin: -0.1em 0 0;
    right: 0;
    top: 50%;
    transform-origin: -150% 50% 0;
}
.bokeh li:nth-child(3) {
    animation: 1.45s linear 0s normal none infinite running rota, 5.12s ease-in-out 0s alternate none infinite running opa;
    background: #fabe28 none repeat scroll 0 0;
    bottom: 0;
    left: 50%;
    margin: 0 0 0 -0.1em;
    transform-origin: 50% -150% 0;
}
.bokeh li:nth-child(4) {
    animation: 1.72s linear 0s normal none infinite running rota, 5.25s ease-in-out 0s alternate none infinite running opa;
    background: #88c100 none repeat scroll 0 0;
    margin: -0.1em 0 0;
    top: 50%;
    transform-origin: 250% 50% 0;
}
@keyframes opa {
12% {
    opacity: 0.8;
}
19.5% {
    opacity: 0.88;
}
37.2% {
    opacity: 0.64;
}
40.5% {
    opacity: 0.52;
}
52.7% {
    opacity: 0.69;
}
60.2% {
    opacity: 0.6;
}
66.6% {
    opacity: 0.52;
}
70% {
    opacity: 0.63;
}
79.9% {
    opacity: 0.6;
}
84.2% {
    opacity: 0.75;
}
91% {
    opacity: 0.87;
}
}

@keyframes rota {
100% {
    transform: rotate(360deg);
}
}

  .modal-dialog {
  width: 100%;
  height: 100%;
  margin: 2%;
  padding: 0;

  }

  .modal-content {
  height: auto;
  min-height: 100%;
  border-radius: 0;
  width: 160%;
margin: 2%;
  }
</style>
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <div id="loadingData">

 </div>

    <div class="content">
        <div class="row">

            <div class="col-md-12">
              <div class="card" style="margin-top: -2%;">
                <div class="card-header">
                <div class="row">
                    <div class="col-md-1">
                      <a href="{{ url('/penugasan/penugasan') }}" title="Back">
                        <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                      </a>
                    </div>
                    <div class="col-md-2">
                      <a onclick="deleteTmp({{ Auth::user()->id }})">
                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalPendaftaran"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Linmas</button>
                      </a>
                    </div>
                    <div class="col-md-9">
                      <h4 class="card-title">Penugasan Baru </h4>
                      <hr>
                    </div>

                </div>
                </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/penugasan/penugasan', 'class' => 'form-horizontal', 'files' => true]) !!}


                      <div class="modal fade bd-example-modal-lg" id="modalPendaftaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">

                            <div class="modal-header" style="text-align:left;display:inline-flex !important;">
                              <h5 class="modal-title" id="exampleModalLabel">Data Linmas</h5>
                            </div>
                            <div class="modal-body">



                              <table id='tableRefresh' class="table table-striped table-bordered" cellspacing="0" width="100%">
                              </table>


                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            {!! Form::close() !!}
                          </div>
                        </div>
                      </div>

                        @include ('penugasan.penugasan.form', ['formMode' => 'create'])

                        <div class="form-group">
                            {!! Form::submit('Tambahkan Data', ['class' => 'btn btn-primary','style' => 'width: 100%;font-size: 17px;']) !!}
                        </div>

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript">
    function deleteTmp(idUser) {
      $.ajaxSetup({

          headers: {

              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

          }

      });


        $.ajax({

           type:'POST',

           url:'/penugasan/delete/linmas',

           data:{
             idUser:idUser
           },

           success:function(data){
             refreshTable();
           }

        });
    }
    function refreshTable(data){


      var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
      			if ( $('#loading').length ) {
      				$('#loading').remove();
      			}
      			$('#loadingData').append(loader);

      $('#tableRefresh').load('/penugasan/table', function(){
          $('#loading').remove();
      });
    }
    function submit(id){

      $.ajaxSetup({

          headers: {

              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

          }

      });

        var idLinmas = $("input[name=idLinmas"+id+"]").val();
        var idUser = $("input[name=idUser"+id+"]").val();
        $.ajax({

           type:'POST',

           url:'/penugasan/linmas',

           data:{
             idLinmas:idLinmas,
             idUser:idUser
           },

           success:function(data){
            refreshTable();
           }

        });



	}

</script>
@endsection
