@extends('layouts.backend')
@section('title')
  Data Anggota Linmas
@endsection

@section('judul')
    Data Anggota Linmas
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
</style>
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <div id="loadingData"></div>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header" style="margin-top: -1%;">
                    @php
                      if (Auth::user()->anggota == 1 || Auth::user()->anggota == 3) {
                          $idUser     = "anggota";
                          $hrefUser   = "";
                          $class      = "anggota";
                      }else{
                          $idUser     = "";
                          $hrefUser   = "href=/linmas/linmas/create";
                          $class      = "";
                      }
                    @endphp
                    <div class="row">
                        <div class="col-md-9">
                          <h4 class="card-title">Data Anggota Linmas</h4>
                         
                        </div>
                        <div class="col-md-3" style="text-align:right;">
                          <a {{ $hrefUser }} class="btn btn-success btn-sm {{ $class }}" title="Add New Kecamatan">
                              {{-- <i class="fa fa-plus" aria-hidden="true"></i> --}}
                                <i class="fal fa-plus"></i> Baru
                          </a>
                          <input type="hidden" name="hakAkses" id="hakAkses" value="{{ Auth::user()->anggota }}">
                          <a onclick="editData()" class="btn btn-warning btn-sm" title="Edit New Kecamatan" style="color:white;">
                              {{-- <i class="fa fa-pencil" aria-hidden="true"></i> --}}
                             <i class="fal fa-pencil-alt"></i> Edit
                          </a>
                          <a onclick="checkDetele()" class="btn btn-danger btn-sm" title="Edit New Kecamatan" style="color:white;">
                              {{-- <i class="fa fa-trash" aria-hidden="true"></i> --}}
                              <i class="fal fa-trash-alt"></i>   Hapus
                          </a>

                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#btnSearch">
                           <i class="fal fa-search"></i>  Cari
                          </button>
                        </div>
                      
                      </div>

                    </div>
                    <hr style="margin-top: 0%;margin-bottom: 0%;">
                    </div>
                    <div class="card-body"  style="padding: 15px 15px 10px !important;">
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
                                  <span>Kelurahan / Desa</span>
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
                          <div class="col-md-4">
                            <input type="text" id="page" class="form-control" placeholder="25" value="{{ request('paging') }}" style="text-align: center;font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 6%;">
                          </div>
                          <div class="col-md-3">
                            <button onclick="searchData()" id="search" class="btn btn-info btn-sm" style="margin: 0%;margin-left:  1%;padding: 0%;margin-top: 0px;font-size: 11px;padding: 3px;float: right;">Tampilkan</button>
                          </div>
                          <div class="col-md-2">
                          </div>
                      </div>


<!--                       <div class="row" style="margin-bottom: 1%;">
                        <div class="col-md-5">
                        </div>
                        <div class="col-md-7">
                          <div style="margin-top: 2%;margin-left: -2px;margin-bottom: 3% width: 100%;">
                            <button onclick="searchData()" id="search" class="btn btn-info btn-sm" style="margin:  0%; margin-left:  1%;">Tampilkan</button>
                          </div>
                        </div>
                      </div> -->

                      </div>
                    </div>


                    </div>




                        <div>
                              <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;width: 1%;line-height: 40px;">NO</th>
                                        <th style="text-align: center;width: 1%;">
                                            <div class="form-check" style="padding-left: 0rem;">
                                              <label class="form-check-label" style="padding-left: 30px;">
                                                <input type="checkbox" id="select_all">
                                                <span class="form-check-sign"></span>
                                              </label>
                                            </div>
                                        </th>
                                        <th>Nama / Jenis Kelamin / Tgl Lahir</th>
                                        <th style="width: 18%;">Agama / Pendidikan / Status</th>
                                        <th>Alamat</th>
                                        <th>No KTP / NO HP</th>
                                        <th style="width: 8%;text-align: left;">Ukuran</th>
                                        <th >Keterangan</th>
                                        <th style="width: 8%;text-align: center;">Pengesahan</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                @foreach($linmas as $item)
                                    <tr>
                                        <td style="text-align: center;line-height: 40px;">{{ $loop->iteration or $item->id }}</td>
                                        <td style="text-align: center;">
                                          <div class="form-check" style="padding-left: 0rem;">
                                            <label class="form-check-label" style="padding-left: 30px;">
                                              <input type="checkbox" class="checkbox" value="{{ $item->id }}">
                                              <span class="form-check-sign"></span>
                                            </label>
                                          </div>
                                      </td>
                                        <td>- {{ $item->nama }} <br>
                                            - {{ $item->jenis_kelamin }} <br>
                                            <?php
                                              $ExplodeTanggal = explode('/',$item->tgl_lahir);
                                              $TanggalLahir =  $ExplodeTanggal[1].'-'.$ExplodeTanggal[0].'-'.$ExplodeTanggal[2];
                                            ?>
                                            - {{ $item->tempat_lahir }}, {{ $TanggalLahir }}</td>
                                        <td>   {{ $item->agama }}
                                          <br> {{ $item->pendidikan }}
                                          <br> {{ $item->status }}
                                        </td>
                                        <td>   {{ $item->alamat }}
                                          <br> Rt {{ $item->rt }} - Rw {{ $item->rw }}
                                          <br> Kec. {{ $item->alamat_kecamatan }}
                                          <br> Kel/Des. {{ $item->alamat_kelurahan}}
                                        </td>
                                        <td style="width: 13%;">- {{ $item->no_ktp }}
                                          <br>- {{ $item->hp }}
                                        </td>
                                        <td style="text-align: left;">Baju : {{$item->uk_baju}}<br> Sepatu : {{$item->uk_sepatu}}
                                        </td>
                                        <td>
                                          <br>- {{ $item->keterangan }}
                                        </td>
                                        <td>
                                          @if($item->status_linmas == 1)
                                             Telah Disahkan
                                          @elseif($item->status_linmas == 0)
                                             Belum Disahkan
                                          @else

                                          @endif
                                        </td>
                                        {{-- <td style="text-align:center;">
                                            <a href="{{ url('/linmas/linmas/' . $item->id) }}" title="View Linma"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/linmas/linmas/' . $item->id . '/edit') }}" title="Edit Linma"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/linmas/linmas', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Linma',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td> --}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination">
                            </div>
                            <div class="pagination-wrapper"> {!! $linmas->appends(['paging' => Request::get('paging')])->render() !!} </div>
                            {{-- <div class="pagination-wrapper"> {{ $linmas->appends(request()->except('page'))->links() }} </div> --}}

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
                                    <input type="text" id = "nama"  name="nama" class="form-control" placeholder="Cari Nama Linmas.." value="{{ request('nama') }}" style="font-size: 15px; border: 1px solid #b5daff;width: 100%;margin-bottom: 2%;">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    {!! Form::select('status_linmas', [
                                       '0' => 'Belum Disahkan',
                                       '1' => 'Disahkan',
                                     ],'0', ['id'=>'status_linmas','class' => 'form-control','style' => 'font-size: 15px;margin-bottom: 3%; width:100%;']) !!}
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
                                  <div class="col-md-3">
                                    <input type="text" id = "rt"  name="rt" class="form-control" placeholder="RT" value="{{ request('rt') }}" style="font-size: 15px;border: 1px solid #b5daff; width: 100%; margin-bottom: 3%;">
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" id = "rw"  name="rw" class="form-control" placeholder="RW" value="{{ request('rw') }}" style="font-size: 15px;border: 1px solid #b5daff; width: 100%; margin-bottom: 3%;">
                                  </div>
                                </div>

                              </div>
                            </div>


                          <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-8">
                                    <input type="text" id = "no_ktp" name="no_ktp" class="form-control" placeholder="No KTP" value="{{ request('no_ktp') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 3%;">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-8">
                                    <input type="text" id = "hp" name="hp" class="form-control" placeholder="Nomer Hp" value="{{ request('hp') }}" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;">
                                  </div>
                                </div>

                              </div>
                            </div>


                            <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-6">
                                    {!! Form::select('agama', ['' => '-- Agama --','Islam' => 'Islam','Kristen' => 'Kristen','Kartolik' => 'Kartolik', 'Budha' => 'Budha', 'Hindu' => 'Hindu', 'Konghucu' => 'Konghucu'], '', ['id'=>'agama','class' => 'form-control','style' => 'margin-bottom: 3%']) !!}
                                  </div>
                                

                                <div class="col-md-6">
                                   {!! Form::select('jenis_kelamin', ['' => '-- Jenis Kelamin --', 'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], '', ['id'=>'jenis_kelamin','class' => 'form-control']) !!}
                                  </div>
                                  </div>

                               <div class="row">
                                  <div class="col-md-6">
                                    {!! Form::select('pendidikan', ['' => '--Pendidikan--','SD' => 'SD','SMP' => 'SMP','SMA/SMK' => 'SMA/SMK', 'Diploma' => 'Diploma', 'Sarjana' => 'Sarjana', 'Pasca Sarjana' => 'Pasca Sarjana', 'Doktor' => 'Doktor'],'', ['id'=>'pendidikan','class' => 'form-control']) !!}
                                  </div>
                                

                                <div class="col-md-6">
                                   {!! Form::select('status', ['' => '--Status--','Janda' => 'Janda','Duda' => 'Duda','Kawin' => 'Kawin', 'Belum Kawin' => 'Belum Kawin'],'', ['id'=>'status','class' => 'form-control']) !!}
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
    });

    function checkDetele() {
      var id = [];
      $('.checkbox:checked').each(function(i){
        id[i] = $(this).val();
        var hakAkses  = $("#hakAkses").val();
      });
      $.ajax({
        url: '/linmas/Delete',
        type:"GET",
        data: 'ids='+id+'&hapus='+'',
        success:function(data) {
          if (data === '0') {
            swal("Maaf", "Data Linmas Disahkan Tidak bisa Di Hapus", "error");
          }else{
            DeleteData()
          }
          
        }
    });
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
            url: '/linmas/Delete',
            type:"GET",
            data: 'ids='+id+'&hapus='+'1',
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
        var hakAkses  = $("#hakAkses").val();
      });
      if(hakAkses == 1 || hakAkses == 3){
        demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
      }else if(id.length === 0){ //tell you if the array is empty
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
      }else if(id.length > 1 ){
        swal("Maaf", "Pilih data lebih Dari 1", "error");
      }else{
        location.href="/linmas/linmas/"+id+"/edit";
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

                          $('select[name="id_kelurahan"]').append('<option value="'+ value +'">' + key + '</option>');

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

    </script>



  <script type="text/javascript">
     function searchData() {
          var jmlData = $('#page').val();
          $.ajax({
          url: '/linmas/refreshTable',
            data: {
              id_kecamatan: $("#id_kecamatan").val(),
              id_kelurahan: $("#id_kelurahan").val(),
              nama: $("#nama").val(),
              status_linmas: $("#status_linmas").val(),
              no_ktp: $("#no_ktp").val(),
              hp: $("#hp").val(),
              rt: $("#rt").val(),
              rw: $("#rw").val(),
              agama: $("#agama").val(),
              jenis_kelamin: $("#jenis_kelamin").val(),
              status: $("#status").val(),
              pendidikan: $("#pendidikan").val(),
              alamat: $("#alamat").val()
            },
            type: "GET",
            dataType: "json",
            success:function(data){
               $('#btnSearch').modal('hide');
              $('#tbody').empty();
              var noColumn = 1;
              $.each(data, function(index, element){
              var status_linmas;
              if (element.status_linmas == 1) {
               var status_linmas = 'Telah Disahkan';
              }else if (element.status_linmas == 0) {
               var status_linmas = 'Belum Disahkan';
              }else{
               var status_linmas = '';
              }

                var ExplodeTanggal = element.tgl_lahir.split('/');
                var TanggalLahir = ExplodeTanggal[1]+'-'+ExplodeTanggal[0]+'-'+ExplodeTanggal[2];

                $('#tbody').append("<tr><td style='text-align: center;width: 0%;line-height: 40px;'>"+ noColumn +"</td><td style='text-align: center;'><div class='form-check' style='padding-left: 0rem;'><label class='form-check-label' style='padding-left: 30px;'><input type='checkbox' class='checkbox' value='"+element.id+"'><span class='form-check-sign'></span></label></div></td><td>- "+element.nama+" <br>- "+element.jenis_kelamin+" <br>- "+element.tempat_lahir+", "+TanggalLahir+"</td><td>"+ element.agama +"<br>"+ element.pendidikan +" <br>"+ element.status +"</td><td>"+element.alamat+"<br> Rt "+element.rt+" - Rw "+element.rw+"<br> "+element.alamat_kecamatan+"<br> "+element.alamat_kelurahan+"</td><td style='width: 13%;'>- "+element.no_ktp+"<br>- "+element.hp+"</td><td style='text-align: left;'>Baju : "+element.uk_baju+"<br> Sepatu : "+element.uk_sepatu+"</td><td><br>- "+element.keterangan+"</td><td>"+ status_linmas +"</td>");

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
    $('.anggota').on('click', function(){
      demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
    });
  });
</script>
@endsection
