@extends('layouts.backend')
@section('title')
  Buat Bartu Publikasi
@endsection

@section('judul')
  Buat Bartu Publikasi
@endsection
@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Buat Baru Publikasi</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/ContentPublikasi/content-publikasi', 'class' => 'form-horizontal', 'id' => 'simpanForm', 'files' => true]) !!}

                        @include ('ContentPublikasi.content-publikasi.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
