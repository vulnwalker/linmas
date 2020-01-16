@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Pembinaan {{ $pembinaan->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/pembinaan/pembinaan') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/pembinaan/pembinaan/' . $pembinaan->id . '/edit') }}" title="Edit Pembinaan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['pembinaan/pembinaan', $pembinaan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Pembinaan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pembinaan->id }}</td>
                                    </tr>
                                    <tr><th> Nama </th><td> {{ $pembinaan->nama }} </td></tr><tr><th> Tanggal Mulai </th><td> {{ $pembinaan->tanggal_mulai }} </td></tr><tr><th> Tanggal Selesai </th><td> {{ $pembinaan->tanggal_selesai }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
