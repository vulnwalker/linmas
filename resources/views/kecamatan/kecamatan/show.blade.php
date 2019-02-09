@extends('layouts.backend')

@section('title')
  Kecamatan {{ $kecamatan->kecamatan }}
@endsection

@section('judul')
  Kecamatan {{ $kecamatan->kecamatan }}
@endsection


@section('content')
    <div class="content">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="col-md-12">
                        <h4 class="card-title">Kecamatan {{ $kecamatan->kecamatan }}</h4>
                        <div class="card-category">
                          <a href="{{ url('/kecamatan/kecamatan') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="{{ url('/kecamatan/kecamatan/' . $kecamatan->id . '/edit') }}" title="Edit Kecamatan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                          {!! Form::open([
                              'method'=>'DELETE',
                              'url' => ['kecamatan/kecamatan', $kecamatan->id],
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

                        <div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $kecamatan->id }}</td>
                                    </tr>
                                    <tr><th> Kecamatan </th><td> {{ $kecamatan->kecamatan }} </td></tr><tr><th> Alamat </th><td> {{ $kecamatan->alamat }} </td></tr><tr><th> Telp </th><td> {{ $kecamatan->telp }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
