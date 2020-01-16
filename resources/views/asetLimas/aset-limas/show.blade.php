@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">AsetLima {{ $asetlima->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/asetLimas/aset-limas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/asetLimas/aset-limas/' . $asetlima->id . '/edit') }}" title="Edit AsetLima"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['asetLimas/asetlimas', $asetlima->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete AsetLima',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $asetlima->id }}</td>
                                    </tr>
                                    <tr><th> Id Kecamatan </th><td> {{ $asetlima->id_kecamatan }} </td></tr><tr><th> Id Kelurahan </th><td> {{ $asetlima->id_kelurahan }} </td></tr><tr><th> Nama </th><td> {{ $asetlima->nama }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
