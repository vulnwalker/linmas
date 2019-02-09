@extends('layouts.backend')
@section('title')
  Edit Publikasi #{{ $contentpublikasi->judul }}
@endsection

@section('judul')
  Edit Publikasi #{{ $contentpublikasi->judul }}
@endsection
@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Publikasi #{{ $contentpublikasi->judul }}</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($contentpublikasi, [
                            'method' => 'PATCH',
                            'url' => ['/ContentPublikasi/content-publikasi', $contentpublikasi->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('ContentPublikasi.content-publikasi.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
