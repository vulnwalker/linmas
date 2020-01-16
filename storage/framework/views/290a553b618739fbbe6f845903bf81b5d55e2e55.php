
<?php $__env->startSection('title'); ?>
  Data Administrasi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
    Data Administrasi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
                              <a href="<?php echo e(url('adminis/adminis/create')); ?>">
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
                          
                          <select class="form-control" id="kd_kec" name="kd_kec">
                            <option value="">--- SELECT ---</option>
                            <?php $__currentLoopData = $slcKd_kec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($key->kd_kec); ?>"><?php echo e($key->nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>

                        <div class="col-md-1">
                          <label class="control-label">KELURAHAN</label>
                        </div>
                        <div class="col-md-2">
                          
                          <select class="form-control" id="kd_kel" name="kd_kel">
                            <option value="">--- SELECT ---</option>
                            
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>