@extends('layouts.backend')
@section('title')
  Edit Sapras
@endsection

@section('judul')
  Edit Sapras
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <div class="row">
                      <div class="col-md-12">
                        <h4 class="card-title">Edit Sapras</h4>
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

                        {!! Form::model($sapra, [
                            'method' => 'PATCH',
                            'url' => ['/sapras/sapras', $sapra->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('sapras.sapras.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
