@extends('layouts.backend')
@section('title')
  Buat Baru Jenis Aset
@endsection

@section('judul')
  Buat Baru Jenis Aset
@endsection

@section('content')
    <div class="content">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row">
                          {{-- <div class="col-md-1">
                            <a href="{{ url('/kelurahan/kelurahan') }}" title="Back">
                              <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                            </a>
                          </div> --}}
                          {{-- <div class="col-md-11">
                            <h4 class="card-title">Buat Baru Kelurahan</h4>
                            <p class="card-category"></p>
                          </div> --}}
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

                        {!! Form::open(['url' => '/jenisAset/jenisAset', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('jenisAset.jenisAset.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
