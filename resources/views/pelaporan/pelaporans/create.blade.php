@extends('layouts.backend')
@section('title')
  Buat Bartu Pelaporan
@endsection

@section('judul')
  Buat Bartu Pelaporan
@endsection
@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Buat Baru Pelaporan</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/pelaporan/pelaporans', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('pelaporan.pelaporans.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
