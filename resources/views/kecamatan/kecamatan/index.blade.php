@extends('layouts.backend')

@section('title')
  Data Kecamatan
@endsection

@section('judul')
    Data Kecamatan
@endsection



@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header ">
                    <div class="row">
                        <div class="col-md-9">
                          <h4 class="card-title">Data Kecamatan</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-3" style="text-align:right;">
                          <a class="btn btn-info btn-lg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="border-radius:  50%;">
                            <i class="fa fa-search	"></i>
                          </a>
                          <a href="{{ url('/kecamatan/kecamatan/create') }}" class="btn btn-success btn-lg" title="Add New Kecamatan" style="border-radius:  50%;">
                              <i class="fa fa-plus" aria-hidden="true"></i>
                          </a>
                        </div>
                    </div>

                  </div>
                    <div class="card-body" style="padding: 0px 15px 10px !important;">


                      <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">

                          {!! Form::open(['method' => 'GET', 'url' => '/kecamatan/kecamatan', 'class' => 'form-inline  float-left','style' => 'width: 100%;', 'role' => 'search'])  !!}
                          <div class="row" style="width: 100%;">


                            <div class="col-md-4">
                              Kecamatan
                              <hr>
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="{{ request('kecamatan') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 1%;">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ request('alamat') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 1%;">
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
                              Contact
                              <hr>
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="telp" class="form-control" placeholder="Telp" value="{{ request('telp') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 1%;">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="fax" class="form-control" placeholder="Fax" value="{{ request('fax') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 1%;">
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-4">
                              Data Camat
                              <hr>
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="nama_camat" class="form-control" placeholder="Nama Camat" value="{{ request('nama_camat') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 1%;">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="nip" class="form-control" placeholder="Nip" value="{{ request('nip') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 1%;">
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


                        <div >
                            <table  class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">#</th>
                                        <th>Kecamatan</th>
                                        <th>Alamat</th>
                                        <th>Telp/ Fax</th>
                                        <th>Camat/ Nip</th>

                                        <th style="text-align:center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($kecamatan as $item)
                                    <tr>
                                        <td style="text-align:center">{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->kecamatan }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>- {{ $item->telp }} <br> - {{ $item->fax }}</td>
                                        <td>- {{ $item->nama_camat }}<br>- {{ $item->nip_camat }}</td>
                                        <td style="text-align:center">
                                            <a href="{{ url('/kecamatan/kecamatan/' . $item->id) }}" title="View Kecamatan"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/kecamatan/kecamatan/' . $item->id . '/edit') }}" title="Edit Kecamatan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/kecamatan/kecamatan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Kecamatan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $kecamatan->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
