@extends('layouts.backend')
@section('title')
  Jenis Linmas {{ $jenislinma->uraian }}
@endsection

@section('judul')
  Jenis Linmas {{ $jenislinma->uraian }}
@endsection
@section('content')
    <div class="content">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="col-md-12">
                      <h4 class="card-title">Jenis Linmas  {{ $jenislinma->uraian }}</h4>
                      <div class="card-category">
                        <a href="{{ url('/jenisLinmas/jenis-linmas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/jenisLinmas/jenis-linmas/' . $jenislinma->id . '/edit') }}" title="Edit JenisLinma"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['jenisLinmas/jenis-linmas', $jenislinma->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete JenisLinma',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                      </div>
                    </div>
                  </div>
                    <div class="card-body">


                        <br/>
                        <br/>

                        <div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $jenislinma->id }}</td>
                                    </tr>
                                    <tr><th> Uraian </th><td> {{ $jenislinma->uraian }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
