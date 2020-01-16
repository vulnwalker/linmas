@extends('layouts.backend')
@section('title')
   Linmas {{ $pendaftaran->nama }}
@endsection

@section('judul')
   Linmas {{ $pendaftaran->nama }}
@endsection
@section('content')
    <div class="content">
        <div class="row">


            <div class="col-md-12">
                <div class="card" style="border-radius: 1rem; margin-top:-2%;">
                    <div class="card-header" style="padding: 0%;">
                      <div class="col-md-12">
                        <h4 class="card-title"> Linmas  {{ $pendaftaran->nama }}</h4>
                        <div class="card-category">
                          <a href="{{ url('/pendaftaran/pendaftaran') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/pendaftaran/pendaftaran/' . $pendaftaran->id . '/edit') }}" title="Edit JenisLinma"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                          {!! Form::open([
                              'method'=>'DELETE',
                              'url' => ['pendaftaran/pendaftaran', $pendaftaran->id],
                              'style' => 'display:inline'
                          ]) !!}
                              {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                      'type' => 'submit',
                                      'class' => 'btn btn-danger btn-sm',
                                      'title' => 'Delete JenisLinma',
                                      'onclick'=>'return confirm("Confirm delete?")'
                              ))!!}
                          {!! Form::close() !!}
                        </div>
                      </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="card card-user" style="border-radius: 1rem;">
              <div class="image">
                <img src="https://cdn.sindonews.net/dyn/620/content/2014/09/18/31/902952/2-250-hansip-di-tangerang-terancam-nganggur-HHa.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="{{url('assets/img/pendaftaran/',$pendaftaran->foto)}}" alt="...">
                    <h5 class="title">{{ $pendaftaran->nama }}</h5>
                  </a>
                  <p class="description">
                    {{ $pendaftaran->email }}
                  </p>
                </div>
                  <div class="row">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-3">
                      No Doc
                    </div>
                    <div class="col-lg-7">
                      : {{ $pendaftaran->no_doc }}
                    </div>
                    <div class="col-lg-1">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-3">
                      No KTP
                    </div>
                    <div class="col-lg-7">
                       : {{ $pendaftaran->no_ktp }}
                    </div>
                    <div class="col-lg-1">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-3">
                      No HP
                    </div>
                    <div class="col-lg-7">
                       : {{ $pendaftaran->hp }}
                    </div>
                    <div class="col-lg-1">
                    </div>
                  </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-6 ml-auto">
                      <small> <b>Kecamatan</b>
                        <br>
                        <small>{{ $pendaftaran->kecamatan }}</small>
                      </small>
                    </div>
                    <div class="col-lg-6  ml-auto mr-auto">
                      <small><b>Kelurahan</b>
                        <br>
                        <small>{{ $pendaftaran->kelurahan }}</small>
                      </small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-md-8">
            <div class="card" style="border-radius: 1rem;">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body" style="height: 410px;">
                <form>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nomor KTP</label>
                        <input type="text" class="form-control" disabled="" value="{{ $pendaftaran->no_ktp }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" disabled="" value="{{ $pendaftaran->nama }}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" disabled="" value="{{ $pendaftaran->jenis_kelamin }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Alamat Jalan</label>
                        <input type="text" class="form-control" disabled="" value="{{ $pendaftaran->alamat }}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Alamat Kecamatan</label>
                        <input type="text" class="form-control" disabled="" value="{{ $pendaftaran->alamat_kecamatan }}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Alamat Kelurahan</label>
                        <input type="text" class="form-control" disabled="" value="{{ $pendaftaran->alamat_kelurahan }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>RT</label>
                        <input type="text" class="form-control" disabled="" value="{{ $pendaftaran->rt }}">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>RW</label>
                        <input type="text" class="form-control" disabled="" value="{{ $pendaftaran->rw }}">
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>Nomor HandPhone</label>
                        <input type="text" class="form-control" disabled="" value="{{ $pendaftaran->hp }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>

    </div>
@endsection
