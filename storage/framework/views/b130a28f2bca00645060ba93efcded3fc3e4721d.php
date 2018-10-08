<?php $__env->startSection('title'); ?>
  Kelurahan <?php echo e($kelurahan->kelurahan); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Kelurahan <?php echo e($kelurahan->kelurahan); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="col-md-12">
                      <h4 class="card-title">Kelurahan <?php echo e($kelurahan->kelurahan); ?></h4>
                      <div class="card-category">
                        <a href="<?php echo e(url('/kelurahan/kelurahan')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="<?php echo e(url('/kelurahan/kelurahan/' . $kelurahan->id . '/edit')); ?>" title="Edit  Kelurahan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['kelurahan/kelurahan', $kelurahan->id],
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
                    <div class="card-header">Kelurahan <?php echo e($kelurahan->id); ?></div>
                    <div class="card-body">

                        <a href="<?php echo e(url('/kelurahan/kelurahan')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="<?php echo e(url('/kelurahan/kelurahan/' . $kelurahan->id . '/edit')); ?>" title="Edit Kelurahan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['kelurahan/kelurahan', $kelurahan->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Kelurahan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )); ?>

                        <?php echo Form::close(); ?>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($kelurahan->id); ?></td>
                                    </tr>
                                    <tr><th> Id Kecamatan </th><td> <?php echo e($kelurahan->id_kecamatan); ?> </td></tr><tr><th> Kelurahan </th><td> <?php echo e($kelurahan->kelurahan); ?> </td></tr><tr><th> Alamat </th><td> <?php echo e($kelurahan->alamat); ?> </td></tr>
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