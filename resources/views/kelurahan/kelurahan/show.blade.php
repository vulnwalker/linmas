@extends('layouts.backend')
@section('title')
  Kelurahan {{ $kelurahan->kelurahan }}
@endsection

@section('judul')
  Kelurahan {{ $kelurahan->kelurahan }}
@endsection

@section('content')
    <div class="content">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="col-md-12">
                      <h4 class="card-title">Kelurahan {{ $kelurahan->kelurahan }}</h4>
                      <div class="card-category">
                        <a href="{{ url('/kelurahan/kelurahan') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/kelurahan/kelurahan/' . $kelurahan->id . '/edit') }}" title="Edit  Kelurahan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['kelurahan/kelurahan', $kelurahan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Kecamatan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                      </div>
                    </div>
                  </div>
                  
                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $kelurahan->id }}</td>
                                    </tr>
                                    <tr><th> Id Kecamatan </th><td> {{ $kelurahan->id_kecamatan }} </td></tr><tr><th> Kelurahan </th><td> {{ $kelurahan->kelurahan }} </td></tr><tr><th> Alamat </th><td> {{ $kelurahan->alamat }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
