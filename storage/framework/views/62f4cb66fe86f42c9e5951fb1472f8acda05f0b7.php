
<?php $__env->startSection('title'); ?>
  Tambah Pembinaan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Tambah Pembinaan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
  .modal-content {
    height: auto;
    min-height: 30%;
    border-radius: 0;
    width: 100%;
    margin: 0%;
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
                  <div class="card-header">
                  <div class="row">
                      <div class="col-md-12">
                        <h4 class="card-title">Buat Baru Pembinaan</h4>
                        <hr>
                      </div>
                  </div>
                  </div>
                    <div class="card-body">

                        <?php if($errors->any()): ?>
                            <ul class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>

                        <?php echo Form::open(['url' => '/pembinaan/pembinaan', 'class' => 'form-horizontal','id' => 'simpan', 'files' => true]); ?>


                        <?php echo $__env->make('pembinaan.pembinaan.form', ['formMode' => 'create'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                      <hr style="margin-bottom: 1px;">
                      
                      <div class="row">
                        <?php echo Form::label('penyelengara', 'Peserta Linmas :', ['class' => 'col-md-3 col-form-label','style' => 'margin-bottom: -1px;']); ?>

                        <div class="col-md-12" style="text-align:right;margin-bottom: -9px;">
                            <div class="form-group" style="margin-top: -29px;">
                                  <button class="btn btn-success btn-sm" style="padding: 3px;font-size: 11px;" data-toggle="modal" data-target="#Cari" onclick="searchData()" type="button">Tambahkan</button>
                                  <button class="btn btn-danger btn-sm" style="padding: 3px;font-size: 11px;" data-toggle="modal" onclick="DeleteTemp()" type="button">Hapus</button>
                                  <input type="hidden" name="id_sk" id="id_sk">
                            </div>
                        </div>
                       </div>
                        <div>
                              <table class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                        <th style="text-align:center;">No Anggota</th>
                                        <th>Nama / Jenis Kelamin / Tgl Lahir</th>
                                        <th>Alamat</th>
                                        <th>No KTP / NO HP</th>
                                        <th style="width: 8%;text-align: left;">Ukuran</th>
                                        <th >Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody id="tmpBody">
                                <?php $__currentLoopData = $tempPembinaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="text-align: center;line-height: 40px;"><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td style="text-align: center;">
                                          <div class="form-check" style="padding-left: 0rem;">
                                            <label class="form-check-label" style="padding-left: 30px;">
                                              <input type="checkbox" class="checkbox" value="<?php echo e($item->Ids); ?>">
                                              <span class="form-check-sign"></span>
                                            </label>
                                          </div>
                                      </td>
                                        <td style="text-align: center;"><?php echo e($item->no_angota); ?></td>
                                        <td>- <?php echo e($item->nama); ?> <br>
                                            - <?php echo e($item->jenis_kelamin); ?> <br>
                                            - <?php echo e($item->tempat_lahir); ?>, <?php echo e($item->tgl_lahir); ?></td>
                                        <td>   <?php echo e($item->alamat); ?>

                                          <br> Rt <?php echo e($item->rt); ?> - Rw <?php echo e($item->rw); ?>

                                          <br> <?php echo e($item->alamat_kecamatan); ?>

                                          <br> <?php echo e($item->alamat_kelurahan); ?>

                                        </td>
                                        <td style="width: 13%;">- <?php echo e($item->no_ktp); ?>

                                          <br>- <?php echo e($item->hp); ?>

                                        </td>
                                        <td style="text-align: left;">Baju : <?php echo e($item->uk_baju); ?><br> Sepatu : <?php echo e($item->uk_sepatu); ?>

                                        </td>
                                        <td>
                                          <br>- <?php echo e($item->keterangan); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>


                        <div class="form-group">
                          <hr>
                          <div class="row">
                            <div class="col-md-2" style="margin-left: 13%;">
                        <!--       <a href="<?php echo e(url('/posJaga/pos-jaga')); ?>" title="Back" class= "btn btn-primary" style= "width: 100%;font-size: 17px;"> -->
                                <?php echo Form::submit('Simpan', ['id' => 'simpans','onclick' => 'SimpanBtn()','class' => 'btn btn-primary','style' => 'width: 100%;font-size: 17px;']); ?> 
                        <!--         Simpan -->
                              </a>

                            </div>
                            <div class="col-md-2">
                              <a href="<?php echo e(url('/pembinaan/pembinaan')); ?>" title="Back" class= "btn btn-danger" style= "width: 100%;font-size: 17px;">
                                Batal
                              </a>
                            </div>
                          </div>
                        </div>

                        <?php echo Form::close(); ?>


                      <script type="text/javascript">
                          function SimpanBtn() {

                        if ($('#nama').val()== '' || $('#lokasi').val() == '' || $('#tanggal_mulai').val() == '' || $('#tanggal_selesai').val() == '') {
                           document.getElementById("simpans").disabled = false;
                           swal("Maaf", "Lengkapi Data", "error");
                        }else{
                          document.getElementById("simpans").disabled = true;
                          document.getElementById("simpans").disabled = true;
                          document.getElementById("simpan").submit();

                        }
                           
                      }
                      </script>


                    </div>
                </div>
            </div>
        </div>
    </div>



                  <div class="modal fade " id="Cari" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" style="text-align: -webkit-center;padding-left: 0px !important;">
                        <div class="modal-dialog modal-notice" role="document">
                          <div class="modal-content">
                            <div class="modal-header" style="text-align:left;display:inline-flex !important;">
                              <h5 class="modal-title" id="exampleModalLabel">Anggota Linmas</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
								<div class="row">
			                      <div class="col-md-12">
			                        <div class="">
			                          <div class="row">
			                            <div class="col-md-12">
			                              <div class="row">
			                                <div class="col-md-1">
			                                  <span>Kecamatan </span>
			                                </div>
			                                <div class="col-md-3">
			                                  <?php echo Form::select('id_kecamatan', $Kecamatan, null, ('required' == 'required') ? ['id' => 'id_kecamatan','style' => 'width:100%;margin-bottom: 2%;','class' => 'form-control','onChange' => 'ChangeKecamatan()'] : ['class' => 'form-control']); ?>

			                                </div>
			                              </div>
			                            </div>
			                            <div class="col-md-12">
			                              <div class="row">
			                                <div class="col-md-1">
			                                  <span>Kelurahan </span>
			                                </div>
			                                <div class="col-md-3">
			                                  <?php echo Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['id' => 'id_kelurahan','style' => 'width:100%;margin-bottom: 2%;','class' => 'form-control'] : ['class' => 'form-control']); ?>

			                                </div>
			                              </div>

			                            </div>

			                             <div class="col-md-12">
			                               <div class="row">
										    <div class="col-md-1">
			                                  <span>Jabatan </span>
			                                </div>
			                                 <div class="col-md-5">
			                                   <?php echo Form::select('jabatan', $Jabatan, null, ('required' == 'required') ? ['id' => 'jabatan','class' => 'form-control', 'required' => 'required','style' => 'width:100%;margin-bottom: 2%;'] : ['class' => 'form-control']); ?>

			                                 </div>
			                               </div>
			                         
			                            </div>

			                            <div class="col-md-12">
			                              <div class="row">

			                                <div class="col-md-1">
			                                  <span>Nama </span>
			                                </div>
			                                <div class="col-md-3">
			                                  <?php echo Form::text('namaLinmas', null, ('required' == 'required') ? ['id' => 'namaLinmas','class' => 'form-control', 'required' => 'required','style' => 'margin-bottom: 2%;'] : ['class' => 'form-control']); ?>

			                                </div>

			                                <div class="col-md-2" style="max-width: 11.666667%;">
			                                  <span>Nomor Anggota</span>
			                                </div>
			                                <div class="col-md-2">
			                                  <?php echo Form::text('noAnggota', null, ('required' == 'required') ? ['id' => 'noAnggota','class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

			                                </div>
			                              </div>
			                            </div>

			                        </div>
			                      <div class="row" style="margin-bottom: 1%;">
			                        <div class="col-md-1">
			                        </div>
			                        <div class="col-md-7">
			                          <div style="margin-top: 2%;margin-left: -2px;margin-bottom: 3% width: 100%;">
			                            <button onclick="searchData()" id="search" class="btn btn-info btn-sm" style="margin:  0%; margin-left:  1%;font-size: 11px;">Search</button>
			                          </div>
			                        </div>
			                      </div>

			                      </div>
			                    </div>
			                    </div>

                              <table class="table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr style="font-size: 12px;">
                                        <th style="text-align: center;width: 5%;line-height: 25px;">#</th>
                                         <th style="text-align:center;">No Anggota</th>
                                        <th style="padding-left: 10px;">Nama / Jenis Kelamin / Tgl Lahir</th>
                                        <th style="padding-left: 10px;">Alamat</th>
                                        <th style="text-align: center;width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                <?php $__currentLoopData = $linmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr style="font-size: 12px;">
                                        <td style="text-align: center;width: 5%;line-height: 25px;"><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td style="text-align: center;"><?php echo e($item->no_angota); ?></td>
                                        <td style="padding-left: 10px;">- <?php echo e($item->nama); ?> <br>
                                            - <?php echo e($item->jenis_kelamin); ?> <br>
                                            - <?php echo e($item->tempat_lahir); ?>, <?php echo e($item->tgl_lahir); ?></td>
                                        <td style="padding-left: 10px;">   <?php echo e($item->alamat); ?>

                                          <br> Rt <?php echo e($item->rt); ?> - Rw <?php echo e($item->rw); ?>

                                          <br> <?php echo e($item->alamat_kecamatan); ?>

                                          <br> <?php echo e($item->alamat_kelurahan); ?>

                                        </td>
                                        <td style="text-align: center;width: 15%;">
                                          <button type="submit" class="btn btn-success btn-sm" onclick="TambahkanLinmas('<?php echo e(Auth::user()->id); ?>','<?php echo e($item->id); ?>','<?php echo e($item->no_angota); ?>')" style="font-size: 11px;">Tambahkan</button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination" style="margin-top: 1%;"> 
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>

    <script src="<?php echo e(asset('assets/js/core/jquery.min.js')); ?>"></script>

      <script type="text/javascript">
    $( document ).ready(function() {
        pagePaginathing();
    });

    function TambahkanSk(nomor,id) {
       $('#nomor_sk').val(nomor);
       $('#id_sk').val(nomor);
      $('#Cari').on('hidden.bs.modal', function (e) {
        $(this).find("input,textarea,select").val('').end();
       });
      $('#Cari').modal('hide');
    }

    function DeleteTemp(){
      var id = [];
      var hakAkses  = $("#hakAkses").val();
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
            url: '/Delete/tmplinmas',
            type:"GET",
            data: 'ids='+id,
            success:function(data) {
              $('#loading').remove();
              refreshTableTmp();
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

     function refreshTableTmp() {
        var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
        if ( $('#loading').length ) {
          $('#loading').remove();
        }
          $.ajax({
          url: '/pembinaan/refreshTableTmp',
            type: "GET",
            dataType: "json",
            success:function(data){
              $('#tmpBody').empty();
              $('#loading').remove();
              var noColumn = 1;
              $.each(data, function(index, element){

                $('#tmpBody').append("<tr><td style='text-align: center;line-height: 40px;'>"+ noColumn +"</td><td style='text-align: center;'><div class='form-check' style='padding-left: 0rem;'><label class='form-check-label' style='padding-left: 30px;'><input type='checkbox' class='checkbox' value='"+element.Ids+"'><span class='form-check-sign'></span></label></div></td><td style='text-align: center;'>"+element.no_angota+"</td><td>- "+element.nama+" <br>- "+element.jenis_kelamin+" <br>- "+element.tgl_lahir+", "+element.tempat_lahir+"</td><td>"+element.alamat+"<br> Rt "+element.rt+" - Rw "+element.rw+"<br> "+element.alamat_kecamatan+"<br> "+element.alamat_kelurahan+"</td><td style='width: 13%;'>- "+element.no_ktp+"<br>- "+element.hp+"</td><td style='text-align: left;'>Baju : "+element.uk_baju+"<br> Sepatu : "+element.uk_sepatu+" </td><td><br>- "+element.keterangan+"</td></tr>");

                noColumn = noColumn + 1;
              });
            }
          });
    }

     function searchData() {
	   var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
        if ( $('#loading').length ) {
          $('#loading').remove();
        }
        $('#loadingData').append(loader);
              
          var jmlData = 10;
          $.ajax({
          url: '/pembinaan/refreshTableLinmas',
            data: {
              id_kecamatan: $("#id_kecamatan").val(),
              id_kelurahan: $("#id_kelurahan").val(),
              jabatan: $("#jabatan").val(),
              namaLinmas: $("#namaLinmas").val(),
              noAnggota: $("#noAnggota").val()
            },
            type: "GET",
            dataType: "json",
            success:function(data){
              $('#tbody').empty();
              $('#loading').remove();
              var noColumn = 1;
              $.each(data, function(index, element){


                $('#tbody').append("<tr style='font-size: 12px;'><td style='text-align: center;width: 5%;line-height: 25px;'>"+noColumn+"</td><td style='text-align: center;'>"+element.no_angota+"</td><td style='padding-left: 10px;'>- "+element.nama +" <br>- "+element.jenis_kelamin+" <br>- "+element.tempat_lahir+", "+element.tgl_lahir+"</td><td style='padding-left: 10px;'>"+element.alamat+"<br> Rt "+element.rt+" - Rw "+element.rw+"<br> "+element.alamat_kecamatan+"<br> "+element.alamat_kelurahan+" </td><td style='text-align: center;width: 15%;'><button type='submit' class='btn btn-success btn-sm' onclick=TambahkanLinmas('"+<?php echo e(Auth::user()->id); ?>+"','"+element.id+"','"+element.no_angota+"') style='font-size: 11px;'>Tambahkan</button></td></tr>");
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

    function TambahkanLinmas(id_user, id, no_angota){

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
            url: '/pembinaan/temp',
            type:"GET",
            data:{
               id:id,
               id_user:id_user,
               no_angota:no_angota
            },
            success:function(data) {
               $('#loading').remove();
               $('#Cari').on('hidden.bs.modal', function (e) {
                $(this).find("input,textarea,select").val('').end();
               });
              $('#Cari').modal('hide')
              searchData();
              refreshTableTmp();
            }
        });

    
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

  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>