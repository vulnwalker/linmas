@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">PosJaga {{ $posjaga->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/posJaga/pos-jaga') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/posJaga/pos-jaga/' . $posjaga->id . '/edit') }}" title="Edit PosJaga"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['posJaga/posjaga', $posjaga->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete PosJaga',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $posjaga->id }}</td>
                                    </tr>
                                    <tr><th> Id Kecamatan </th><td> {{ $posjaga->id_kecamatan }} </td></tr><tr><th> Id Kelurahan </th><td> {{ $posjaga->id_kelurahan }} </td></tr><tr><th> Nama </th><td> {{ $posjaga->nama }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
