@extends('layouts.backend')
@section('title')
  Data Pos Jaga
@endsection

@section('judul')
  Data Pos Jaga
@endsection
@section('content')
<style type="text/css">
  .modal-content {
    height: auto;
    min-height: 30%;
    border-radius: 0;
    width: 100%;
    margin: 2%;
    text-align: left;
}
.modal-footer {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 0%;
    border-top: 1px solid #e9ecef;
    padding-right: 1%;
}

.modal-body {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem;
    padding-bottom: 0%;
}
</style>
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <div id="loadingData">

 </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header" style="margin-top: -1%;">
                    @php
                      if (Auth::user()->posKamling == 1 || Auth::user()->posKamling == 3) {
                          $idUser     = "posKamling";
                          $hrefUser   = "";
                          $class      = "posKamling";
                      }else{
                          $idUser     = "";
                          $hrefUser   = "href=/posJaga/pos-jaga/create";
                          $class      = "";
                      }
                      @endphp
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Data Pos Jaga</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-6" style="text-align:right;">
                          {{-- <a class="btn btn-info btn-lg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="border-radius:  50%;">
                            <i class="fa fa-search	"></i>
                          </a> --}}
                          <a {{ $hrefUser }} class="btn btn-success btn-sm {{ $class }}" title="Add New Kecamatan" >
                               <i class="fal fa-plus"></i> Baru
                          </a>
                          <input type="hidden" name="hakAkses" id="hakAkses" value="{{ Auth::user()->posKamling }}">
                          <a onclick="editData()" class="btn btn-warning btn-sm" title="Edit New Kecamatan" style="color:white;">
                              <i class="fal fa-pencil-alt"></i> Edit
                          </a>
                          <a onclick="DeleteData()" class="btn btn-danger btn-sm" title="Edit New Kecamatan" style="color:white;">
                              {{-- <i class="fa fa-trash" aria-hidden="true"></i> --}}
                              <i class="fal fa-trash-alt"></i> Hapus
                          </a>

                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#btnSearch">
                           <i class="fal fa-search"></i>  Cari
                          </button>

                          <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#btnPrint">
                            <i class="fal fa-print"></i> Print
                          </button>
                        </div>
                    </div>
                    <hr style="margin-top: 0%;margin-bottom: 0%;">
                    </div>
                    <div class="card-body" style="padding: 15px 15px 10px !important;">
<!--               {!! Form::open(['method' => 'POST', 'url' => '/posJaga/Search', 'class' => 'form-inline  float-left','style' => 'width: 100%;', 'role' => 'search'])  !!} -->
                      <div class="row">
                       <div class="col-md-4">
                         <div class="">
                           <div class="row">
                             <div class="col-md-12">
                               <div class="row">
                                 <div class="col-md-5">
                                   <span>Kecamatan </span>
                                 </div>
                                 <div class="col-md-7">
                                   {!! Form::select('id_kecamatan', $Kecamatan, null, ('required' == 'required') ? ['id' => 'id_kecamatan','style' => 'width:100%;margin-bottom: 2%;','class' => 'form-control','onChange' => 'ChangeKecamatan()'] : ['class' => 'form-control']) !!}
                                 </div>
                               </div>
                             </div>
                             <div class="col-md-12">
                               <div class="row">
                                 <div class="col-md-5">
                                   <span>Kelurahan/ Desa </span>
                                 </div>
                                 <div class="col-md-7">
                                   {!! Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['id' => 'id_kelurahan','style' => 'width:100%;margin-bottom: 2%;','class' => 'form-control'] : ['class' => 'form-control']) !!}
                                 </div>
                               </div>

                             </div>
                         </div>

                        <div class="row">
                          <div class="col-md-5">
                            <span>Data/ halaman </span>
                          </div>
                          <div class="col-md-2">
                            <input type="text" id="page" class="form-control" placeholder="25" value="{{ request('paging') }}" style="text-align: center;font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 6%;padding-right: 5px !important;">
                          </div>
                          <div class="col-md-5">
                            <button onclick="searchData()" id="search" class="btn btn-info btn-sm" style="margin: 0%;margin-left:  1%;padding: 0%;margin-top: 0px;font-size: 11px;padding: 3px;float: right;width: 100%;">Tampilkan</button>
                          </div>
                          <div class="col-md-2">
                          </div>
                      </div>


<!--                        <div class="row" style="margin-bottom: 1%;">
                         <div class="col-md-5">
                         </div>
                         <div class="col-md-7">
                           <div style="margin-top: 2%;margin-left: -2px;margin-bottom: 3% width: 100%;">
                             <button onclick="searchData()" id="search" name="search" class="btn btn-info btn-sm" style="margin:  0%; margin-left:  1%;">Tampilkan</button>
                           </div>
                         </div>
                       </div> -->

                       </div>
                     </div>
                     </div>
                    <!--  {!! Form::close() !!} -->

                        {{-- {!! Form::open(['method' => 'GET', 'url' => '/posJaga/pos-jaga', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!} --}}


                        <div >
                             <table  class="table table-striped table-bordered" cellspacing="0" width="100%">
                                  <thead>
                                    <tr>
                                        <th style="text-align: center;width: 0%;line-height: 40px;">#</th>
                                        <th style="text-align: center;width: 1%;">
                                            <div class="form-check" style="padding-left: 0rem;">
                                              <label class="form-check-label" style="padding-left: 30px;">
                                                <input type="checkbox" id="select_all">
                                                <span class="form-check-sign"></span>
                                              </label>
                                            </div>
                                        </th>
                                        <th>Nama Pos Jaga</th>
                                        <th>Alamat / Kecamatan / Kelurahan</th>
                                        <th style="width: 14%;">Konstruksi/ Luas/ Kondisi</th>
                                        <th style="width: 13%;">Kepemilikan/ Luas Tanah</th>
                                        <th style="text-align: center;">Aktifitas</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                  @foreach($posjaga as $item)
                                    <tr >
                                        <td style="text-align: center;width: 0%;line-height: 40px;">{{ $loop->iteration or $item->id }}</td>
                                        <td style="text-align: center;">
                                          <div class="form-check" style="padding-left: 0rem;">
                                            <label class="form-check-label" style="padding-left: 30px;">
                                              <input type="checkbox" class="checkbox" value="{{$item->id}}">
                                              <span class="form-check-sign"></span>
                                            </label>
                                          </div>
                                      </td>
                                      <td>{{ $item->nama }}</td>
                                      <td>{{$item->alamat}}<br>Kec. {{$item->alamat_kec}}<br>Kel/Des. {{$item->alamat_kel}}</td>
                                      <td>
                                        - @if($item->konstruksi == 1)
                                          Permanen
                                          @elseif($item->konstruksi == 2)
                                          Semi Permanen
                                          @elseif($item->konstruksi == 3)
                                          Darurat
                                          @endif 
                                        <br>- {{$item->luas}} 
                                        <br>
                                        - @if($item->kondisi == 1)
                                          Baik
                                          @elseif($item->kondisi == 2)
                                          Kurang Baik
                                          @elseif($item->kondisi == 3)
                                          Rusak Berat
                                          @endif 
                                        </td>
                                      <td style="width: 10%;">
                                        - {{ $item->kepemilikan }}
                                        <br>
                                        - {{ $item->luas_tanah }}
                                      </td>
                                      <td style="text-align: center;width: 1%;">
                                          @if($item->aktifitas == 1)
                                          Aktif
                                          @elseif($item->aktifitas == 2)
                                          Tidak Aktif
                                          @endif 
                                      </td>
                                      <td>{{$item->keterangan}}</td>
                                    </tr>
                                  @endforeach
                              </tbody>
                            </table>
                        </div>
                            <div class="pagination">
                            </div>

                            <div class="modal fade bd-example-modal-lg" id="btnPrint" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" style="text-align: -webkit-center;padding-left: 0px !important;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">

                            <div class="modal-header" style="text-align:left;display:inline-flex !important;">
                              <h5 class="modal-title" id="exampleModalLabel">  <i class="fal fa-print"></i> Print Data / Export Excel</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                          <div class="row" style="width: 104%;">
                            <div class="col-md-3">
                              <input type="text" id = "nama_pos2"  name="nama_pos2" class="form-control" placeholder="Cari Nama Pos Jaga.." value="{{ request('nama_pos') }}" style="font-size: 15px; border: 1px solid #b5daff;width: 100%;margin-bottom: 2%;">
                            </div>
                            <div class="col-md-3">
                              {!! Form::select('kontruksi', [
                                 '0' => ' -- Kontruksi -- ',
                                 '1' => 'Permanen',
                                 '2' => 'Semi Permanen',
                                 '3' => 'Darurat',
                               ],' ', ['id'=>'kontruksi2','class' => 'form-control','style' => 'font-size: 15px;margin-bottom: 3%; width:100%;']) !!}
                            </div>
                            <div class="col-md-3">
                              {!! Form::select('kondisi', [
                                 '0' => ' -- Kondisi -- ',
                                 '1' => 'Baik',
                                 '2' => 'Kurang Baik',
                                 '3' => 'Rusak Berat',
                               ],' ', ['id'=>'kondisi2','class' => 'form-control','style' => 'font-size: 15px;margin-bottom: 3%; width:100%;']) !!}
                            </div>
                            <div class="col-md-3">
                              {!! Form::select('aktifitas', [
                                 '0' => ' -- Aktifitas -- ',
                                 '1' => 'Aktif',
                                 '2' => 'Tidak Aktif',
                               ],' ', ['id'=>'aktifitas2','class' => 'form-control','style' => 'font-size: 15px;margin-bottom: 3%; width:100%;']) !!}
                            </div>
                          </div>

                          <div class="row" style="margin-bottom: 1%;">
                            <div class="col-md-12">
                              <div style="margin-top: 1%;margin-left: 0px;margin-bottom: 3%;">
                                <button onclick="PrintData()" id="search" class="btn btn-default btn-sm" style="margin:  0%;"> <i class="fal fa-print"></i> Print</button>
                                <button onclick="ExportExcel()" id="search" class="btn btn-success btn-sm" style="margin:  0%;"> <i class="fal fa-file-excel"></i> Export Excel</button>
                              </div>
                            </div>
                          </div>

                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="modal fade bd-example-modal-lg" id="btnSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" style="text-align: -webkit-center;padding-left: 0px !important;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">

                            <div class="modal-header" style="text-align:left;display:inline-flex !important;">
                              <h5 class="modal-title" id="exampleModalLabel">  <i class="fal fa-search"></i> Cari Data</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                          <div class="row" style="width: 104%;">
                            <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" id = "nama_pos"  name="nama_pos" class="form-control" placeholder="Cari Nama Pos Jaga.." value="{{ request('nama_pos') }}" style="font-size: 15px; border: 1px solid #b5daff;width: 100%;margin-bottom: 2%;">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    {!! Form::select('kontruksi', [
                                       ' ' => ' -- Kontruksi -- ',
                                       '1' => 'Permanen',
                                       '2' => 'Semi Permanen',
                                       '3' => 'Darurat',
                                     ],' ', ['id'=>'kontruksi','class' => 'form-control','style' => 'font-size: 15px;margin-bottom: 3%; width:100%;']) !!}
                                   </div>
                                </div>

                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" id = "alamat"  name="alamat" class="form-control" placeholder="Alamat" value="{{ request('alamat') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 2%;">
                                  </div>
                                </div>



                                <div class="row">
                                  <div class="col-md-6">
                                    <input type="text" id = "luas"  name="luas" class="form-control" placeholder="Luas Bangunan" value="{{ request('luas') }}" style="font-size: 15px;border: 1px solid #b5daff; width: 100%; margin-bottom: 3%;">
                                  </div>
                                  <div class="col-md-6">
                                    <input type="text" id = "luas_tanah"  name="luas_tanah" class="form-control" placeholder="Luas Tanah" value="{{ request('luas_tanah') }}" style="font-size: 15px;border: 1px solid #b5daff; width: 100%; margin-bottom: 3%;">
                                  </div>
                                </div>

                              </div>
                            </div>


                          <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-6">
                                    {!! Form::select('kondisi', [
                                       ' ' => ' -- Kondisi -- ',
                                       '1' => 'Baik',
                                       '2' => 'Kurang Baik',
                                       '3' => 'Rusak Berat',
                                     ],' ', ['id'=>'kondisi','class' => 'form-control','style' => 'font-size: 15px;margin-bottom: 3%; width:100%;']) !!}
                                   </div>

                                  <div class="col-md-6">
                                    {!! Form::select('aktifitas', [
                                       ' ' => ' -- Aktifitas -- ',
                                       '1' => 'Aktif',
                                       '2' => 'Tidak Aktif',
                                     ],' ', ['id'=>'aktifitas','class' => 'form-control','style' => 'font-size: 15px;margin-bottom: 3%; width:100%;']) !!}
                                   </div>
                                </div>

                              </div>
                            </div>


                            <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" id = "kepemilikan"  name="kepemilikan" class="form-control" placeholder="Nama Kepemilikan" value="{{ request('kepemilikan') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 2%;">
                                  </div>
                                </div>

                                </div>
                              </div>


                          </div>

                          <div class="row" style="margin-bottom: 1%;">
                            <div class="col-md-12">
                              <div style="margin-top: 1%;margin-left: 0px;margin-bottom: 3%;">
                                <button onclick="searchData()" id="search" class="btn btn-info btn-sm" style="margin:  0%;">Cari</button>
                              </div>
                            </div>
                          </div>

                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script type="text/javascript">
    $( document ).ready(function() {
        pagePaginathing();
        searchData();
    });



    function PrintData() {
      window.open('/posJaga/data/print?id_kecamatan_print='+ $("#id_kecamatan").val()+'&id_kelurahan_print='+ $("#id_kelurahan").val()+'&nama_pos='+$("#nama_pos2").val()+'&kontruksi='+$("#kontruksi2").val()+'&kondisi='+$("#kondisi2").val()+'&aktifitas='+$("#aktifitas2").val());
    }

    function ExportExcel() {
      window.open('/posJaga/export?id_kecamatan_print='+ $("#id_kecamatan").val()+'&id_kelurahan_print='+ $("#id_kelurahan").val()+'&nama_pos='+$("#nama_pos2").val()+'&kontruksi='+$("#kontruksi2").val()+'&kondisi='+$("#kondisi2").val()+'&aktifitas='+$("#aktifitas2").val());
    
    }



    function DeleteData(){
	    var id = [];
      var hakAkses  = $("#hakAkses").val();
        $('.checkbox:checked').each(function(i){
          id[i] = $(this).val();
        });
if(hakAkses == 1 || hakAkses == 3){
      demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
    }else if(id.length === 0){ 
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
      }else{
      swal({
        title: 'Apa Anda Yakin?',
        text: 'Jika data Dihapus Tidak Bisa diKembalikan!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus Sekarang!',
        cancelButtonText: 'Batalkan',
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false
      }).then(function() {
        swal({
          title: 'Terhapus!',
          text: 'Hapus Data Success.',
          type: 'success',
          confirmButtonClass: "btn btn-success",
          buttonsStyling: false
        }).catch(swal.noop);
          var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
                if ( $('#loading').length ) {
                  $('#loading').remove();
                }
                $('#loadingData').append(loader);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


          $.ajax({
            url: '/posJaga/Delete',
            type:"GET",
            data: 'ids='+id,
            success:function(data) {
            	$('#loading').remove();
              searchData();
            }
        });
      
      

      }, function(dismiss) {
        // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
        if (dismiss === 'cancel') {
          swal({
            title: 'Dibatalkan',
            text: '',
            type: 'error',
            confirmButtonClass: "btn btn-info",
            buttonsStyling: false
          }).catch(swal.noop);
        }
      }).catch(swal.noop);
  }
    }

    function editData() {
      var id = [];
      var hakAkses  = $("#hakAkses").val();
      $('.checkbox:checked').each(function(i){
        id[i] = $(this).val();
      });
      if(hakAkses == 1 || hakAkses == 3){
        demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
      }else if(id.length === 0){ //tell you if the array is empty
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
      }else if(id.length > 1 ){
        swal("Maaf", "Pilih data lebih Dari 1", "error");
      }else{
        location.href="/posJaga/pos-jaga/"+id+"/edit";
        // location.href="/posJaga/pos-jaga/create";
      }

    }

    function ChangeKecamatan() {

          var id_kecamatan = $('#id_kecamatan').val();
          if(id_kecamatan) {
              $.ajax({
                  url: '/getkelurahan/get/'+id_kecamatan,
                  type:"GET",
                  dataType:"json",
                  beforeSend: function(){
                      var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
                      if ( $('#loading').length ) {
                        $('#loading').remove();
                      }
                      $('#loadingData').append(loader);
                  },

                  success:function(data) {

                      $('select[name="id_kelurahan"]').empty();

                      $.each(data, function(key, value){

                          $('select[name="id_kelurahan"]').append('<option value="'+ value +'">' + key+ '</option>');

                      });
                  },
                  complete: function(){
                      $('#loading').remove();
                  }
              });
          } else {
              $('select[name="id_kelurahan"]').empty();
          }


    }


        function ChangeKecamatanPrint() {

          var id_kecamatan = $('#id_kecamatan_print').val();
          if(id_kecamatan) {
              $.ajax({
                  url: '/getkelurahan/get/'+id_kecamatan,
                  type:"GET",
                  dataType:"json",
                  beforeSend: function(){
                      var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
                      if ( $('#loading').length ) {
                        $('#loading').remove();
                      }
                      $('#loadingData').append(loader);
                  },

                  success:function(data) {

                      $('select[name="id_kelurahan_print"]').empty();

                      $.each(data, function(key, value){

                          $('select[name="id_kelurahan_print"]').append('<option value="'+ value +'">' + key + '</option>');

                      });
                  },
                  complete: function(){
                      $('#loading').remove();
                  }
              });
          } else {
              $('select[name="id_kelurahan_print"]').empty();
          }


    }

    </script>


	<script type="text/javascript">
		 function searchData() {
          var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
          if ( $('#loading').length ) {
            $('#loading').remove();
          }
           $('#loadingData').append(loader);
          var jmlData = $('#page').val();
          $.ajax({
          url: '/posJaga/refreshTable',
            data: {
              id_kecamatan: $("#id_kecamatan").val(),
              id_kelurahan: $("#id_kelurahan").val(),
              nama_pos: $("#nama_pos").val(),
              kontruksi: $("#kontruksi").val(),
              kondisi: $("#kondisi").val(),
              aktifitas: $("#aktifitas").val(),
              alamat: $("#alamat").val(),
              luas: $("#luas").val(),
              luas_tanah: $("#luas_tanah").val(),
              kepemilikan: $("#kepemilikan").val(),
            },
            type: "GET",
            dataType: "json",
            success:function(data){
              $('#loading').remove();
              $('#tbody').empty();
              var noColumn = 1;
              $.each(data, function(index, element){
              
              	if (element.konstruksi == 1) {
              		var konstruksi = "Permanen";
              	}else if (element.konstruksi == 2) {
              		var konstruksi = "Semi Permanen";
              	}else if(element.konstruksi == 3){
              		var konstruksi = "Darurat";
              	}else{
                  var konstruksi = "";
                }

              	if (element.kondisi == 1) {
              		var kondisi = "Baik";
              	}else if (element.kondisi == 2) {
              		var kondisi = "Kurang Baik";
              	}else if (element.kondisi == 3){
              		var kondisi = "Rusak Berat";
              	}else{
                  var kondisi = "";
                }

                if (element.aktifitas == 1) {
                    var aktifitas ="Aktif"; 
                }else if(element.aktifitas == 2){
                    var aktifitas ="Tidak Aktif"; 
                }else{
                    var aktifitas =""; 
                }

                if (element.luas) {
                  var luas = element.luas;
                }else{
                  var luas = '';
                }

                if (element.keterangan) {
                  var keterangan = element.keterangan;
                }else{
                  var keterangan = '';
                }

                if (element.luas_tanah) {
                  var luas_tanah = element.luas_tanah;
                }else{
                  var luas_tanah = '';
                }

                if (element.kepemilikan) {
                  var kepemilikan = element.kepemilikan;
                }else{
                  var kepemilikan = '';
                }

                

                var ExplodeTanggalBuat = element.updated_at.split(' ');
                var TanggalCreate = ExplodeTanggalBuat[0];
                var ExplodeGetTanggalBuat = TanggalCreate.split('-');
                var TanggalBuat = ExplodeGetTanggalBuat[2]+'-'+ExplodeGetTanggalBuat[1]+'-'+ExplodeGetTanggalBuat[0];

                $('#tbody').append("<tr><td style='text-align: center;width: 0%;line-height: 40px;'>"+ noColumn +"</td><td style='text-align: center;'><div class='form-check' style='padding-left: 0rem;'><label class='form-check-label' style='padding-left: 30px;'><input type='checkbox' class='checkbox' value='"+element.id+"'><span class='form-check-sign'></span></label></div></td><td>"+ element.nama +"</td><td>"+element.alamat+"<br>Kec. "+element.alamat_kec+"<br>Kel/Des. "+element.alamat_kel+"</td><td>- "+konstruksi+"<br>- "+luas+"<br>- "+kondisi+"</td><td style='width: 10%;'>- "+kepemilikan+"<br>- "+luas_tanah+"</td><td style='text-align: center;width: 1%;'>"+aktifitas+"</td><td>"+keterangan+"<br><span style='font-size: 11px;color: blue;'>Update Terakhir : <br></span><span style='font-size: 11px;color: blue;'>"+ TanggalBuat +", "+element.name+"</span></td>");

                  function getPageList(totalPages, page, maxLength) {
                    if (maxLength < 5) throw "maxLength must be at least 5";

                    function range(start, end) {
                        return Array.from(Array(end - start + 1), (_, i) => i + start); 
                    }

                    var sideWidth = maxLength < 9 ? 1 : 2;
                    var leftWidth = (maxLength - sideWidth*2 - 1) >> 1;
                    var rightWidth = (maxLength - sideWidth*2 - 2) >> 1;
                    if (totalPages <= maxLength) {
                        // no breaks in list
                        return range(1, totalPages);
                    }
                    if (page <= maxLength - sideWidth - 1 - rightWidth) {
                        // no break on left of page
                        return range(1, maxLength-sideWidth-1)
                            .concat([0])
                            .concat(range(totalPages-sideWidth+1, totalPages));
                    }
                    if (page >= totalPages - sideWidth - 1 - rightWidth) {
                        // no break on right of page
                        return range(1, sideWidth)
                            .concat([0])
                            .concat(range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
                    }
                    // Breaks on both sides
                    return range(1, sideWidth)
                        .concat([0])
                        .concat(range(page - leftWidth, page + rightWidth)) 
                        .concat([0])
                        .concat(range(totalPages-sideWidth+1, totalPages));
                  }

                  $(function () {
                    // Number of items and limits the number of items per page
                    var numberOfItems = $("#tbody tr").length;
                    if (jmlData <= 0) {
                      var jmlFix = 25;
                      var limitPerPage = jmlFix;
                    }else{
                      var limitPerPage = jmlData;
                    }
                    // var limitPerPage = 25;
                    // Total pages rounded upwards
                    var totalPages = Math.ceil(numberOfItems / limitPerPage);
                    // Number of buttons at the top, not counting prev/next,
                    // but including the dotted buttons.
                    // Must be at least 5:
                    var paginationSize = 7; 
                    var currentPage;

                    function showPage(whichPage) {
                      if (whichPage < 1 || whichPage > totalPages) return false;
                      currentPage = whichPage;
                      $("#tbody tr").hide()
                          .slice((currentPage-1) * limitPerPage, 
                                  currentPage * limitPerPage).show();
                      // Replace the navigation items (not prev/next):            
                      $(".pagination li").slice(1, -1).remove();
                      getPageList(totalPages, currentPage, paginationSize).forEach( item => {
                          $("<li>").addClass("page-item")
                                   .addClass(item ? "current-page" : "disabled")
                                   .toggleClass("active", item === currentPage).append(
                              $("<a>").addClass("page-link").attr({
                                  href: "javascript:void(0)"}).text(item || "...")
                          ).insertBefore("#next-page");
                      });
                      // Disable prev/next when at first/last page:
                      $("#previous-page").toggleClass("disabled", currentPage === 1);
                      $("#next-page").toggleClass("disabled", currentPage === totalPages);
                      return true;
                    }

                    // Include the prev/next buttons:
                    $(".pagination").append(
                      $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
                          $("<a>").addClass("page-link").attr({
                              href: "javascript:void(0)"}).text("Prev")
                      ),
                      $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
                          $("<a>").addClass("page-link").attr({
                              href: "javascript:void(0)"}).text("Next")
                      )
                    );
                    // Show the page links
                    $("#tbody").show();
                    showPage(1);

                    // Use event delegation, as these items are recreated later    
                    $(document).on("click", ".pagination li.current-page:not(.active)", function () {
                        return showPage(+$(this).text());
                    });
                    $("#next-page").on("click", function () {
                        return showPage(currentPage+1);
                    });

                    $("#previous-page").on("click", function () {
                        return showPage(currentPage-1);
                    });
                  });
                noColumn = noColumn + 1;
              });
            }
          });
    }
	</script>

  <script type="text/javascript">
    var select_all = document.getElementById("select_all"); //select all checkbox
      var checkboxes = document.getElementsByClassName("checkbox"); //checkbox items

      //select all checkboxes
      select_all.addEventListener("change", function(e){
        for (i = 0; i < checkboxes.length; i++) {
          checkboxes[i].checked = select_all.checked;
        }
      });


      for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].addEventListener('change', function(e){ //".checkbox" change
          //uncheck "select all", if one of the listed checkbox item is unchecked
          if(this.checked == false){
              select_all.checked = false;
          }
          //check "select all" if all checkbox items are checked
          if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
              select_all.checked = true;
          }
        });
      }
  </script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.posKamling').on('click', function(){
      demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
    });
  });
</script>
@endsection
