@extends('layouts.backend')
@section('title')
  Ganti Password {{-- {{ $kelurahan->kelurahan }} --}}
@endsection

@section('judul')
  Ganti Password {{-- {{ $kelurahan->kelurahan }} --}}
@endsection
@section('content')
    <div class="content">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row" style="border-bottom: 1px solid #94949454">
                        <h4 class="card-title">Ganti Password</h4>
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

                        {!! Form::model($username, [
                            'method' => 'PATCH',
                            'url' => ['/gantiPass/gantiPass', $username->id],
                            'class' => 'form-horizontal',
                            'files' => true,
                            'autocomplete' => 'off'
                        ]) !!}

                        @include ('gantiPass.gantiPass.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
