@extends('layouts.backend')
@section('title')
  Edit  Aset Linmas {{ $asetlima->nama }}
@endsection

@section('judul')
  Edit  Aset Linmas {{ $asetlima->nama }}
@endsection
@section('content')
    <div class="content">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit AsetLima #{{ $asetlima->nama }}</div>
                    <div class="card-body">
                        <a href="{{ url('/asetLimas/aset-limas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($asetlima, [
                            'method' => 'PATCH',
                            'url' => ['/asetLimas/aset-limas', $asetlima->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('asetLimas.aset-limas.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
