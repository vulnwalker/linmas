<table id='tableRefresh' class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
      <tr>
          <th style="text-align: center;width: 0%;">#</th>
          <th>Kecamatan / Kelurahan</th>
          <th>Nama / Email</th>
          <th>Alamat</th>
          <th>Jenis</th>
          <th style="text-align:center;">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach($linmas as $item)
      <tr id="linmasTable{{ $item->id}}">
          <td style="text-align: center;">{{ $loop->iteration or $item->id }}</td>
          <td>- {{ $item->kecamatan }} <br>  - {{ $item->kelurahan }}</td>
          <td>- {{ $item->nama }} <br> - {{ $item->email }}</td>
          <td>{{ $item->alamat }} <br> {{ $item->alamat_kecamatan }}
          <br> {{ $item->alamat_kelurahan}}</td>
          <td>{{ $item->uraian }}</td>
          <td style="text-align:center;">

              <input type="hidden" class="form-control" id="idLinmas{{ $item->id }}" name="idLinmas{{ $item->id }}"  value="{{ $item->id}}">
              <input type="hidden" class="form-control" id="idUser{{ $item->id }}" name="idUser{{ $item->id }}"  value="{{ Auth::user()->id }}">
                  {!! Form::button('<i class="fa fa-plus" aria-hidden="true"></i> Tambahkan Linmas', array(
                          'type' => 'submit',
                          'class' => 'btn btn-info btn-sm',
                          'id' => 'btn-submit',
                          'title' => 'Tambahkan Linmas',
                          'onclick'=>'submit('.$item->id.')'
                  )) !!}

          </td>
      </tr>
  @endforeach
  </tbody>
</table>
