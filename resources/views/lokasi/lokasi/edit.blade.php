@extends('layouts.backend')
@section('title')
  Edit  Lokasi {{ $lokasi->nama }}
@endsection

@section('judul')
  Edit  Lokasi {{ $lokasi->nama }}
@endsection
@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit lokasi#{{ $lokasi->nama }}</div>
                    <div class="card-body">
                        <a href="{{ url('/lokasi/lokasi') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($lokasi, [
                            'method' => 'PATCH',
                            'url' => ['/lokasi/lokasi', $lokasi->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('lokasi.lokasi.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
