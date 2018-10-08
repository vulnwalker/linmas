@extends('layouts.backend')
@section('title')
  Tambah Pos Jaga 
@endsection

@section('judul')
  Tambah Pos Jaga
@endsection
@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <div class="row">
                      <div class="col-md-12">
                        <h4 class="card-title">Buat Baru Pos Jaga</h4>
                        <hr>
                      </div>
                  </div>
                  </div>
                    <div class="card-body">


                        {!! Form::open(['url' => '/posJaga/pos-jaga', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('posJaga.pos-jaga.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
