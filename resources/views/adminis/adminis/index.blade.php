@extends('layouts.backend')
@section('title')
  Data Administrasi
@endsection

@section('judul')
    Data Administrasi
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row">
                          <div class="col-md-6">
                            <h4 class="card-title">Data Administrasi</h4>
                            <p class="card-category"></p>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <button class="btn btn-danger pull-right" id="hapus" name="hapus">Hapus</button>
                              <button class="btn btn-warning pull-right" id="edit" name="edit">Edit</button>
                              <a href="{{ url('adminis/adminis/create') }}">
                                <button class="btn btn-success pull-right">Baru</button>
                              </a>
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-1">
                          <label class="control-label">USERNAME</label>
                        </div>
                        <div class="col-md-2">
                          <input type="text" name="username" id="username" class="form-control">
                        </div>

                        <div class="col-md-1">
                          <label class="control-label">HAK AKSES</label>
                        </div>
                        <div class="col-md-2">
                          <input type="text" name="hak_akses" id="hak_akses" class="form-control">
                        </div>

                        <div class="col-md-1">
                          <label class="control-label">JENIS SAPRAS</label>
                        </div>
                        <div class="col-md-2">
                          <input type="text" name="jns_sapras" id="jns_sapras" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-1">
                          <label class="control-label">REGU ANGGOTA</label>
                        </div>
                        <div class="col-md-2">
                          <input type="text" name="regu_anggota" id="regu_anggota" class="form-control">
                        </div>

                        <div class="col-md-1">
                          <label class="control-label">KECAMATAN</label>
                        </div>
                        <div class="col-md-2">
                          {{-- <input type="text" name="kd_kec" id="kd_kec" class="form-control"> --}}
                          <select class="form-control" id="kd_kec" name="kd_kec">
                            <option value="">--- SELECT ---</option>
                            @foreach($slcKd_kec as $key)
                              <option value="{{ $key->kd_kec }}">{{ $key->nama }}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="col-md-1">
                          <label class="control-label">KELURAHAN</label>
                        </div>
                        <div class="col-md-2">
                          {{-- <input type="text" name="kd_kel" id="kd_kel" class="form-control"> --}}
                          <select class="form-control" id="kd_kel" name="kd_kel">
                            <option value="">--- SELECT ---</option>
                            {{-- @foreach($slcKd_kel as $key)
                              <option value="{{ $key->kd_kel_des }}">{{ $key->nama }}</option>
                            @endforeach --}}
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-1">
                          <label class="control-label">JUMLAH DATA</label>
                        </div>
                        <div class="col-md-2">
                          <input type="number" name="jmlData" id="jmlData" class="form-control" style="width: 65px;" value="25">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <button type="button" id="search" name="search" class="btn btn-primary">TAMPILKAN</button>
                        </div>
                      </div>
                      </div>
                    <div class="card-body" style="padding: 0px 15px 10px !important;">
                        <br/>
                        <div >
                          <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th style="text-align:center; width: 3%;">#</th>
                                <th>
                                  <div class="form-check mt-3" style="padding: unset!important;">
                                    <div class="form-check" style="width: 1px; height: 36px; padding: unset!important;">
                                      <label class="form-check-label">
                                        <input type="checkbox" id="select_all">
                                        <span class="form-check-sign"></span>
                                      </label>
                                    </div>
                                  </div>
                                </th>
                                <th>USERNAME</th>
                                <th>HAK AKSES</th>
                                <th>WILAYAH</th>
                                <th>JENIS SAPRAS</th>
                                <th>REGU ANGGOTA</th>
                              </tr>
                              </thead>
                              <tbody id="tbody">
                                {{-- @foreach($slcWilayah as $key=>$value)
                                <tr id="{{ $value->id }}">
                                  <td style="text-align: center;">{{ ++$key }}</td>
                                  <td style="width: 3%;">
                                    <div class="form-check mt-3" style="padding: unset!important;">
                                      <div class="form-check" style="width: 1px; height: 36px; padding: unset!important;">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="checkbox" value="{{ $value->id }}">
                                          <span class="form-check-sign"></span>
                                        </label>
                                      </div>
                                    </div>
                                  </td>
                                  @if($value->kd_kel_des != 00)
                                    <td style="padding-left: 15px;">{{ $value->kd_prov.".".$value->kd_kota_kab.".".$value->kd_kec.".".$value->kd_kel_des }}</td>
                                  @else
                                    <td>{{ $value->kd_prov.".".$value->kd_kota_kab.".".$value->kd_kec.".".$value->kd_kel_des }}</td>
                                  @endif
                                  <td>{{ $value->nama }}</td>
                                </tr>
                                @endforeach --}}
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('linkJS')

    <script type="text/javascript">
    $(document).ready(function(){
      jQuery(document).ready(function($){
        $('.table tbody').paginathing({
          perPage: 25,
          insertAfter: '.table',
          pageNumbers: true
        });
      });
      $('#hapus').on('click', function(){
        var id = [];
        $('.checkbox:checked').each(function(i){
          id[i] = $(this).val();
        });
        if(id.length === 0){ //tell you if the array is empty
          demo.showNotification('top','right','Pilih Salah Satu Data');
        }else{
          $.ajax({
           url: '/wilayah/delWilayah/',
           type: "GET",
           dataType: "json",
           data:{id:id},
           success:function(){
            demo.showNotification('top','right','Successfully!');
            window.setTimeout(function(){
              for(var i=0; i<id.length; i++){
               $('tr#'+id[i]+'').css('background-color', '#ccc');
               $('tr#'+id[i]+'').fadeOut('slow');
              }
            }, 1000);
           }
          });
        }
      });
      // end hapus
      $('#edit').on('click', function(){
        var id = [];
        $('.checkbox:checked').each(function(i){
          id[i] = $(this).val();
        });
        if(id.length === 0){ //tell you if the array is empty
          demo.showNotification('top','right','Pilih Salah Satu Data');
        }else if (id.length >= 2) {
          demo.showNotification('top','right','Pilih Salah Satu Data');
        }else{
          // demo.showNotification('top','right','Successfully');
          $.ajax({
           url: '/wilayah/upWilayah/',
           type: "GET",
           data:{id:id},
           success:function(){
            // demo.showNotification('top','right','Successfully!');
            window.location.href = "http://linmas.pilar.web.id/wilayah/wilayah/"+id+"/edit";
           }
          });
        }
      });
      // end edit
      $('#search').on('click', function(){
          var jmlData = $('#jmlData').val();
          $.ajax({
          url: '/wilayah/srcWilayah/',
            data: {
              kec_kel: $("#kec_kel").val()
            },
            type: "GET",
            dataType: "json",
            success:function(data){
              $('#tbody').empty();
              var noColumn = 1;
              $.each(data, function(index, element){
                if (element.kd_kel_des == '0') {
                  var style = '0px';
                }else{
                  var style = '15px';
                }
                $('#tbody').append("<tr id="+ element.id +"><td style='text-align: center;'>"+ noColumn +"</td><td style='width: 3%;'><div class='form-check mt-3' style='padding: unset!important'><div class='form-check' style='width: 1px; height: 36px; padding: unset!important;'><label class='form-check-label'><input type='checkbox' class='checkbox' value="+ element.id +"><span class='form-check-sign'></span></label></div></div></td><td style='padding-left: "+ style +"'>"+ element.kd_prov +"."+ element.kd_kota_kab +"."+ element.kd_kec +"."+ element.kd_kel_des +"</td><td>"+ element.nama +"</td></tr>");

                if (jmlData <= 0) {
                  var jmlFix = 25;
                  $('#jmlData').val(25);
                  if ($('.pagination-container')) {
                    $('.pagination-container').remove();
                  }
                  $('#tbody').paginathing({
                    perPage: jmlFix,  
                    insertAfter: '.table',
                    pageNumbers: true
                  });
                }else{
                  var jmlFix = $('#jmlData').val();
                  if ($('.pagination-container')) {
                    $('.pagination-container').remove();
                  }
                  $('#tbody').paginathing({
                    perPage: jmlFix,
                    insertAfter: '.table',
                    pageNumbers: true
                  });
                }
                noColumn = noColumn + 1;
              });
            }
          });
      });
      // end search table
      $('#kd_kec').on('change', function(){
        var stateID = $('#kd_kec').val();
        if (stateID) {
          $.ajax({
            url: '/adminis/srcKd_kelDes/'+stateID,
            type: "GET",
            dataType: "json",
            success:function(data){
              $('#kd_kel').empty();
              $.each(data, function(key, value){
                $('#kd_kel').append("<option value="+ value +">"+ key +"</option>");
              });
            }
          });
        }else{
          $('#kd_kel').empty();
          $('#kd_kel').append("<option value=''>--- SELECT ---</option>");
        }
      });
    });
</script>
@endsection
