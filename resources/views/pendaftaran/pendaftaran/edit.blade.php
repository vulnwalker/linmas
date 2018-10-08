@extends('layouts.backend')
@section('title')
  Edit Pendaftaran 
@endsection

@section('judul')
  Edit Pendaftaran 
@endsection
@section('content')
    <div class="content">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <div class="row">
                      <div class="col-md-1">
                        <a href="{{ url('/pendaftaran/pendaftaran') }}" title="Back">
                          <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                        </a>
                      </div>
                      <div class="col-md-11">
                        <h4 class="card-title">Edit Pendaftaran</h4>
                        <p class="card-category"></p>
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

                        {!! Form::model($pendaftaran, [
                            'method' => 'PATCH',
                            'url' => ['/pendaftaran/pendaftaran', $pendaftaran->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('pendaftaran.pendaftaran.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
