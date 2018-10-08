@extends('layouts.backend')
@section('title')
  Buat Baru Anggota Limas
@endsection

@section('judul')
  Buat Baru Anggota Limas
@endsection

@section('content')
    <div class="content">
        <div class="row">


            <div class="col-md-12">
                <div class="card" >
                  <div class="card-header">
                  <div class="row">
                      <div class="col-md-12">
                        <h4 class="card-title">Buat Baru Anggota Linmas</h4>
                        <hr>
                      </div>
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

                        {!! Form::open(['url' => '/linmas/linmas', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('linmas.linmas.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
