<?php $__env->startSection('title'); ?>
  Data Anggota Linmas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
    Data Anggota Linmas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                          <h4 class="card-title">Data Anggota Linmas</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-3" style="text-align:right;">
                          
                          <a href="<?php echo e(url('/linmas/linmas/create')); ?>" class="btn btn-success btn-sm" title="Add New Kecamatan">
                              
                              Baru
                          </a>
                          <a onclick="editData()" class="btn btn-warning btn-sm" title="Edit New Kecamatan" style="color:white;">
                              
                              Edit
                          </a>
                          <a onclick="DeleteData()" class="btn btn-danger btn-sm" title="Edit New Kecamatan" style="color:white;">
                              
                              Hapus
                          </a>
                        </div>
                    </div>
                    </div>
                    <div class="card-body"  style="padding: 0px 15px 10px !important;">
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
                                  <?php echo Form::select('id_kecamatan', $Kecamatan, null, ('required' == 'required') ? ['id' => 'id_kecamatan','style' => 'width:100%;margin-bottom: 2%;','class' => 'form-control','onChange' => 'ChangeKecamatan()'] : ['class' => 'form-control']); ?>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-5">
                                  <span>Kelurahan </span>
                                </div>
                                <div class="col-md-7">
                                  <?php echo Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['id' => 'id_kelurahan','style' => 'width:100%;margin-bottom: 2%;','class' => 'form-control'] : ['class' => 'form-control']); ?>

                                </div>
                              </div>

                            </div>
                        </div>

                        <div class="row">
                          <div class="col-md-5">
                            <span>Data/ halaman </span>
                          </div>
                          <div class="col-md-3">
                            <input type="text" name="paging" class="form-control" placeholder="25" value="<?php echo e(request('paging')); ?>" style="text-align: center;font-size: 15px; border: 1px solid #b5daff;width: 100%;">
                          </div>
                          <div class="col-md-2">
                          </div>
                      </div>


                      <div class="row" style="margin-bottom: 1%;">
                        <div class="col-md-5">
                        </div>
                        <div class="col-md-7">
                          <div style="margin-top: 2%;margin-left: -2px;margin-bottom: 3% width: 100%;">
                            <button class="btn btn-info btn-sm" style="margin:  0%; margin-left:  1%;">Search</button>
                          </div>
                        </div>
                      </div>

                      </div>
                    </div>
                    </div>

                      




                        <div>
                              <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;width: 0%;">#</th>
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
                                        <th style="width: 6%;text-align: center;">Status</th>
                                        <th >Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $linmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td style="text-align: center;">
                                          <div class="form-check" style="padding-left: 0rem;">
                                            <label class="form-check-label" style="padding-left: 30px;">
                                              <input type="checkbox" class="checkbox" value="<?php echo e($item->id); ?>">
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
                                        <td style="text-align: center;"><?php if($item->status_linmas == 1): ?>
                                                  Ya
                                            <?php elseif($item->status_linmas == 2): ?>
                                                  Tidak
                                            <?php else: ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                          <br>- <?php echo e($item->keterangan); ?>

                                        </td>
                                        
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $linmas->appends(['paging' => Request::get('paging')])->render(); ?> </div>
                            

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

    function DeleteData(){
      swal({
        title: 'Are you sure?',
        text: 'You will not be able to recover this imaginary file!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, keep it',
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false
      }).then(function() {
        swal({
          title: 'Deleted!',
          text: 'Your imaginary file has been deleted.',
          type: 'success',
          confirmButtonClass: "btn btn-success",
          buttonsStyling: false
        }).catch(swal.noop);
        var id = [];
        $(':checkbox:checked').each(function(i){
          id[i] = $(this).val();
        });
        // $.ajax({
        //     url: '/linmas/delete/'+id,
        //     type:"GET",
        //     dataType:"json",
        //
        //     success:function(data) {
        //     }
        // });
      }, function(dismiss) {
        // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
        if (dismiss === 'cancel') {
          swal({
            title: 'Cancelled',
            text: 'Your imaginary file is safe :)',
            type: 'error',
            confirmButtonClass: "btn btn-info",
            buttonsStyling: false
          }).catch(swal.noop);
        }
      }).catch(swal.noop);
    }

    function editData() {
      var id = [];
      $(':checkbox:checked').each(function(i){
        id[i] = $(this).val();
      });
      if(id.length === 0){ //tell you if the array is empty
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
      }else if(id.length > 1 ){
        swal("Maaf", "Pilih data lebih Dari 1", "error");
      }else{
        // location.href="/linmas/linmas/"+id+"/edit";
        location.href="/linmas/linmas/create";
      }

    }

    function ChangeKecamatan() {

          var id_kecamatan = $('#id_kecamatan').val();
          if(id_kecamatan) {
              $.ajax({
                  url: '/states/get/'+id_kecamatan,
                  type:"GET",
                  dataType:"json",
                  beforeSend: function(){
                      $('#loader').css("visibility", "visible");
                  },

                  success:function(data) {

                      $('select[name="id_kelurahan"]').empty();

                      $.each(data, function(key, value){

                          $('select[name="id_kelurahan"]').append('<option value="'+ key +'">' + value + '</option>');

                      });
                  },
                  complete: function(){
                      $('#loader').css("visibility", "hidden");
                  }
              });
          } else {
              $('select[name="id_kelurahan"]').empty();
          }


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