@extends('layouts.backend')
@section('title')
  Data Kelurahan
@endsection

@section('judul')
    Data Kelurahan
@endsection


@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row">
                          <div class="col-md-9">
                            <h4 class="card-title">Data Kelurahan</h4>
                            <p class="card-category"></p>
                          </div>
                          <div class="col-md-3" style="text-align:right;">
                            <a href="{{ url('/kelurahan/kelurahan/create') }}" class="btn btn-success btn-lg" title="Add New Kecamatan" style="border-radius:  50%;">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                          </div>
                      </div>
                      </div>
                    <div class="card-body" style="padding: 0px 15px 10px !important;">

                        {{-- {!! Form::open(['method' => 'GET', 'url' => '/kelurahan/kelurahan', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!} --}}

                        <br/>
                        <div >
                          <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">#</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th>Alamat</th>
                                        <th style="text-align:center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($kecamatan as $item)
                                    <tr>
                                        <td style="text-align:center">{{ $loop->iteration or $item->id }}</td>
                                        <td >{{ $item->kecamatan }}</td>
                                        <td>{{ $item->kelurahan }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td style="text-align:center">
                                            <a href="{{ url('/kelurahan/kelurahan/' . $item->id) }}" title="View Kelurahan"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/kelurahan/kelurahan/' . $item->id . '/edit') }}" title="Edit Kelurahan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/kelurahan/kelurahan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Kelurahan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $kelurahan->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
