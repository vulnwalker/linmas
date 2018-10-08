@extends('layouts.backend')
@section('title')
  Data Pengesahan Anggota
@endsection

@section('judul')
    Data Pengesahan Anggota
@endsection

@section('content')

<style type="text/css">
  .modal-content {
    height: auto;
    min-height: 30%;
    border-radius: 0;
    width: 100%;
    margin: 2%;
    text-align: left;
}
.modal-footer {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 0%;
    border-top: 1px solid #e9ecef;
    padding-right: 1%;
}
</style>
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <div id="loadingData"></div>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header" style="margin-top: -1%;">
                    @php
                      if (Auth::user()->pengasahaan == 1 || Auth::user()->pengasahaan == 3) {
                          $idUser     = "pengesahan";
                          $hrefUser   = "";
                          $class      = "pengesahan";
                      }else{
                          $idUser     = "";
                          $hrefUser   = "href=#";
                          $class      = "";
                      }
                    @endphp
                    <div class="row">
                        <div class="col-md-6">
                          <h4 class="card-title">Data Pengesahan Anggota</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-6" style="text-align:right;">
                          {{-- <a class="btn btn-info btn-lg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="border-radius:  50%;">
                            <i class="fa fa-search  "></i>
                          </a> --}}
<!--                           <a href="{{ url('/pengesahan/pengesahan/create') }}" class="btn btn-success btn-sm" title="Add New Kecamatan">
                              {{-- <i class="fa fa-plus" aria-hidden="true"></i> --}}
                              Baru
                          </a>
                          <a onclick="editData()" class="btn btn-warning btn-sm" title="Edit New Kecamatan" style="color:white;">
                              {{-- <i class="fa fa-pencil" aria-hidden="true"></i> --}}
                              Edit
                          </a>
                          <a onclick="DeleteData()" class="btn btn-danger btn-sm" title="Edit New Kecamatan" style="color:white;">
                              {{-- <i class="fa fa-trash" aria-hidden="true"></i> --}}
                              Hapus
                          </a> -->
                          <a onclick="Sahkan()" id="btnsahkan" class="btn btn-success btn-sm" title="" style="color:white;">
                              <i class="fal fa-check"></i> Sahkan
                          </a>
                          <input type="hidden" name="hakAkses" id="hakAkses" value="{{ Auth::user()->pengasahaan }}">
                          <a onclick="BatalSahkan()" id="btnsahkan" class="btn btn-danger btn-sm" title="" style="color:white;">
                              <i class="fal fa-ban"></i> Batal Disahkan
                          </a>

                          <a onclick="CetakKartuAnggota()" id="btnCetak" class="btn btn-default btn-sm" title="" style="color:white;">
                              <i class="fal fa-print"></i> Cetak Card
                          </a>
                          <a onclick="CetakSK()" id="CetakSK" class="btn btn-default btn-sm" title="" style="color:white;">
                              <i class="fal fa-print"></i> Cetak SK
                          </a>

                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#btnSearch">
                            <i class="fal fa-search"></i> Cari
                          </button>
                       
                        </div>
                    </div>
                     <hr style="margin-top: 0%;margin-bottom: 0%;">
                    </div>
                    <div class="card-body"  style="padding: 15px 15px 10px !important;">
                     <div class="row">
                      <div class="col-md-4">
                        <div class="">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-5">
                                  <span>Kecamatan </span>
                                </div>
                                <div class="col-md-7">
                                  {!! Form::select('id_kecamatan', $Kecamatan, null, ('required' == 'required') ? ['id' => 'id_kecamatan','style' => 'width:100%;margin-bottom: 2%;','class' => 'form-control','onChange' => 'ChangeKecamatan()'] : ['class' => 'form-control']) !!}
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-5">
                                  <span>Kelurahan/ Desa </span>
                                </div>
                                <div class="col-md-7">
                                  {!! Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['id' => 'id_kelurahan','style' => 'width:100%;margin-bottom: 2%;','class' => 'form-control'] : ['class' => 'form-control']) !!}
                                </div>
                              </div>

                            </div>
                        </div>

                        <div class="row">
                          <div class="col-md-5">
                            <span>Data/ halaman </span>
                          </div>
                          <div class="col-md-4">
                            <input type="text" id="page" class="form-control" placeholder="25" value="{{ request('paging') }}" style="text-align: center;font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 6%;">
                          </div>
                          <div class="col-md-3">
                            <button onclick="searchData()" id="search" class="btn btn-info btn-sm" style="margin: 0%;margin-left:  1%;padding: 0%;margin-top: 0px;font-size: 11px;padding: 3px;float: right;">Tampilkan</button>
                          </div>
                          <div class="col-md-2">
                          </div>
                      </div>


<!--                       <div class="row" style="margin-bottom: 1%;">
                        <div class="col-md-5">
                        </div>
                        <div class="col-md-7">
                          <div style="margin-top: 2%;margin-left: -2px;margin-bottom: 3% width: 100%;">
                            <button onclick="searchData()" id="search" class="btn btn-info btn-sm" style="margin:  0%; margin-left:  1%;">Search</button>
                          </div>
                        </div>
                      </div> -->

                      </div>
                    </div>
                    </div>

                      {{-- <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">

                          {!! Form::open(['method' => 'GET', 'url' => '/pengesahan/pengesahan', 'class' => 'form-inline  float-left','style' => 'width: 100%;', 'role' => 'search'])  !!}
                          <div class="row" style="width: 100%;">
                            <div class="col-md-4">
                              Data Pengesahan Angota
                              <hr>
                              <div class="">
                                <div class="row">
                                  <div class="col-md-4">
                                    {!! Form::select('fieldData', [
                                       'nama' => 'Nama',
                                       'email' => 'Email',
                                       'hp' => 'No Hp',
                                       'no_doc' => 'No Doc',
                                       'no_ktp' => 'No KTP',
                                     ],request('fieldData'), ['class' => 'form-control','style' => 'font-size: 15px;margin-bottom: 2%;']) !!}
                                  </div>
                                  <div class="col-md-8">
                                    <input type="text" name="search" class="form-control" placeholder="Cari Data.." value="{{ request('search') }}" style="font-size: 15px; border: 1px solid #b5daff;width: 100%;">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                  {!! Form::select('jenis_pengesahan', $Jenispengesahan, null, ('required' == 'required') ? ['class' => 'form-control','style'=>'width: 100%;'] : ['class' => 'form-control']) !!}
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-12">
                                    {!! Form::select('status_pengesahan', [
                                       '' => '-- Status pengesahan --',
                                       '1' => 'Ya',
                                       '2' => 'Tidak',
                                     ],request('status_pengesahan'), ['class' => 'form-control','style' => 'font-size: 15px;margin-top: 1%; width:100%;']) !!}
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
                             <button id="search" name="search" class="btn btn-info btn-sm" style="margin:  0%; margin-left:  1%;">Search</button>
                              </div>
                            </div>
                          </div>



                          {!! Form::close() !!}
                        </div>
                      </div> --}}




                        <div>
                              <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;width: 1%;line-height: 40px;">NO</th>
                                        <th style="text-align: center;width: 1%;">
                                            <div class="form-check" style="padding-left: 0rem;">
                                              <label class="form-check-label" style="padding-left: 30px;">
                                                <input type="checkbox" id="select_all">
                                                <span class="form-check-sign"></span>
                                              </label>
                                            </div>
                                        </th>
                                        <th style="text-align:center;width: 9%;">No Anggota</th>
                                        <th>Nama / Jenis Kelamin / Tgl Lahir</th>
                                        <th>Alamat</th>
                                        <th>Jabatan</th>
                                        <th style="width: 10%;text-align: center;">Nomer SK</th>
                                        <th >Disahkan</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                @foreach($pengesahan as $item)
                                    <tr>
                                        <td style="text-align: center;line-height: 40px;">{{ $loop->iteration or $item->id }}</td>
                                        <td style="text-align: center;">
                                          <div class="form-check" style="padding-left: 0rem;">
                                            <label class="form-check-label" style="padding-left: 30px;">
                                              <input type="checkbox" class="checkbox" value="{{ $item->id }}">
                                              <span class="form-check-sign"></span>
                                            </label>
                                          </div>
                                      </td>
                                        <td style="text-align: center;">{{ $item->no_angota }}</td>
                                        <td>- {{ $item->nama }} <br>
                                            - {{ $item->jenis_kelamin }} <br>
                                            <?php
                                              $ExplodeTanggal = explode('/',$item->tgl_lahir);
                                              $TanggalLahir =  $ExplodeTanggal[1].'-'.$ExplodeTanggal[0].'-'.$ExplodeTanggal[2];
                                            ?>
                                            - {{ $item->tempat_lahir }}, {{ $TanggalLahir }}</td>
                                        <td>   {{ $item->alamat }}
                                          <br> Rt {{ $item->rt }} - Rw {{ $item->rw }}
                                          <br> {{ $item->alamat_kecamatan }}
                                          <br> {{ $item->alamat_kelurahan}}
                                        </td>
                                        <td style="width: 13%;">
                                         
                                         @if($item->jabatan)
                                            {{ $item->jabatan}}
                                         @else
                                            <p style='text-align: left;'>Tidak Mempunyai Jabatan</p>
                                         @endif
                                        </td>
                                        <td style="text-align: left;">
                                          @if($item->no_sk !="")
                                            {{$item->nomor}}
                                          @else
                                          <p style="color:red; text-align: center;">Belum Disahkan</p>  
                                          @endif

                                        </td>
                                        <td style="text-align: center;width: 6%;vertical-align:  middle;">
                                          @if($item->status_linmas == 1)
                                            <img src="{{ asset('assets/img/check.png') }}" style="width: 50%;">
                                          @else
                                            <img src="{{ asset('assets/img/close.png') }}" style="width: 50%;">
                                          @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination">
                            </div>
                            <div class="pagination-wrapper"> {!! $pengesahan->appends(['paging' => Request::get('paging')])->render() !!} </div>
                            {{-- <div class="pagination-wrapper"> {{ $pengesahan->appends(request()->except('page'))->links() }} </div> --}}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
                      <div class="modal fade bd-example-modal-lg" id="modalPendaftaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" style="text-align: -webkit-center;padding-left: 0px !important;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">

                            <div class="modal-header" style="text-align:left;display:inline-flex !important;">
                              <h5 class="modal-title" id="exampleModalLabel">Data Pengesahan Anggota</h5>
                            </div>
                            <div class="modal-body">

                              <div class="form-group{{ $errors->has('nomor_sk') ? 'has-error' : ''}}">
                                <div class="row">
                                  {!! Form::label('nomor_sk', 'No/ Tahun SK', ['class' => 'col-md-2 ']) !!}
                                  <div class="col-md-3">
                                    <div class="form-group">
                                {!! Form::text('nomor_sk', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required','readonly' => 'readonly'] : ['class' => 'form-control']) !!}
                                    </div>
                                  </div>
                                 <div class="col-md-2">
                                    <div class="form-group">
                               			{!! Form::text('tanggal_sk', null, ('required' == 'required') ? ['id' => 'tanggal_sk','class' => 'form-control', 'required' => 'required','readonly' => 'readonly'] : ['class' => 'form-control']) !!}
                                    </div>
                                  </div>
                                  <div class="col-md-5">
                                    <div class="form-group" style="margin-top: -10px;">
                                      {!! Form::button('Cari', ['class' => 'btn btn-info btn-sm','style'=>'padding: 3px;font-size: 11px;','data-toggle'=>'modal','data-target'=>'#Cari','onClick' => 'refreshTableSk()']) !!}
                                      {!! Form::button('Tambahkan', ['class' => 'btn btn-success btn-sm','style'=>'padding: 3px;font-size: 11px;',
                                      'data-toggle' => 'modal','data-target'=>'#TambahSk']) !!}
                                      {!! Form::button('Hapus', ['class' => 'btn btn-danger btn-sm','style'=>'padding: 3px;font-size: 11px;','data-toggle'=>'modal','onClick' => 'DeleteSk()']) !!}
                                      <input type="hidden" name="id_sk" id="id_sk" >
                                      </div>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group{{ $errors->has('no_angota') ? 'has-error' : ''}}">
                                <div class="row">
                                  {!! Form::label('no_angota', 'No. Angota', ['class' => 'col-md-2']) !!}
                                  <div class="col-md-5">
                                    <div class="form-group">
                                      {!! Form::text('no_angota', null, ('required' == 'required') ? ['id' => 'no_angota','readonly' => 'readonly','class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                      <input type="hidden" name="kode_angota" id="kode_angota" >
                                    </div>
                                  </div>
                                  {!! $errors->first('no_angota', '<p class="help-block">:message</p>') !!}
                                 </div>
                              </div>

                              <div class="form-group{{ $errors->has('id_kecamatan') ? 'has-error' : ''}}">
                               <div class="row">
                                 {!! Form::label('jabatan', ' Jabatan', ['class' => 'col-md-2']) !!}
                                 <div class="col-md-8">
                                   <div class="form-group">
                                   {!! Form::select('jabatan', $Jabatan, null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                   </div>
                                 </div>
                               </div>
                             </div>


                               

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                              <button type="submit" class="btn btn-primary"  onclick="TambahSahkan()">Simpan</button>
                            </div>
                            {!! Form::close() !!}
                          </div>
                        </div>
                      </div>


                    <div class="modal fade bd-example-modal-lg" id="TambahSk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" style="text-align: -webkit-center;padding-left: 0px !important;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">

                            <div class="modal-header" style="text-align:left;display:inline-flex !important;">
                              <h5 class="modal-title" id="exampleModalLabel">Tambah Nomer SK</h5>
                            </div>
                            <div class="modal-body">
                              <div class="form-group{{ $errors->has('no_sk') ? 'has-error' : ''}}">
                                <div class="row">
                                  {!! Form::label('no_sk', 'Nomor SK', ['class' => 'col-md-2 ']) !!}
                                  <div class="col-md-10">
                                    <div class="form-group">
                                {!! Form::text('no_sk', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group{{ $errors->has('tgl_sk') ? 'has-error' : ''}}">
                                <div class="row">
                                  {!! Form::label('tgl_sk', 'Tanggal', ['class' => 'col-md-2 ']) !!}
                                  <div class="col-md-5">
                                    <div class="form-group">
                                {!! Form::text('tgl_sk', null, ('required' == 'required') ? ['class' => 'form-control datepicker', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                    </div>
                                  </div>
                                </div>
                              </div>


                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                              <button type="submit" class="btn btn-primary" onclick="TambahSk()">Simpan</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="modal fade bd-example-modal-lg" id="Cari" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" style="text-align: -webkit-center;padding-left: 0px !important;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">

                            <div class="modal-header" style="text-align:left;display:inline-flex !important;">
                              <h5 class="modal-title" id="exampleModalLabel">Cari Nomer SK</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <table class="table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr style="font-size: 12px;">
                                        <th style="text-align: center;width: 5%;line-height: 25px;">#</th>
                                        <th style="text-align:center;">Nomor SK</th>
                                        <th style="text-align:center;">Tanggal SK</th>
                                        <th style="text-align:center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tableSk">
                                @foreach($sk as $item)
                                    <tr style="font-size: 12px;">
                                        <td style="text-align: center;width: 5%;line-height: 25px;">{{ $loop->iteration or $item->id }}</td>
                                        <td style="text-align: center;">{{ $item->nomor }}</td>
                                        <td style="text-align: center;">{{ $item->tanggal }}</td>
                                        <td style="text-align: center;width: 15%;">
                                          <button type="submit" class="btn btn-success btn-sm" onclick="TambahkanSk('{{ $item->nomor }}','{{ $item->id }}')" style="font-size: 11px;">Tambahkan</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                          </div>
                        </div>
                      </div>




                      <div class="modal fade bd-example-modal-lg" id="btnSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" style="text-align: -webkit-center;padding-left: 0px !important;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">

                            <div class="modal-header" style="text-align:left;display:inline-flex !important;">
                              <h5 class="modal-title" id="exampleModalLabel">Cari Data</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                          <div class="row" style="width: 104%;">
                            <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" id = "nama"  name="nama" class="form-control" placeholder="Cari Nama Linmas.." value="{{ request('nama') }}" style="font-size: 15px; border: 1px solid #b5daff;width: 100%;margin-bottom: 2%;">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    {!! Form::select('status_linmas', [
                                       '' => '-- Status Linmas --',
                                       '0' => 'Belum Disahkan',
                                       '1' => 'Disahkan',
                                     ],'', ['id'=>'status_linmas','class' => 'form-control','style' => 'font-size: 15px;margin-bottom: 3%; width:100%;']) !!}
                                   </div>
                                </div>

                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" id = "alamat"  name="alamat" class="form-control" placeholder="Alamat" value="{{ request('alamat') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 2%;">
                                  </div>
                                </div>



                                <div class="row">
                                  <div class="col-md-3">
                                    <input type="text" id = "rt"  name="rt" class="form-control" placeholder="RT" value="{{ request('rt') }}" style="font-size: 15px;border: 1px solid #b5daff; width: 100%; margin-bottom: 3%;">
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" id = "rw"  name="rw" class="form-control" placeholder="RW" value="{{ request('rw') }}" style="font-size: 15px;border: 1px solid #b5daff; width: 100%; margin-bottom: 3%;">
                                  </div>
                                </div>

                              </div>
                            </div>


                          <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-8">
                                    <input type="text" id = "no_ktp" name="no_ktp" class="form-control" placeholder="No KTP" value="{{ request('no_ktp') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 3%;">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-8">
                                    <input type="text" id = "hp" name="hp" class="form-control" placeholder="Nomer Hp" value="{{ request('hp') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;">
                                  </div>
                                </div>

                              </div>
                            </div>


                            <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-6">
                                    {!! Form::select('agama', ['' => '-- Agama --','Islam' => 'Islam','Kristen' => 'Kristen','Kartolik' => 'Kartolik', 'Budha' => 'Budha', 'Hindu' => 'Hindu', 'Konghucu' => 'Konghucu'], '', ['id'=>'agama','class' => 'form-control','style' => 'margin-bottom: 3%']) !!}
                                  </div>
                                

                                <div class="col-md-6">
                                   {!! Form::select('jenis_kelamin', ['' => '-- Jenis Kelamin --', 'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], '', ['id'=>'jenis_kelamin','class' => 'form-control']) !!}
                                  </div>
                                  </div>

                               <div class="row">
                                  <div class="col-md-6">
                                    {!! Form::select('pendidikan', ['' => '--Pendidikan--','SD' => 'SD','SMP' => 'SMP','SMA/SMK' => 'SMA/SMK', 'Diploma' => 'Diploma', 'Sarjana' => 'Sarjana', 'Pasca Sarjana' => 'Pasca Sarjana', 'Doktor' => 'Doktor'],'', ['id'=>'pendidikan','class' => 'form-control']) !!}
                                  </div>
                                

                                <div class="col-md-6">
                                   {!! Form::select('status', ['' => '--Status--','Janda' => 'Janda','Duda' => 'Duda','Kawin' => 'Kawin', 'Belum Kawin' => 'Belum Kawin'],'', ['id'=>'status','class' => 'form-control']) !!}
                                  </div>
                                </div>

                                </div>
                              </div>


                          </div>

                          <div class="row" style="margin-bottom: 1%;">
                            <div class="col-md-12">
                              <div style="margin-top: 1%;margin-left: 0px;margin-bottom: 3%;">
                                <button onclick="searchData()" id="search" class="btn btn-info btn-sm" style="margin:  0%;">Cari</button>
                              </div>
                            </div>
                          </div>

                            </div>
                          </div>
                        </div>
                      </div>

    <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
        pagePaginathing();
    });

  function BatalSahkan() {
    var id = [];
    var hakAkses  = $("#hakAkses").val();
    $('.checkbox:checked').each(function(i){
        id[i] = $(this).val();
    });

    if(hakAkses == 1 || hakAkses == 3){
      demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
    }else if(id.length === 0){ 
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
      }else{
      swal({
        title: 'Apa Anda Yakin?',
        text: 'Batal Sahkan Data User yang di Ceklis!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Oke',
        cancelButtonText: 'Batal',
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false
      }).then(function() {
        swal({
          title: 'Batal Sahkan!',
          text: 'Batal Sahkan Data Success.',
          type: 'success',
          confirmButtonClass: "btn btn-success",
          buttonsStyling: false
        }).catch(swal.noop);
          var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
                if ( $('#loading').length ) {
                  $('#loading').remove();
                }
                $('#loadingData').append(loader);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


          $.ajax({
            url: '/pengesahan/Batalkan',
            type:"GET",
            data: 'ids='+id,
            success:function(data) {
              $('#loading').remove();
              searchData();
            }
        });
      
      

      }, function(dismiss) {
        // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
        if (dismiss === 'cancel') {
          swal({
            title: 'Dibatalkan',
            text: '',
            type: 'error',
            confirmButtonClass: "btn btn-info",
            buttonsStyling: false
          }).catch(swal.noop);
        }
      }).catch(swal.noop);
  }
  }

 function TambahSahkan() {
    var id = [];
    $('.checkbox:checked').each(function(i){
      id[i] = $(this).val();
    });
    var id_sk = $('#id_sk').val();
    var jabatan = $('#jabatan').val();
    var no_angota = $('#no_angota').val();


    if(id_sk === ""  || no_angota ==""){ 
      swal("Maaf", "Lengkapi Data", "error");
    }else{
      swal({
        title: 'Apa Anda Yakin?',
        text: 'Sahkan Data User yang di Ceklis!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Oke',
        cancelButtonText: 'Batal',
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false
      }).then(function() {
        swal({
          title: 'Disahkan!',
          text: 'Disahkan Data Success.',
          type: 'success',
          confirmButtonClass: "btn btn-success",
          buttonsStyling: false
        }).catch(swal.noop);
          var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
                if ( $('#loading').length ) {
                  $('#loading').remove();
                }
                $('#loadingData').append(loader);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


          $.ajax({
            url: '/pengesahan/Create',
            type:"GET",
            data: 'ids='+id+'&jabatanLinmas='+jabatan+'&id_sk='+id_sk+'&no_angota='+no_angota,
            success:function(data) {
              $('#loading').remove();
               
               $('#modalPendaftaran').on('hidden.bs.modal', function (e) {
                $(this).find("input,textarea,select").val('').end();
               });
              $('#modalPendaftaran').modal('hide')
              searchData();
            }
        });
      
      

      }, function(dismiss) {
        // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
        if (dismiss === 'cancel') {
          swal({
            title: 'Dibatalkan',
            text: '',
            type: 'error',
            confirmButtonClass: "btn btn-info",
            buttonsStyling: false
          }).catch(swal.noop);
        }
      }).catch(swal.noop);
  }
  }

    function Sahkan() {
            var id = [];
            var hakAkses  = $("#hakAkses").val();
        $('.checkbox:checked').each(function(i){
          id[i] = $(this).val();
        });
    if(hakAkses == 1 || hakAkses == 3){
      demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
    }else if(id.length === 0){ 
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
        $('#modalPendaftaran').modal('hide');
    }else if(id.length > 1){
        swal("Maaf", "Pilih Satu Data", "error");
        $('#modalPendaftaran').modal('hide');
    }else{
       $.ajax({
            url: '/pengesahan/getPengesahan',
            type:"GET",
            dataType:"json",
            data: 'ids='+id,
            success:function(data) {
              $('#modalPendaftaran').modal('show');
              $('#no_angota').val(data.no_angota);
              $('#kode_angota').val(data.kode_angota);
              $('#tanggal_sk').val(data.tanggal_sk);
              $('#jabatan').val(data.jenis_linmas);
              $('#nomor_sk').val(data.no_sk);
              $('#id_sk').val(data.id_sk);
            }
        });
      }
    }

    function TambahkanSk(nomor,id) {
       $('#nomor_sk').val(nomor);
       $('#id_sk').val(id);
       var kode_angota = $('#kode_angota').val();
       $('#Cari').on('hidden.bs.modal', function (e) {
          $(this).find("input,textarea,select").val('').end();
         });

       $.ajax({
            url: '/pengesahan/getKode',
            type:"GET",
            dataType:"json",
            data: 'ids='+id+'&kode_angota='+kode_angota,
            success:function(data) {
            
              $('#no_angota').val(data.kode);
              $('#tanggal_sk').val(data.tanggal);
            }
        });

      $('#Cari').modal('hide');
    }

    function DeleteSk() {
      var nomor_sk = $('#nomor_sk').val();
      var id_sk = $('#id_sk').val();
      
      if (nomor_sk =="") {
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
      }else{
      swal({
        title: 'Apa Anda Yakin?',
        text: 'Jika data Dihapus Tidak Bisa diKembalikan!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus Sekarang!',
        cancelButtonText: 'Batalkan',
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false
      }).then(function() {
        swal({
          title: 'Terhapus!',
          text: 'Hapus Data Success.',
          type: 'success',
          confirmButtonClass: "btn btn-success",
          buttonsStyling: false
        }).catch(swal.noop);
          var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
                if ( $('#loading').length ) {
                  $('#loading').remove();
                }
                $('#loadingData').append(loader);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


          $.ajax({
            url: '/Delete/NoSk',
            type:"GET",
            data: 'ids='+id_sk,
            success:function(data) {
              $('#loading').remove();
              $('#nomor_sk').val('');
              $('#id_sk').val('');
              $('#tanggal_sk').val('');
              $('#no_angota').val('');
              $('#jabatan').val('');
              refreshTableSk();
            }
        });
      
      

      }, function(dismiss) {
        // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
        if (dismiss === 'cancel') {
          swal({
            title: 'Dibatalkan',
            text: '',
            type: 'error',
            confirmButtonClass: "btn btn-info",
            buttonsStyling: false
          }).catch(swal.noop);
        }
      }).catch(swal.noop);
  }
    }

    function TambahSk() {
      var tgl_sk = $("#tgl_sk").val();
      var no_sk = $("#no_sk").val();
      if( no_sk =="" || tgl_sk ==""){ //tell you if the array is empty
        swal("Maaf", "Lengkapi Data", "error");
      }else{
      var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
      if ( $('#loading').length ) {
        $('#loading').remove();
      }
      $('#loadingData').append(loader);
          $.ajax({
            url: '/tambah/no-sk',
            type:"GET",
            data: {
              no_sk: no_sk,
              tgl_sk: tgl_sk
            },
            success:function(data) {
              $('#loading').remove();
              $('#TambahSk').on('hidden.bs.modal', function (e) {
                $(this).find("input,textarea,select").val('').end();
               });
              $('#TambahSk').modal('hide');
              refreshTableSk();
            }
        });
      }

    }

    function ChangeJabatan() {
      if ($("#jabatan").val() == 2) {
        document.getElementById("danru").style.display = "";
      }else{
        document.getElementById("danru").style.display = "none";
      }      
    }

    function DeleteData(){
      var id = [];
        $('.checkbox:checked').each(function(i){
          id[i] = $(this).val();
        });

    if(id.length === 0){ 
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
      }else{
      swal({
        title: 'Apa Anda Yakin?',
        text: 'Jika data Dihapus Tidak Bisa diKembalikan!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus Sekarang!',
        cancelButtonText: 'Batalkan',
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false
      }).then(function() {
        swal({
          title: 'Terhapus!',
          text: 'Hapus Data Success.',
          type: 'success',
          confirmButtonClass: "btn btn-success",
          buttonsStyling: false
        }).catch(swal.noop);
          var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
                if ( $('#loading').length ) {
                  $('#loading').remove();
                }
                $('#loadingData').append(loader);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


          $.ajax({
            url: '/pengesahan/Delete',
            type:"GET",
            data: 'ids='+id,
            success:function(data) {
              $('#loading').remove();
              searchData();
            }
        });
      
      

      }, function(dismiss) {
        // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
        if (dismiss === 'cancel') {
          swal({
            title: 'Dibatalkan',
            text: '',
            type: 'error',
            confirmButtonClass: "btn btn-info",
            buttonsStyling: false
          }).catch(swal.noop);
        }
      }).catch(swal.noop);
  }
    }

    function editData() {
      var id = [];
      $('.checkbox:checked').each(function(i){
        id[i] = $(this).val();
      });
      if(id.length === 0){ //tell you if the array is empty
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
      }else if(id.length > 1 ){
        swal("Maaf", "Pilih data lebih Dari 1", "error");
      }else{
        location.href="/pengesahan/pengesahan/"+id+"/edit";
        // location.href="/posJaga/pos-jaga/create";
      }

    }

    function ChangeKecamatan() {

          var id_kecamatan = $('#id_kecamatan').val();
          if(id_kecamatan) {
              $.ajax({
                  url: '/getkelurahan/get/'+id_kecamatan,
                  type:"GET",
                  dataType:"json",
                  beforeSend: function(){
                      var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
                      if ( $('#loading').length ) {
                        $('#loading').remove();
                      }
                      $('#loadingData').append(loader);
                  },

                  success:function(data) {

                      $('select[name="id_kelurahan"]').empty();

                      $.each(data, function(key, value){

                          $('select[name="id_kelurahan"]').append('<option value="'+ value +'">' + key + '</option>');

                      });
                  },
                  complete: function(){
                      $('#loading').remove();
                  }
              });
          } else {
              $('select[name="id_kelurahan"]').empty();
          }


    }

    </script>


  <script type="text/javascript">
     function searchData() {
          var jmlData = $('#page').val();
          $.ajax({
          url: '/pengesahan/refreshTable',
            data: {
              id_kecamatan: $("#id_kecamatan").val(),
              id_kelurahan: $("#id_kelurahan").val(),
              nama: $("#nama").val(),
              status_linmas: $("#status_linmas").val(),
              no_ktp: $("#no_ktp").val(),
              hp: $("#hp").val(),
              rt: $("#rt").val(),
              rw: $("#rw").val(),
              agama: $("#agama").val(),
              jenis_kelamin: $("#jenis_kelamin").val(),
              status: $("#status").val(),
              pendidikan: $("#pendidikan").val(),
              alamat: $("#alamat").val()
            },
            type: "GET",
            dataType: "json",
            success:function(data){
              $('#tbody').empty();
              var noColumn = 1;
              $.each(data, function(index, element){

                 if(element.status_linmas == 1){
                  var img = "/assets/img/check.png";
                 }else{
                  var img = "/assets/img/close.png";
                 }

             

                if (element.no_sk != "") {
                  var no_sk = element.nomor;
                }else{
                  var no_sk = "<p style='color:red; text-align: center;'>Belum Disahkan</p>";
                }

                if (element.jabatan != "") {
                  var jabatan = element.jabatan;
                }else{
                  var jabatan = "<p style='text-align: left;'>Tidak Mempunyai Jabatan</p>";
                }

                var ExplodeTanggal = element.tgl_lahir.split('/');
                var TanggalLahir = ExplodeTanggal[1]+'-'+ExplodeTanggal[0]+'-'+ExplodeTanggal[2];

                $('#tbody').append("<tr><td style='text-align: center;width: 0%;line-height: 40px;'>"+ noColumn +"</td><td style='text-align: center;'><div class='form-check' style='padding-left: 0rem;'><label class='form-check-label' style='padding-left: 30px;'><input type='checkbox' class='checkbox' value='"+element.id+"'><span class='form-check-sign'></span></label></div></td><td style='text-align: center;'>"+element.no_angota+"</td><td>- "+element.nama+" <br>- "+element.jenis_kelamin+" <br>- "+element.tempat_lahir+", "+TanggalLahir+"</td><td>"+element.alamat+"<br> Rt "+element.rt+" - Rw "+element.rw+"<br> "+element.alamat_kecamatan+"<br> "+element.alamat_kelurahan+"</td><td style='width: 13%;'>"+jabatan+"</td><td style='text-align: left;'>"+no_sk+"</td><td style='text-align: center;width: 6%;vertical-align:  middle;'><img src="+img+" style='width: 65%;'></td>");
                  // start paginathing
                  function getPageList(totalPages, page, maxLength) {
                    if (maxLength < 5) throw "maxLength must be at least 5";

                    function range(start, end) {
                        return Array.from(Array(end - start + 1), (_, i) => i + start); 
                    }

                    var sideWidth = maxLength < 9 ? 1 : 2;
                    var leftWidth = (maxLength - sideWidth*2 - 1) >> 1;
                    var rightWidth = (maxLength - sideWidth*2 - 2) >> 1;
                    if (totalPages <= maxLength) {
                        // no breaks in list
                        return range(1, totalPages);
                    }
                    if (page <= maxLength - sideWidth - 1 - rightWidth) {
                        // no break on left of page
                        return range(1, maxLength-sideWidth-1)
                            .concat([0])
                            .concat(range(totalPages-sideWidth+1, totalPages));
                    }
                    if (page >= totalPages - sideWidth - 1 - rightWidth) {
                        // no break on right of page
                        return range(1, sideWidth)
                            .concat([0])
                            .concat(range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
                    }
                    // Breaks on both sides
                    return range(1, sideWidth)
                        .concat([0])
                        .concat(range(page - leftWidth, page + rightWidth)) 
                        .concat([0])
                        .concat(range(totalPages-sideWidth+1, totalPages));
                  }

                  $(function () {
                    // Number of items and limits the number of items per page
                    var numberOfItems = $("#tbody tr").length;
                    if (jmlData <= 0) {
                      var jmlFix = 25;
                      var limitPerPage = jmlFix;
                    }else{
                      var limitPerPage = jmlData;
                    }
                    // var limitPerPage = 25;
                    // Total pages rounded upwards
                    var totalPages = Math.ceil(numberOfItems / limitPerPage);
                    // Number of buttons at the top, not counting prev/next,
                    // but including the dotted buttons.
                    // Must be at least 5:
                    var paginationSize = 7; 
                    var currentPage;

                    function showPage(whichPage) {
                      if (whichPage < 1 || whichPage > totalPages) return false;
                      currentPage = whichPage;
                      $("#tbody tr").hide()
                          .slice((currentPage-1) * limitPerPage, 
                                  currentPage * limitPerPage).show();
                      // Replace the navigation items (not prev/next):            
                      $(".pagination li").slice(1, -1).remove();
                      getPageList(totalPages, currentPage, paginationSize).forEach( item => {
                          $("<li>").addClass("page-item")
                                   .addClass(item ? "current-page" : "disabled")
                                   .toggleClass("active", item === currentPage).append(
                              $("<a>").addClass("page-link").attr({
                                  href: "javascript:void(0)"}).text(item || "...")
                          ).insertBefore("#next-page");
                      });
                      // Disable prev/next when at first/last page:
                      $("#previous-page").toggleClass("disabled", currentPage === 1);
                      $("#next-page").toggleClass("disabled", currentPage === totalPages);
                      return true;
                    }

                    // Include the prev/next buttons:
                    $(".pagination").append(
                      $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
                          $("<a>").addClass("page-link").attr({
                              href: "javascript:void(0)"}).text("Prev")
                      ),
                      $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
                          $("<a>").addClass("page-link").attr({
                              href: "javascript:void(0)"}).text("Next")
                      )
                    );
                    // Show the page links
                    $("#tbody").show();
                    showPage(1);

                    // Use event delegation, as these items are recreated later    
                    $(document).on("click", ".pagination li.current-page:not(.active)", function () {
                        return showPage(+$(this).text());
                    });
                    $("#next-page").on("click", function () {
                        return showPage(currentPage+1);
                    });

                    $("#previous-page").on("click", function () {
                        return showPage(currentPage-1);
                    });
                  });
                  // end paginathing

                noColumn = noColumn + 1;
              });
            }
          });
    }
  </script>


    <script type="text/javascript">
     function refreshTableSk() {
          $.ajax({
          url: '/pengesahan/refreshTableSk',
            type: "GET",
            dataType: "json",
            success:function(data){
              $('#tableSk').empty();
              var noColumn = 1;
              $.each(data, function(index, element){

                $('#tableSk').append("<tr style='font-size: 12px;'><td style='text-align: center;width: 5%;line-height: 25px;'>"+ noColumn +"</td><td style='text-align: center;'>"+ element.nomor +"</td><td style='text-align: center;'>"+ element.tanggal +"</td><td style='text-align: center;width: 15%;'><button type='submit' class='btn btn-success btn-sm' onclick=TambahkanSk("+ element.nomor +","+element.id+") style='font-size: 11px;'>Tambahkan</button></td></tr>");

                noColumn = noColumn + 1;
              });
            }
          });
    }
  </script>

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
<script type="text/javascript">
  $(document).ready(function(){
    $('.pengesahan').on('click', function(){
      demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
    });
  });
</script>
@endsection
