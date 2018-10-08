@extends('layouts.backend')
@section('title')
  Data  Pendaftaran
@endsection

@section('judul')
    Data  Pendaftaran
@endsection

@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                          <h4 class="card-title">Data Pendaftaran</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-3" style="text-align:right;">
                          <a class="btn btn-info btn-lg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="border-radius:  50%;">
                            <i class="fa fa-search	"></i>
                          </a>
                          <a href="{{ url('/pendaftaran/pendaftaran/create') }}" class="btn btn-success btn-lg" title="Add New Kecamatan" style="border-radius:  50%;">
                              <i class="fa fa-plus" aria-hidden="true"></i>
                          </a>
                        </div>
                    </div>
                    </div>
                    <div class="card-body"  style="padding: 0px 15px 10px !important;">


                      <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">

                          {!! Form::open(['method' => 'GET', 'url' => '/pendaftaran/pendaftaran', 'class' => 'form-inline  float-left','style' => 'width: 100%;', 'role' => 'search'])  !!}
                          <div class="row" style="width: 100%;">
                            <div class="col-md-3">
                              Kelurahan / Kecamatan
                              <hr>
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    {!! Form::select('id_kecamatan', $Kecamatan, null, ('required' == 'required') ? ['id' => 'id_kecamatan','style' => 'width:100%;margin-bottom: 2%;','class' => 'form-control','onChange' => 'ChangeKecamatan()'] : ['class' => 'form-control']) !!}
                                  </div>
                                  <div class="col-md-12">
                                  {!! Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['id' => 'id_kelurahan','style' => 'width:100%;margin-bottom: 2%;','class' => 'form-control'] : ['class' => 'form-control']) !!}
                                  </div>
                              </div>

                              <div class="row">
                                <div class="col-md-7">
                                  <span>Data/ halaman: </span>
                                </div>
                                <div class="col-md-5">
                                  <input type="text" name="paging" class="form-control" placeholder="25" value="{{ request('paging') }}" style="text-align: center;font-size: 15px; border: 1px solid #b5daff;width: 100%;">
                                </div>
                            </div>

                            </div>
                          </div>
                            <div class="col-md-4">
                              Data Pendaftaran
                              <hr>
                              <div class="">
                                <div class="row">
                                  <div class="col-md-4">
                                    {!! Form::select('fieldData', [
                                       'nama' => 'Nama',
                                       'email' => 'Email',
                                       'hp' => 'No Hp',
                                       'no_ktp' => 'No KTP',
                                     ],request('fieldData'), ['class' => 'form-control','style' => 'font-size: 15px;margin-bottom: 2%;']) !!}
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" name="search" class="form-control" placeholder="Cari Data.." value="{{ request('search') }}" style="font-size: 15px; border: 1px solid #b5daff;width: 100%;">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">

                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-12">
                                    {!! Form::select('status', [
                                       '' => '-- Status --',
                                       '1' => 'Ya',
                                       '2' => 'Tidak',
                                     ],request('status'), ['class' => 'form-control','style' => 'font-size: 15px;margin-top: 1%; width:100%;']) !!}
                                   </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-12">
                                    {!! Form::select('jenis_kelamin', [
                                       '' => '-- Jenis Kelamin --',
                                       'Laki-Laki' => 'Laki-laki',
                                       'Perempuan' => 'Perempuan',
                                     ],request('jenis_kelamin'), ['class' => 'form-control','style' => 'font-size: 15px;margin-top: 1%; width:100%;']) !!}
                                   </div>
                                </div>

                              </div>
                            </div>

                            <div class="col-md-5">
                              Alamat
                              <hr>
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Jalan" value="{{ request('alamat') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 1%;">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <input type="text" name="alamat_kecamatan" class="form-control" placeholder="Kecamatan" value="{{ request('alamat_kecamatan') }}" style="font-size: 15px;border: 1px solid #b5daff; width: 100%; margin-bottom: 1%;">
                                  </div>
                                  <div class="col-md-6">
                                    <input type="text" name="alamat_kelurahan" class="form-control" placeholder="Kelurahan" value="{{ request('alamat_kelurahan') }}" style="font-size: 15px;border: 1px solid #b5daff; width: 100%;">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <input type="text" name="rt" class="form-control" placeholder="RT" value="{{ request('rt') }}" style="font-size: 15px;border: 1px solid #b5daff; width: 100%;">
                                  </div>
                                  <div class="col-md-6">
                                    <input type="text" name="rw" class="form-control" placeholder="RW" value="{{ request('rw') }}" style="font-size: 15px;border: 1px solid #b5daff; width: 100%;">
                                  </div>
                                </div>

                              </div>
                            </div>

                          </div>

                          <div class="row" style="margin-bottom: 1%;">
                            <div class="col-md-12">
                              <div style="margin-top: 2%;margin-left: -2px;margin-bottom: 3%;">
                                <button class="btn btn-info" style="margin:  0%; margin-left:  1%;">Search</button>
                              </div>
                            </div>
                          </div>



                          {!! Form::close() !!}
                        </div>
                      </div>




                        <div>
                              <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;width: 0%;">#</th>
                                        <th>Kecamatan / Kelurahan</th>
                                        <th>Nama / Email</th>
                                        <th>Alamat</th>
                                        <th style="text-align: center;width: 12%;">Jenis Kelamin</th>
                                        <th style="width: 6%;text-align: center;">Status</th>
                                        <th style="text-align:center;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pendaftarans as $item)
                                    <tr>
                                        <td style="text-align: center;">{{ $loop->iteration or $item->id }}</td>
                                        <td>- {{ $item->kecamatan }} <br>  - {{ $item->kelurahan }}</td>
                                        <td>- {{ $item->nama }} <br> - {{ $item->email }}</td>
                                        <td>{{ $item->alamat }} <br> {{ $item->alamat_kecamatan }}
                                        <br> {{ $item->alamat_kelurahan}} <br> Rt {{ $item->rt }} - Rw {{ $item->rw }}</td>
                                        <td style="text-align: center;">{{ $item->jenis_kelamin }}</td>
                                        <td style="text-align: center;">@if($item->status == 1)
                                                  Ya
                                            @elseif($item->status == 2)
                                                  Tidak
                                            @else

                                            @endif</td>
                                        <td style="text-align:center;">
                                            <a href="{{ url('/pendaftaran/pendaftaran/' . $item->id) }}" title="View Linma"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/pendaftaran/pendaftaran/' . $item->id . '/edit') }}" title="Edit Linma"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/pendaftaran/pendaftaran', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Linma',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                            <br>
                                            <br>
                                            @if($item->status == 1)
                                                  <a  ><button class="btn btn-sm" disabled>Sudah Aktif</button></a>
                                            @elseif($item->status == 2)
                                                  <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalPendaftaran{{$item->id}}">Aktifkan</button>
                                            @else

                                            @endif

                                            <div class="modal fade bd-example-modal-lg" id="modalPendaftaran{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                                              <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">

                                                  <div class="modal-header" style="text-align:left;display:inline-flex !important;">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{$item->nama}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    {!! Form::model($item, [
                                                        'method' => 'PATCH',
                                                        'url' => ['/pendaftaran/pendaftaran/linmas', $item->id],
                                                        'class' => 'form-horizontal',
                                                        'files' => true
                                                    ]) !!}
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT')}}
                                                    <div class="row">
                                                      {!! Form::label('no_doc', 'Nomor Document', ['class' => 'col-md-3 col-form-label']) !!}
                                                      <div class="col-md-9">
                                                        <div class="form-group">
                                                       {!! Form::text('no_doc', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                                        </div>
                                                      </div>
                                                      {!! $errors->first('no_doc', '<p class="help-block">:message</p>') !!}
                                                     </div>

                                                    <div class="row">
                                                      {!! Form::label('jenis_linmas', 'Jenis Linmas', ['class' => 'col-md-3 col-form-label']) !!}
                                                      <div class="col-md-9">
                                                        <div class="form-group">
                                                         {!! Form::select('jenis_linmas', $JenisLinmas, null, ('required' == 'required') ? ['class' => 'form-control','style' => 'padding: 1%;', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                                        </div>
                                                      </div>
                                                      {!! $errors->first('jenis_linmas', '<p class="help-block">:message</p>') !!}
                                                     </div>

                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                  </div>
                                                  {!! Form::close() !!}
                                                </div>
                                              </div>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $pendaftarans->appends(['paging' => Request::get('paging')])->render() !!} </div>
                            {{-- <div class="pagination-wrapper"> {{ $pendaftarans->appends(request()->except('page'))->links() }} </div> --}}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

    function ChangeKecamatan() {

          var id_kecamatan = $('#id_kecamatan').val();
          if(id_kecamatan) {
              $.ajax({
                  url: '/states/get/'+id_kecamatan,
                  type:"GET",
                  dataType:"json",
                  beforeSend: function(){
                      $('#loader').css("visibility", "visible");
                  },

                  success:function(data) {

                      $('select[name="id_kelurahan"]').empty();

                      $.each(data, function(key, value){

                          $('select[name="id_kelurahan"]').append('<option value="'+ key +'">' + value + '</option>');

                      });
                  },
                  complete: function(){
                      $('#loader').css("visibility", "hidden");
                  }
              });
          } else {
              $('select[name="id_kelurahan"]').empty();
          }


    }

    </script>
@endsection
