@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Penugasan {{ $penugasan->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/penugasans/penugasans') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/penugasans/penugasans/' . $penugasan->id . '/edit') }}" title="Edit Penugasan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['penugasans/penugasans', $penugasan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Penugasan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $penugasan->id }}</td>
                                    </tr>
                                    <tr><th> Id Kecamatan </th><td> {{ $penugasan->id_kecamatan }} </td></tr><tr><th> Id Kelurahan </th><td> {{ $penugasan->id_kelurahan }} </td></tr><tr><th> Nama </th><td> {{ $penugasan->nama }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
