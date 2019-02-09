@extends('layouts.backend')
@section('title')
  Buat Baru Images
@endsection

@section('content')
    <div class="content">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row" style="border-bottom: 1px solid #94949454">
                        <h4 class="card-title">Buat Baru Images</h4>
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

                        {{-- {!! Form::open(['url' => '/images/images', 'class' => 'form-horizontal', 'files' => true, 'autocomplete' => 'off', 'action' => 'https://jquery-file-upload.appspot.com/', 'id' => 'fileupload', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!} --}}

                        {{-- <form action="/file-upload" class="dropzone"> --}}

                        @include ('images.images.form', ['formMode' => 'create'])
                        {{-- <button type="button" class="btn btn-primary" id="insWilayah" name="insWilayah">SIMPAN</button> --}}
                        <a href="{{ url('images/images') }}">
                          <button class="btn btn-danger" type="button">KEMBALI</button>
                        </a>
                        {{-- {!! Form::close() !!} --}}
                        {{-- </form> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
