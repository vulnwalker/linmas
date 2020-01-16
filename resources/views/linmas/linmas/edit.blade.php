@extends('layouts.backend')
@section('title')
  Edit  Linmas {{ $linma->nama }}
@endsection

@section('judul')
  Edit  Linmas {{ $linma->nama }}
@endsection
@section('content')
    <div class="content">
        <div class="row">
          
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <div class="row">
                      <div class="col-md-12">
                        <h4 class="card-title">Edit Anggota Linmas #{{ $linma->nama }}</h4>
                        <p class="card-category"></p>
                      </div>
                  </div>
                  <hr>
                  </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($linma, [
                            'method' => 'PATCH',
                            'url' => ['/linmas/linmas', $linma->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('linmas.linmas.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
