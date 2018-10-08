
<?php $__env->startSection('title'); ?>
  Publikasi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Publikasi
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
button#search {
    margin: 0%;
    margin-left: 1%;
    margin-top: 0px;
    font-size: 11px;
    padding: 3px;
    float: right;
}
</style>
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
 <div id="loadingData">

 </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="card-title">Data Publikasi</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-3" style="text-align:right;">
                          
                          <a href="<?php echo e(url('/ContentPublikasi/content-publikasi/create')); ?>" class="btn btn-success btn-sm" title="Add New Kecamatan" >
                              <i class="fal fa-plus"></i> Baru
                          </a>
                          <a onclick="editData()" class="btn btn-warning btn-sm" title="Edit New Kecamatan" style="color:white;">
                              <i class="fal fa-pencil-alt"></i> Edit
                          </a>
                          <a onclick="DeleteData()" class="btn btn-danger btn-sm" title="Edit New Kecamatan" style="color:white;">
                              <i class="fal fa-trash-alt"></i> Hapus
                          </a>
                          <button class="btn btn-info pull-right btn-sm" id="cari" data-toggle="modal" data-target="#noticeModal"><i class="fal fa-search"></i> CARI</button>
                          <!-- notice modal -->

                            <div class="modal fade bd-example-modal-lg" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" style="text-align: -webkit-center;padding-left: 0px !important;">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">

                                  <div class="modal-header" style="text-align:left;display:inline-flex !important;">
                                    <h5 class="modal-title" id="exampleModalLabel">Cari Data</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-md-3">
                                        <label class="control-label">KATEGORI PUBLIKASI</label>
                                      </div>
                                      <div class="col-md-3">
                                        <input type="text" name="nama" id="nama" class="form-control">
                                      </div>

                                      <div class="col-md-1">
                                        <label class="control-label">JUDUL</label>
                                      </div>
                                      <div class="col-md-3">
                                        <input type="text" name="judul" id="judul" class="form-control">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-3">
                                        <label class="control-label">USER</label>
                                      </div>
                                      <div class="col-md-3">
                                        <input type="text" name="user" id="user" class="form-control">
                                      </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1%;">
                                      <div class="col-md-12">
                                        <div style="margin-top: 1%;margin-left: 0px;margin-bottom: 3%;">
                                          <button type="button" id="cari" name="cari" class="btn btn-info" onclick="search()">Cari</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <label class="control-label">NAMA KECAMATAN</label>
                        
                      </div>
                      <div class="col-md-2">
                        
                        <select class="form-control" id="kd_kec" name="kd_kec">
                          <option value="0">SELECT</option>
                          <?php $__currentLoopData = $slcKdKec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value->kd_kec); ?>"><?php echo e($value->nama); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <label class="control-label">KELURAHAN / DESA</label>
                      </div>
                      <div class="col-md-2">
                        <select class="form-control" id="kel_des" name="kel_des">
                          <option value="0">SELECT</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <label class="control-label">JUMLAH DATA</label>
                      </div>
                      <div class="col-md-1">
                        <input type="number" name="jmlData" id="jmlData" class="form-control" style="width: 65px;" value="25">
                      </div>
                      <div class="col-md-1">
                        <button type="button" id="search" name="search" class="btn btn-info" onclick="search()">TAMPILKAN</button>
                      </div>
                    </div>
                    
                    </div>
                    <div class="card-body">
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
                                        <th>Kategori Publikasi</th>
                                        <th>Judul</th>
                                        
                                        <th>User</th>
                                        <th style="width: 11%;text-align: center;">Tanggal/ Waktu</th>
                                        <th style="width: 8%;text-align: center;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                <?php $__currentLoopData = $contentpublikasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php
                                     $isi = strip_tags($item['deskripsi']);
                                      if (strlen($isi) > 250) {
                                          $stringCut = substr($isi, 0, 250);
                                          $isi = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
                                      }
                                  ?>
                                    <tr>
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
                                        <td>
                                          <?php echo e($item->nama); ?></td>
                                          <td><?php echo e($item->judul); ?>

                                        </td>
                                        
                                        <td><?php echo e($item->username); ?></td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/content-publikasi/PDF/' . $item->id)); ?>" target="_blank" title="View ContentPublikasi"><button class="btn btn-info btn-sm">Download</button></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                           <div class="pagination"></div>
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

        $('#kd_kec').on('change', function(){
          var stateID = $('#kd_kec').val();
          if (stateID) {
            $.ajax({
              url: '/contentPublikasi/srcKelDes/'+stateID,
              type: "GET",
              dataType: "json",
              success:function(data){
                $('#kel_des').empty();
                $('#kel_des').append("<option value=''>SELECT</option>");
                $.each(data, function(key, value){
                  $('#kel_des').append("<option value="+ value +">"+ key +"</option>");
                });
              }
            });
          }else{
            $('#kel_des').empty();
            $('#kel_des').append("<option value=''>SELECT</option>");
          }
        });
    });

    function DeleteData(){
        var id = [];
        $('.checkbox:checked').each(function(i){
          id[i] = $(this).val();
        });

      if(id.length === 0){ 
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
            url: '/content-publikasi/Delete',
            type:"GET",
            data: 'ids='+id,
            success:function(data) {
                $('#loading').remove();
              search();
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
      $('.checkbox:checked').each(function(i){
        id[i] = $(this).val();
      });
      if(id.length === 0){ //tell you if the array is empty
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
      }else if(id.length > 1 ){
        swal("Maaf", "Pilih data lebih Dari 1", "error");
      }else{
        location.href="/ContentPublikasi/content-publikasi/"+id+"/edit";
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
  function search(){
    var jmlData = $('#jmlData').val();
    var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
      if ( $('#loading').length ) {
        $('#loading').remove();
      }
      $('#loadingData').append(loader);
    $.ajax({
    url: '/content-publikasi/srcContent/',
      data: {
        nama:     $("#nama").val(),
        judul:    $("#judul").val(),
        kd_kec:   $("#kd_kec").val(),
        kel_des:  $("#kel_des").val(),
        user:     $("#user").val()
      },
      type: "GET",
      dataType: "json",
      success:function(data){
        $('#loading').remove();
        $('#tbody').empty();
        var noColumn = 1;
        $.each(data, function(index, element){

          $('#tbody').append("<tr id="+ element.id +"><td style='text-align: center;'>"+ noColumn +"</td><td style='width: 3%;'><div class='form-check mt-3' style='padding: unset!important'><div class='form-check' style='width: 1px; height: 36px; padding: unset!important;'><label class='form-check-label'><input type='checkbox' class='checkbox' value="+ element.id +"><span class='form-check-sign'></span></label></div></div></td><td>"+element.nama+"</td><td>"+ element.judul +"</td><td>"+element.username+"</td><td>"+element.created_at+"</td><td><a href='http://linmas.pilar.web.id/content-publikasi/PDF/"+element.id+"' target='_blank' title='View ContentPublikasi'><button class='btn btn-info btn-sm'>Download</button></a></td></tr>");

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
                $("#jmlData").val(25);
                var limitPerPage = jmlFix;
              }else{
                var limitPerPage = $('#jmlData').val();
              }
              // var limitPerPage = 25;
              // Total pages rounded upwards
              var totalPages = Math.ceil(numberOfItems / limitPerPage);
              // Number of buttons at the top, not counting prev/next,
              // but including the dotted buttons.
              // Must be at least 5:
              var paginationSize = 13; 
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

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>