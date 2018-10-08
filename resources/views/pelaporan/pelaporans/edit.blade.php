@extends('layouts.backend')
@section('title')
  Edit Pelaporan #{{ $pelaporan->judul }}
@endsection

@section('judul')
  Edit Pelaporan #{{ $pelaporan->judul }}
@endsection
@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Pelaporan #{{ $pelaporan->judul }}</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($pelaporan, [
                            'method' => 'PATCH',
                            'url' => ['/pelaporan/pelaporans', $pelaporan->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('pelaporan.pelaporans.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

