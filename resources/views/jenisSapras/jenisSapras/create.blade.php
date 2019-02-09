@extends('layouts.backend')
@section('title')
  Buat Baru Jenis Sapras
@endsection

@section('judul')
  Buat Baru Jenis Sapras
@endsection

@section('content')
    <div class="content">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row" style="border-bottom: 1px solid #94949454">
                        <h4 class="card-title">Buat Baru Jenis Sapras</h4>
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

                        {!! Form::open(['url' => '/jenisSapras/jenisSapras', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('jenisSapras.jenisSapras.form', ['formMode' => 'create'])
                        <button type="button" class="btn btn-primary" id="insJnsSapras" name="insJnsSapras">SIMPAN</button>
                        <a href="{{ url('jenisSapras/jenisSapras') }}">
                          <button class="btn btn-danger" type="button">BATAL</button>
                        </a>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
