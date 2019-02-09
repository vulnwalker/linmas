@extends('layouts.backend')

@section('title')
  Buat Baru Kecamatan
@endsection

@section('judul')
  Buat Baru Kecamatan
@endsection


@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row">
                          {{-- <div class="col-md-1">
                            <a href="{{ url('/kecamatan/kecamatan') }}" title="Back">
                              <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                            </a>
                          </div> --}}
                          <div class="col-md-11">
                            <h4 class="card-title">Buat Baru Kecamatan</h4>
                            <p class="card-category"></p>
<hr>
                          </div>
                          <hr>
                      </div>
                    </div>
                    <div class="card-body" >
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/kecamatan/kecamatan', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('kecamatan.kecamatan.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
