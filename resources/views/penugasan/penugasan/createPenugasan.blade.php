@extends('layouts.backend')
@section('title')
  Penugasan Baru
@endsection

@section('judul')
  Penugasan Baru
@endsection
@section('content')

 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <div id="loadingData">

 </div>

    <div class="content">
        <div class="row">

            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                      <h4 class="card-title">Penugasan Baru</h4>
                      <hr>
                    </div>
                </div>
                </div>
                    <div class="card-body" style="padding-bottom: 0%;">

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

                              <div class="form-group{{ $errors->has('no_sk') ? 'has-error' : ''}}">
                                <div class="row">
                                  {!! Form::label('no_sk', 'Nama Linmas', ['class' => 'col-md-3 ']) !!}
                                  <div class="col-md-5">
                                    <div class="form-group">
                                {!! Form::text('no_angota', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                  {!! $errors->first('rt', '<p class="help-block">:message</p>') !!}
                                    </div>
                                  </div>
                                  <div class="col-md-1">
                                    <div class="form-group" style="margin-top: -10px;">
                                      {!! Form::submit('Cari', ['class' => 'btn btn-info btn-sm','style'=>'padding: 3px;font-size: 11px;','data-toggle'=>'modal','data-target'=>'#modalPendaftaran']) !!}
                                      </div>
                                  </div>
                                </div>
                              </div>


                               <div class="form-group{{ $errors->has('nama') ? 'has-error' : ''}}">
                                 <div class="row">
                                   {!! Form::label('nama', 'Nama Lokasi', ['class' => 'col-md-3 ']) !!}
                                   <div class="col-md-7">
                                     <div class="form-group">
                                   {!! Form::text('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                   {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                                     </div>
                                   </div>
                                 </div>
                               </div>

                               <div class="form-group{{ $errors->has('nama') ? 'has-error' : ''}}">
                                 <div class="row">
                                   {!! Form::label('nama', 'Alamat', ['class' => 'col-md-3 ']) !!}
                                   <div class="col-md-7">
                                     <div class="form-group">
                                   {!! Form::textarea('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                   {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                                     </div>
                                   </div>
                                 </div>
                               </div>

                               <div class="form-group{{ $errors->has('id_kecamatan') ? 'has-error' : ''}}">
                                 <div class="row">
                                   {!! Form::label('id_kecamatan', ' Kecamatan', ['class' => 'col-md-3 ']) !!}
                                   <div class="col-md-7">
                                     <div class="form-group">
                                     {!! Form::select('id_kecamatan', $Kecamatan, null, ('required' == 'required') ? ['class' => 'form-control','onChange' => 'ChangeKecamatan()', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                     </div>
                                   </div>
                                   {{-- {!! Form::textarea('id_kecamatan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                                   {!! $errors->first('id_kecamatan', '<p class="help-block">:message</p>') !!}
                                 </div>
                               </div>
                               <div class="form-group{{ $errors->has('id_kelurahan') ? 'has-error' : ''}}">
                                 <div class="row">
                                   {!! Form::label('id_kelurahan', ' Kelurahan /Desa', ['class' => 'col-md-3 ']) !!}
                                   <div class="col-md-7">
                                     <div class="form-group">
                                   {!! Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                     </div>
                                   </div>
                                   {{-- {!! Form::textarea('id_kelurahan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                                   {!! $errors->first('id_kelurahan', '<p class="help-block">:message</p>') !!}
                                 </div>
                               </div>

                               <div class="form-group{{ $errors->has('nama') ? 'has-error' : ''}}">
                                 <div class="row">
                                   {!! Form::label('nama', 'Keterangan', ['class' => 'col-md-3 ']) !!}
                                   <div class="col-md-7">
                                     <div class="form-group">
                                   {!! Form::textarea('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                   {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                                     </div>
                                   </div>
                                 </div>
                               </div>



                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary"  data-dismiss="modal">Save changes</button>
                            </div>
                            {!! Form::close() !!}
                          </div>
                        </div>
                      </div>

                        @include ('penugasan.penugasan.formPenugasan', ['formMode' => 'create'])

                        <div class="row">
                            <div class="col-md-10">

                            </div>
                            <div class="col-md-2" style="text-align:right;padding-right: 2%;">
                              {{-- <a class="btn btn-info btn-lg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="border-radius:  50%;">
                                <i class="fa fa-search	"></i>
                              </a> --}}
                              <a class="btn btn-success btn-sm" title="Add New Kecamatan" data-toggle="modal" data-target="#modalPendaftaran" style="color:white;">
                                  Baru
                              </a>
                              <a onclick="DeleteData()" class="btn btn-danger btn-sm" title="Edit New Kecamatan" style="color:white;">
                                  Hapus
                              </a>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                  <th style="text-align: center;width: 3% !important;line-height: 40px;">#</th>
                                  <th style="text-align: center;width: 1%;">
                                      <div class="form-check" style="padding-left: 0rem;">
                                        <label class="form-check-label" style="padding-left: 30px;">
                                          <input type="checkbox" id="select_all">
                                          <span class="form-check-sign"></span>
                                        </label>
                                      </div>
                                  </th>
                                  <th style="width: 20%;">Nama Linmas</th>
                                  <th style="width: 14%;">Nama Lokasi</th>
                                  <th style="width: 13%;">Alamat</th>
                                  <th style="width: 13%;">Kec/ Kel/ Desa</th>
                                  <th>Keterangan</th>
                              </tr>
                          </thead>
                              <tbody>
                                  <tr>
                                      <td style="text-align: center;width: 0%;line-height: 40px;">1</td>
                                      <td style="text-align: center;">
                                        <div class="form-check" style="padding-left: 0rem;">
                                          <label class="form-check-label" style="padding-left: 30px;">
                                            <input type="checkbox" class="checkbox" value="1">
                                            <span class="form-check-sign"></span>
                                          </label>
                                        </div>
                                    </td>
                                    <td>Ananda Mahdar</td>
                                    <td>TPU 1 RT 02 RW 11</td>
                                    <td>Jln Pasir Koja<br>RT 01, RW 02<br>Kec. Cimahi Tengah<br>Kel/Desa. Cigugur</td>
                                    <td>- Cimahi Selatan <br>- Utama</td>
                                    <td>-</td>
                                  </tr>
                                  <tr>
                                      <td style="text-align: center;width: 0%;line-height: 40px;">2</td>
                                      <td style="text-align: center;">
                                        <div class="form-check" style="padding-left: 0rem;">
                                          <label class="form-check-label" style="padding-left: 30px;">
                                            <input type="checkbox" class="checkbox" value="1">
                                            <span class="form-check-sign"></span>
                                          </label>
                                        </div>
                                    </td>
                                    <td>Ananda Mahdar</td>
                                    <td>TPU 1 RT 02 RW 11</td>
                                    <td>Jln Pasir Koja<br>RT 01, RW 02<br>Kec. Cimahi Tengah<br>Kel/Desa. Cigugur</td>
                                    <td>- Cimahi Selatan <br>- Utama</td>
                                    <td>-</td>
                                  </tr>

                              </tbody>
                          </table>

                          <div class="form-group">
                            <hr>
                            <div class="row">
                              <div class="col-md-2" style="margin-left: 13%;">

                                <a href="{{ url('/penugasan/penugasan') }}" title="Back" class= "btn btn-primary" style= "width: 100%;font-size: 17px;">
                                  {{-- {!! Form::submit('Simpan', ['class' => 'btn btn-primary','style' => 'width: 100%;font-size: 17px;']) !!} --}}
                                  Simpan
                                </a>


                              </div>
                              <div class="col-md-2">
                                <a href="{{ url('/penugasan/penugasan') }}" title="Back" class= "btn btn-danger" style= "width: 100%;font-size: 17px;">
                                  Batal
                                </a>
                              </div>
                            </div>
                          </div>

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
      var select_all = document.getElementById("select_all"); //select all checkbox
        var checkboxes = document.getElementsByClassName("checkbox"); //checkbox items

        //select all checkboxes
        select_all.addEventListener("change", function(e){
          for (i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = select_all.checked;
          }
        });


        for (var i = 0; i < checkboxes.length; i++) {
          checkboxes[i].addEventListener('change', function(e){ //".checkbox" change
            //uncheck "select all", if one of the listed checkbox item is unchecked
            if(this.checked == false){
                select_all.checked = false;
            }
            //check "select all" if all checkbox items are checked
            if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
                select_all.checked = true;
            }
          });
        }
    </script>

@endsection
