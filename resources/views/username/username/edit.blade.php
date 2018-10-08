@extends('layouts.backend')
@section('title')
  Edit User {{-- {{ $kelurahan->kelurahan }} --}}
@endsection

@section('judul')
  Edit User {{-- {{ $kelurahan->kelurahan }} --}}
@endsection
@section('content')
    <div class="content">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row" style="border-bottom: 1px solid #94949454">
                        <h4 class="card-title">Edit User</h4>
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
                            'url' => ['/username/username', $username->id],
                            'class' => 'form-horizontal',
                            'files' => true,
                            'autocomplete' => 'off'
                        ]) !!}

                        @include ('username.username.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
