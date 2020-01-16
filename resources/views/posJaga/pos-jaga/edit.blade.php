@extends('layouts.backend')
@section('title')
  Edit Pos Jaga #{{ $posjaga->nama }}
@endsection

@section('judul')
  Edit Pos Jaga #{{ $posjaga->nama }}
@endsection
@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                  <div class="row">
                      <div class="col-md-12">
                        <h4 class="card-title">Edit Pos Jaga #{{ $posjaga->nama }}</h4>
                        <hr>
                      </div>
                  </div>
                  
                  </div>
                    <div class="card-body">

                        {!! Form::model($posjaga, [
                            'method' => 'PATCH',
                            'url' => ['/posJaga/pos-jaga', $posjaga->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('posJaga.pos-jaga.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
