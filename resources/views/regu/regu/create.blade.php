@extends('layouts.backend')
@section('title')
  Buat Baru Regu
@endsection

@section('judul')
  Buat Baru Regu
@endsection

@section('content')
    <div class="content">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row" style="border-bottom: 1px solid #94949454">
                        <h4 class="card-title">Buat Baru Regu</h4>
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

                        {!! Form::open(['url' => '/regu/regu', 'class' => 'form-horizontal', 'files' => true, 'autocomplete' => 'off']) !!}

                        @include ('regu.regu.form', ['formMode' => 'create'])
                        <button type="button" class="btn btn-primary" id="insRegu" name="insRegu">SIMPAN</button>
                        <a href="{{ url('regu/regu') }}">
                          <button class="btn btn-danger" type="button">BATAL</button>
                        </a>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
