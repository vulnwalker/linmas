
<?php $__env->startSection('title'); ?>
  Data Pembinaan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Data Pembinaan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
 <div id="loadingData">

 </div>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header" style="margin-top: -1%;">
                    <?php
                        if (Auth::user()->pembinaan == 1 || Auth::user()->pembinaan == 3) {
                            $idUser     = "pembinaan";
                            $hrefUser   = "";
                            $class      = "pembinaan";
                            $onclik     = '';
                        }else{
                            $idUser     = "";
                            $hrefUser   = "href=/pembinaan/pembinaan/create";
                            $onclik     = "onclick=TambahPembinaan()";
                            $class      = "";
                        }
                      ?>
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title">Data Pembinaan</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-4" style="text-align:right;">
                          
                          <a  class="btn btn-success btn-sm <?php echo e($class); ?>" <?php echo e($onclik); ?> style="color:white;">
                              <i class="fal fa-plus"></i> Baru
                          </a>
                          <input type="hidden" name="hakAkses" id="hakAkses" value="<?php echo e(Auth::user()->pembinaan); ?>">
                          <a onclick="editData()" class="btn btn-warning btn-sm" title="Edit New Kecamatan" style="color:white;">
                              <i class="fal fa-pencil-alt"></i> Edit
                          </a>
                          <a onclick="DeleteData()" class="btn btn-danger btn-sm" title="Edit New Kecamatan" style="color:white;">
                              <i class="fal fa-trash-alt"></i> Hapus
                          </a>
                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#btnSearch">
                            <i class="fal fa-search"></i> Cari
                          </button>

                          <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#btnPrint">
                            <i class="fal fa-print"></i> Print
                          </button>

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
                                <div class="row">
                                  <div class="col-md-3">
                                    <label class="control-label">Tanggal</label>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" name="tanggal_mulai" id="tanggal_mulai_print" class="form-control datepicker">
                                  </div>s/d
                                  <div class="col-md-3">
                                    <input type="text" name="tanggal_selesai" id="tanggal_selesai_print" class="form-control datepicker">
                                  </div>
                                </div>
                                <div class="row" style="width: 104%;">
                                  <div class="col-md-3">
                                    <label class="control-label">Nama Kegiatan</label>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" name="nama" id="nama_print" class="form-control">
                                  </div>
                                  <div class="col-md-3">
                                    <label class="control-label">Lokasi Kegiatan</label>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" name="lokasi" id="lokasi_print" class="form-control">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3">
                                    <label class="control-label">Penyelenggaraan</label>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" name="penyelengara" id="penyelengara_print" class="form-control">
                                  </div>
                                  <div class="col-md-3">
                                    <label class="control-label">Isi Kegiatan</label>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" name="kegiatan" id="kegiatan_print" class="form-control">
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

                        </div>
                    </div>
                    <hr style="margin-top: 0%;margin-bottom: 0%;">
                    </div>
                    <div class="card-body" style="padding: 15px 15px 10px !important;">
                                           <div class="row">
                      <div class="col-md-10">
                        <div class="">
                        <div class="row">
                          <div class="col-md-1" style="flex: 0 0 12.333333% !important;max-width: 13%;">
                            <span>Data/ halaman </span>
                          </div>
                          <div class="col-md-1">
                            <input type="text" id="page" class="form-control" placeholder="25" value="<?php echo e(request('paging')); ?>" style="text-align: center;font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 6%;padding-right: 5px !important;">

                          </div>
                          <div class="col-md-2">
                            <button onclick="searchData()" id="search" class="btn btn-info btn-sm" style="margin: 0%;margin-left:  1%;padding: 0%;margin-top: 0px;font-size: 11px;padding: 3px;float: right;width: 100%;">Tampilkan</button>
                          </div>
                      </div>

                      </div>
                    </div>
                    </div>
                        <div>
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
                                        <th>Nama kegiatan</th>
                                        <th>lokasi kegiatan</th>
                                        <th>isi kegiatan</th>
                                        <th>Tanggal</th>
                                        <th>Penyelengara</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                <?php $__currentLoopData = $pembinaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr >
                                        <td style="text-align: center;width: 0%;line-height: 40px;"><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td style="text-align: center;">
                                          <div class="form-check" style="padding-left: 0rem;">
                                            <label class="form-check-label" style="padding-left: 30px;">
                                              <input type="checkbox" class="checkbox" value="<?php echo e($item->id); ?>">
                                              <span class="form-check-sign"></span>
                                            </label>
                                          </div>
                                      </td>
                                        <td><?php echo e($item->nama); ?></td>
                                        <td><?php echo e($item->lokasi); ?></td>
                                        <td><?php echo e($item->kegiatan); ?></td>
                                        <td><?php echo e(date("d-m-Y", strtotime($item->tanggal_mulai))); ?> s/d <?php echo e(date("d-m-Y", strtotime($item->tanggal_selesai))); ?></td>
                                        <td><?php echo e($item->penyelengara); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination"></div>
                        </div>

                       <div class="modal fade bd-example-modal-lg" id="btnSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" style="text-align: -webkit-center;padding-left: 0px !important;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">

                            <div class="modal-header" style="text-align:left;display:inline-flex !important;">
                              <h5 class="modal-title" id="exampleModalLabel"><i class="far fa-search"></i> Cari Data</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                  <div class="col-md-3">
                                    <label class="control-label">Tanggal</label>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" name="tanggal_mulai" id="tanggal_mulai" class="form-control datepicker">
                                  </div>s/d
                                  <div class="col-md-3">
                                    <input type="text" name="tanggal_selesai" id="tanggal_selesai" class="form-control datepicker">
                                  </div>
                                </div>
                                <div class="row" style="width: 104%;">
                                  <div class="col-md-3">
                                    <label class="control-label">Nama Kegiatan</label>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" name="nama" id="nama" class="form-control">
                                  </div>
                                  <div class="col-md-3">
                                    <label class="control-label">Lokasi Kegiatan</label>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" name="lokasi" id="lokasi" class="form-control">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-3">
                                    <label class="control-label">Penyelenggaraan</label>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" name="penyelengara" id="penyelengara" class="form-control">
                                  </div>
                                  <div class="col-md-3">
                                    <label class="control-label">Isi Kegiatan</label>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" name="kegiatan" id="kegiatan" class="form-control">
                                  </div>
                                </div>

                          </div>

                          <div class="row" style="margin-bottom: 1%;">
                            <div class="col-md-12">
                              <div style="margin-left: 2%;margin-bottom: 3%;">
                                <button onclick="searchData()" id="search" class="btn btn-primary btn-sm" style="margin:  0%;"><i class="fal fa-search"></i> Cari</button>
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


<!--     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="<?php echo e(asset('assets/js/core/jquery.min.js')); ?>"></script>

    <script type="text/javascript">
    $( document ).ready(function() {
        pagePaginathing();
    });


    function TambahPembinaan() {
          $.ajax({
            url: '/pembinaan/TambahPembinaan',
            type:"GET",
            success:function(data) {
               location.href="/pembinaan/pembinaan/create";
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
            url: '/pembinaan/Delete',
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

        $.ajax({
            url: '/pembinaan/editTmp',
            type:"GET",
            data: 'ids='+id,
            success:function(data) {
             location.href="/pembinaan/pembinaan/"+id+"/edit";
            }
        });
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

                          $('select[name="id_kelurahan"]').append('<option value="'+ key +'">' + value + '</option>');

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
    function PrintData() {
          var tanggalSelesai = $("#tanggal_selesai_print").val();
          if (tanggalSelesai == "") {
            // var today = new Date();
            // var resultTanggalS = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            var resultTanggalS = "";
          }else{
            var tanggalS = new Date($("#tanggal_selesai_print").val());
            var resultTanggalS = tanggalS.getFullYear() + '-' + (tanggalS.getMonth() + 1) + '-' + tanggalS.getDate();
          }

          var tanggalMulai = $("#tanggal_mulai_print").val();
          if (tanggalMulai == "") {
            // var today = new Date();
            // var resultTanggalM = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            var resultTanggalM = "";
          }else{
            var tanggalM = new Date($("#tanggal_mulai_print").val());
            var resultTanggalM = tanggalM.getFullYear() + '-' + (tanggalM.getMonth() + 1) + '-' + tanggalM.getDate();
          }

      window.open('/pembinaan/data/print?nama='+ $("#nama_print").val()+'&lokasi='+ $("#lokasi_print").val()+'&penyelengara='+ $("#penyelengara_print").val()+'&kegiatan='+$("#kegiatan_print").val()+'&tanggal_mulai='+resultTanggalM+'&tanggal_selesai='+resultTanggalS, '_blank');
    }
    function ExportExcel() {

      
      window.open('/pembinaan/export?nama='+ $("#nama_print").val()+'&lokasi='+ $("#lokasi_print").val()+'&penyelengara='+ $("#penyelengara_print").val()+'&kegiatan='+$("#kegiatan_print").val()+'&tanggal_mulai='+ $("#tanggal_mulai_print").val()+'&tanggal_selesai='+ $("#tanggal_selesai_print").val(),'_blank');
    
    }

     function searchData() {
          var jmlData = $('#page').val();
          $.ajax({
          url: '/pembinaan/refreshPembinaan',
            data: {
              nama: $("#nama").val(),
              kegiatan: $("#kegiatan").val(),
              lokasi: $("#lokasi").val(),
              tanggal_mulai: $("#tanggal_mulai").val(),
              tanggal_selesai: $("#tanggal_selesai").val(),
              penyelengara: $("#penyelengara").val(),
            },
            type: "GET",
            dataType: "json",
            success:function(data){
              $('#tbody').empty();
              var noColumn = 1;
              $.each(data, function(index, element){

                  var tanggalSelesai = element.tanggal_selesai;
                  if (tanggalSelesai == "") {
                    var resultTanggalS = "";
                  }else{
                    var tanggalS = new Date(element.tanggal_selesai);
                    if (tanggalS.getDate() <= 9) {
                      var resultTanggalS = '0'+tanggalS.getDate() + '-' + (tanggalS.getMonth() + 1) + '-' + tanggalS.getFullYear();
                    }else{
                      var resultTanggalS = tanggalS.getDate() + '-' + (tanggalS.getMonth() + 1) + '-' + tanggalS.getFullYear();
                    }
                  }

                  var tanggalMulai = element.tanggal_mulai;
                  if (tanggalMulai == "") {
                    var resultTanggalM = "";
                  }else{
                    var tanggalM = new Date(element.tanggal_mulai);
                    if (tanggalM.getDate() <= 9) {
                      var resultTanggalM = '0'+ tanggalM.getDate() + '-' + (tanggalM.getMonth() + 1) + '-' + tanggalM.getFullYear();
                    }else{
                      var resultTanggalM = tanggalM.getDate() + '-' + (tanggalM.getMonth() + 1) + '-' + tanggalM.getFullYear();
                    }
                  }

                  $('#tbody').append("<tr ><td style='text-align: center;width: 0%;line-height: 40px;'>"+ noColumn +"</td><td style='text-align: center;'><div class='form-check' style='padding-left: 0rem;'><label class='form-check-label' style='padding-left: 30px;'><input type='checkbox' class='checkbox' value='"+element.id+"'><span class='form-check-sign'></span></label></div></td><td>"+ element.nama +"</td><td>"+element.lokasi+"</td><td>"+element.kegiatan+"</td><td>"+ resultTanggalM +" s/d "+ resultTanggalS +"</td><td>"+ element.penyelengara +"</td></tr>");
                  // start paginathing
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
                  // end paginathing

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
    $('.pembinaan').on('click', function(){
      demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
    });
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>