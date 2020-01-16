@extends('layouts.backend')
@section('title')
  Edit Jenis Sapras
@endsection

@section('judul')
  Edit Jenis Sapras
@endsection
@section('content')
    <div class="content">
        <div class="row">
            {{-- @include('admin.sidebar') --}}

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row" style="border-bottom: 1px solid #94949454">
                        <h4 class="card-title">Edit Jenis Sapras</h4>
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

                        {!! Form::model($jenisSapras, [
                            'method' => 'PATCH',
                            'url' => ['/jenisSapras/jenisSapras', $jenisSapras->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('jenisSapras.jenisSapras.form', ['formMode' => 'edit'])
                        <button type="button" class="btn btn-primary" id="editJnsSapras" name="editJnsSapras">SIMPAN</button>
                        <a href="{{ url('jenisSapras/jenisSapras') }}">
                          <button class="btn btn-danger" type="button">BATAL</button>
                        </a>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
