@extends('layouts.backend')
@section('title')
  Buat Baru Kategori Laporan
@endsection

@section('judul')
  Buat Baru Kategori Laporan
@endsection

@section('content')
    <div class="content">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row" style="border-bottom: 1px solid #94949454">
                        <h4 class="card-title">Buat Baru Kategori Laporan</h4>
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

                        {!! Form::open(['url' => '/katLaporan/katLaporan', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('katLaporan.katLaporan.form', ['formMode' => 'create'])
                        <button type="button" class="btn btn-primary" id="insKatLaporan" name="insKatLaporan">SIMPAN</button>
                        <a href="{{ url('katLaporan/katLaporan') }}">
                          <button class="btn btn-danger" type="button">BATAL</button>
                        </a>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
