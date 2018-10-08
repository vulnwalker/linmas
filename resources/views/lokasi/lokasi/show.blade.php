@extends('layouts.backend')

@section('content')
    <div class="content">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Lokasi {{ $lokasi->nama }}</div>
                    <div class="card-body">

                        <a href="{{ url('/lokasi/lokasi') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/lokasi/lokasi/' . $lokasi->id . '/edit') }}" title="Edit Poskamling"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['lokasi/lokasi', $lokasi->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Poskamling',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $lokasi->id }}</td>
                                    </tr>
                                    <tr><th> Id Kecamatan </th><td> {{ $lokasi->id_kecamatan }} </td></tr><tr><th> Id Kelurahan </th><td> {{ $lokasi->id_kelurahan }} </td></tr><tr><th> Nama </th><td> {{ $lokasi->nama }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
