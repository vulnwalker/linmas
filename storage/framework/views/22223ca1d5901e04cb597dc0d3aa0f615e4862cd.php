
<?php $__env->startSection('title'); ?>
  Data Jenis Linmas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
    Data Jenis Linmas
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-6">
                        <h4 class="card-title">Data Jenis Limas</h4>
                        <p class="card-category"></p>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <button class="btn btn-danger pull-right" id="hapus" name="hapus">Hapus</button>
                            <button class="btn btn-warning pull-right" id="edit" name="edit">Edit</button>
                            <a href="<?php echo e(url('jenisLinmas/jenis-linmas/create')); ?>">
                              <button class="btn btn-success pull-right" type="button">Baru</button>
                            </a>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1">
                        <label class="control-label">JENIS LINMAS</label>
                      </div>
                      <div class="col-md-2">
                        <input type="text" name="jns_linmas" id="jns_linmas" class="form-control">
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
                    <div class="card-body"  style="padding: 0px 15px 10px !important;">
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
                                        <th style="text-align: center; width: 3%;">ID</th>
                                        <th>Jenis Linmas</th>
                                        
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                <?php $__currentLoopData = $jenislinmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="<?php echo e($value->id); ?>">
                                        <td style="text-align:center"><?php echo e(++$key); ?></td>
                                        <td style="width: 3%;">
                                          <div class="form-check mt-3" style="padding: unset!important;">
                                            <div class="form-check" style="width: 1px; height: 36px; padding: unset!important;">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="checkbox" value="<?php echo e($value->id); ?>">
                                                <span class="form-check-sign"></span>
                                              </label>
                                            </div>
                                          </div>
                                        </td>
                                        <td style="text-align: center;"><?php echo e($value->id); ?></td>
                                        <td><?php echo e($value->uraian); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('linkJS', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
           url: '/jenisLinmas/delJnsLinmas/',
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
           dataType: "json",
           // data:{id:id},
           success:function(){
            // demo.showNotification('top','right','Pilih Salah Satu Data');
            window.location.href = "http://linmas.pilar.web.id/wilayah/wilayah/create/";
           }
          });
        }
      });
      // end edit
      $('#search').on('click', function(){
        var jmlData = $('#jmlData').val();
          $.ajax({
          url: '/jenisLinmas/srcJnsLinmas/',
            data: {
              jns_linmas: $("#jns_linmas").val()
            },
            type: "GET",
            dataType: "json",
            success:function(data){
              $('#tbody').empty();
              var noColumn = 1;
              $.each(data, function(index, element){
                $('#tbody').append("<tr id="+ element.id +"><td style='text-align:center;'>"+ noColumn +"</td><td style='width: 3%;'><div class='form-check mt-3' style='padding: unset!important'><div class='form-check' style='width: 1px; height: 36px; padding: unset!important;'><label class='form-check-label'><input type='checkbox' class='checkbox' value="+ element.id +"><span class='form-check-sign'></span></label></div></div></td><td style='text-align: center;'>"+ element.id +"</td><td>"+ element.uraian +"</td></tr>");
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
    });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>