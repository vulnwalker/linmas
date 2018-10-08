@extends('layouts.backend')
@section('title')
 Buat Baru Sapras
@endsection

@section('judul')
  Buat Baru Sapras
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                 <div class="card-header">
                  <div class="row">
                      <div class="col-md-12">
                        <h4 class="card-title">Buat Baru Sapras</h4>
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

                        {!! Form::open(['url' => '/sapras/sapras', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('sapras.sapras.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
