@extends('layouts.backend')
@section('title')
  Data Aset
@endsection

@section('judul')
    Data Aset
@endsection


@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row">
                          <div class="col-md-6">
                            <h4 class="card-title">Data Aset</h4>
                            <p class="card-category"></p>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <button class="btn btn-danger pull-right">Hapus</button>
                              <a href="{{ url('aset/aset/create') }}">
                                <button class="btn btn-warning pull-right">Edit</button>
                              </a>
                              <a href="{{ url('/aset/aset/create') }}">
                                <button class="btn btn-success pull-right">Baru</button>
                              </a>
                            </div>
                          </div>
                          {{-- <div class="col-md-3" style="text-align:right;">
                            <a href="{{ url('/wilayah/wilayah/create') }}" class="btn btn-success btn-lg" title="Add New Wilayah" style="border-radius:  50%;">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                          </div> --}}
                      </div>
                      <div class="row">
                        <div class="col-md-1">
                          <label class="control-label">KECAMATAN</label>
                        </div>
                        <div class="col-md-2">
                          <select class="form-group" id="kecamatan" name="kecamatan">
                            <option value="">--- SELECT ---</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-1">
                          <label class="control-label">KELURAHAN</label>
                        </div>
                        <div class="col-md-2">
                          <select class="form-group" id="kelurahan" name="kelurahan">
                            <option value="">--- SELECT ---</option>
                          </select>
                        </div>
                      </div>
                      </div>
                    <div class="card-body" style="padding: 0px 15px 10px !important;">

                        {{-- {!! Form::open(['method' => 'GET', 'url' => '/kelurahan/kelurahan', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!} --}}

                        <br/>
                        <div >
                          <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                  <tr>
                                      <th style="text-align:center; width: 3%;">#</th>
                                      <th>
                                        <div class="form-check mt-3" style="padding: unset!important;">
                                          <div class="form-check" style="width: 1px; height: 36px; padding: unset!important;">
                                            <label class="form-check-label">
                                              {{-- <input class="form-check-input" type="checkbox" value="" id="select_all"> --}}
                                              <input type="checkbox" id="select_all">
                                              <span class="form-check-sign"></span>
                                            </label>
                                          </div>
                                        </div>
                                      </th>
                                      <th>NO ANGGOTA/NAMA</th>
                                      <th>JENIS ASET</th>
                                      <th>NAMA ASET</th>
                                      <th>MERK/TYPE/SPESIFIKASI</th>
                                      <th style="width: 1%; text-align: center;">JUMLAH</th>
                                      <th style="width: 1%; text-align: center;">TAHUN</th>
                                      <th>HARGA</th>
                                      <th style="width: 7%;">KONDISI</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td style="text-align: center;">1</td>
                                    <td style="width: 3%;">
                                      <div class="form-check mt-3" style="padding: unset!important;">
                                        <div class="form-check" style="width: 1px; height: 36px; padding: unset!important;">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="checkbox" value="">
                                            <span class="form-check-sign"></span>
                                          </label>
                                        </div>
                                      </div>
                                    </td>
                                    <td>0001/Ananda</td>
                                    <td>Jenis Aset</td>
                                    <td>Nama Aset</td>
                                    <td>Merk/Type/Spefisikasi</td>
                                    <td style="text-align: center;">001</td>
                                    <td style="text-align: center;">2018</td>
                                    <td>1.000.000.000</td>
                                    <td>Rusak Berat</td>
                                  </tr>
                                  <tr>
                                    <td style="text-align: center;">2</td>
                                    <td>
                                      <div class="form-check mt-3" style="padding: unset!important;">
                                        <div class="form-check" style="width: 1px; height: 36px; padding: unset!important;">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="checkbox" value="">
                                            <span class="form-check-sign"></span>
                                          </label>
                                        </div>
                                      </div>
                                    </td>
                                    <td>0002/Mahdar</td>
                                    <td>Jenis Aset</td>
                                    <td>Nama Aset</td>
                                    <td>Merk/Type/Spefisikasi</td>
                                    <td style="text-align: center;">001</td>
                                    <td style="text-align: center;">2018</td>
                                    <td>1.000.000.000</td>
                                    <td>Kondisi</td>
                                  </tr>
                                {{-- @foreach($kecamatan as $item)
                                    <tr>
                                        <td style="text-align:center">{{ $loop->iteration or $item->id }}</td>
                                        <td >{{ $item->kecamatan }}</td>
                                        <td>{{ $item->kelurahan }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td style="text-align:center">
                                            <a href="{{ url('/kelurahan/kelurahan/' . $item->id) }}" title="View Kelurahan"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/kelurahan/kelurahan/' . $item->id . '/edit') }}" title="Edit Kelurahan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/kelurahan/kelurahan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Kelurahan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach --}}
                                </tbody>
                            </table>
                            {{-- <div class="pagination-wrapper"> {!! $kelurahan->appends(['search' => Request::get('search')])->render() !!} </div> --}}
                        </div>

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
