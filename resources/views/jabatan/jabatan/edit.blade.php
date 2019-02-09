@extends('layouts.backend')
@section('title')
  Edit jabatan
@endsection

@section('judul')
  Edit jabatan
@endsection
@section('content')
    <div class="content">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row" style="border-bottom: 1px solid #94949454">
                        <h4 class="card-title">Edit jabatan</h4>
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

                        {!! Form::model($jabatan, [
                            'method' => 'PATCH',
                            'url' => ['/jabatan/jabatan', $jabatan->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('jabatan.jabatan.editForm', ['formMode' => 'edit'])
                        <button type="button" class="btn btn-primary" id="editJabatan" name="editJabatan">SIMPAN</button>
                        <a href="{{ url('jabatan/jabatan') }}">
                          <button class="btn btn-danger" type="button">BATAL</button>
                        </a>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
