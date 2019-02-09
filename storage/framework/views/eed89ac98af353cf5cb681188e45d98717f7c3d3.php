<?php $__env->startSection('title'); ?>
  Kecamatan <?php echo e($kecamatan->kecamatan); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Kecamatan <?php echo e($kecamatan->kecamatan); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="col-md-12">
                        <h4 class="card-title">Kecamatan <?php echo e($kecamatan->kecamatan); ?></h4>
                        <div class="card-category">
                          <a href="<?php echo e(url('/kecamatan/kecamatan')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                          <a href="<?php echo e(url('/kecamatan/kecamatan/' . $kecamatan->id . '/edit')); ?>" title="Edit Kecamatan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                          <?php echo Form::open([
                              'method'=>'DELETE',
                              'url' => ['kecamatan/kecamatan', $kecamatan->id],
                              'style' => 'display:inline'
                          ]); ?>

                              <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                      'type' => 'submit',
                                      'class' => 'btn btn-danger btn-sm',
                                      'title' => 'Delete Kecamatan',
                                      'onclick'=>'return confirm("Confirm delete?")'
                              )); ?>

                          <?php echo Form::close(); ?>

                        </div>
                      </div>
                    </div>
                    <div class="card-body">

                        <div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($kecamatan->id); ?></td>
                                    </tr>
                                    <tr><th> Kecamatan </th><td> <?php echo e($kecamatan->kecamatan); ?> </td></tr><tr><th> Alamat </th><td> <?php echo e($kecamatan->alamat); ?> </td></tr><tr><th> Telp </th><td> <?php echo e($kecamatan->telp); ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>