@extends('layouts.backend')
@section('title')
  Edit Kategori Publikasi
@endsection

@section('judul')
  Edit Kategori Publikasi
@endsection
@section('content')
    <div class="content">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row" style="border-bottom: 1px solid #94949454">
                        <h4 class="card-title">Edit Kategori Publikasi</h4>
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

                        {!! Form::model($publikasi, [
                            'method' => 'PATCH',
                            'url' => ['/publikasi/publikasi', $publikasi->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('publikasi.publikasi.form', ['formMode' => 'edit'])
                        <button type="button" class="btn btn-primary" id="editPublikasi" name="editPublikasi">SIMPAN</button>
                        <a href="{{ url('publikasi/publikasi') }}">
                          <button class="btn btn-danger" type="button">BATAL</button>
                        </a>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
