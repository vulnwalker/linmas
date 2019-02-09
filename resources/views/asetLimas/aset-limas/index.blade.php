@extends('layouts.backend')

@section('content')
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                          <h4 class="card-title">Data Aset Linmas</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-3" style="text-align:right;">
                          <a href="{{ url('/asetLimas/aset-limas/create') }}" class="btn btn-success btn-lg" title="Add New Kecamatan" style="border-radius:  50%;">
                              <i class="fa fa-plus" aria-hidden="true"></i>
                          </a>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">

                      {!! Form::open(['method' => 'GET', 'url' => '/asetLimas/aset-limas', 'class' => 'form-inline  float-left', 'role' => 'search'])  !!}
                      <div class="input-group no-border">
                                      <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
                                      <div class="input-group-append">
                                        <div class="input-group-text">
                                          <i class="nc-icon nc-zoom-split"></i>
                                        </div>
                                      </div>
                      </div>

                      {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div >
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Id Kecamatan</th><th>Id Kelurahan</th><th>Nama</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($asetlimas as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->id_kecamatan }}</td><td>{{ $item->id_kelurahan }}</td><td>{{ $item->nama }}</td>
                                        <td>
                                            <a href="{{ url('/asetLimas/aset-limas/' . $item->id) }}" title="View AsetLima"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/asetLimas/aset-limas/' . $item->id . '/edit') }}" title="Edit AsetLima"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/asetLimas/aset-limas', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete AsetLima',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $asetlimas->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
