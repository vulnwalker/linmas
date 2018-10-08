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
                              <button class="btn btn-danger pull-right">Hapus</button>
                              <a href="<?php echo e(url('jenisLinmas/jenis-linmas/create')); ?>">
                                <button class="btn btn-warning pull-right">Edit</button>
                              </a>
                              <a href="<?php echo e(url('jenisLinmas/jenis-linmas/create')); ?>">
                                <button class="btn btn-success pull-right" type="button">Baru</button>
                              </a>
                            </div>
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
                                <tbody>
                                <?php $__currentLoopData = $jenislinmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="text-align:center"><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td style="width: 3%;">
                                          <div class="form-check mt-3" style="padding: unset!important;">
                                            <div class="form-check" style="width: 1px; height: 36px; padding: unset!important;">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="checkbox" value="">
                                                <span class="form-check-sign"></span>
                                              </label>
                                            </div>
                                          </div>
                                        </td>
                                        <td></td>
                                        <td><?php echo e($item->uraian); ?></td>
                                        
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $jenislinmas->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
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