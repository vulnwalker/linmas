@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ContentPublikasi {{ $contentpublikasi->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/ContentPublikasi/content-publikasi') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/ContentPublikasi/content-publikasi/' . $contentpublikasi->id . '/edit') }}" title="Edit ContentPublikasi"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['ContentPublikasi/contentpublikasi', $contentpublikasi->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete ContentPublikasi',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $contentpublikasi->id }}</td>
                                    </tr>
                                    <tr><th> Id Publikasi </th><td> {{ $contentpublikasi->id_publikasi }} </td></tr><tr><th> Judul </th><td> {{ $contentpublikasi->judul }} </td></tr><tr><th> Deskripsi </th><td> {{ $contentpublikasi->deskripsi }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
