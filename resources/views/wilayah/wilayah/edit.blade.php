@extends('layouts.backend')
@section('title')
  Edit Wilayah
@endsection

@section('judul')
  Edit Wilayah
@endsection
@section('content')
    <div class="content">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row" style="border-bottom: 1px solid #94949454">
                        <h4 class="card-title">Edit Wilayah</h4>
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

                        {!! Form::model($wilayah, [
                            'method' => 'PATCH',
                            'url' => ['/wilayah/wilayah', $wilayah->id],
                            'class' => 'form-horizontal',
                            'files' => true,
                            'autocomplete' => 'off'
                        ]) !!}

                        @include ('wilayah.wilayah.form', ['formMode' => 'edit'])
                        <button type="button" class="btn btn-primary" id="editWilayah" name="editWilayah">SIMPAN</button>
                        <a href="{{ url('wilayah/wilayah') }}">
                          <button class="btn btn-danger" type="button">BATAL</button>
                        </a>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
