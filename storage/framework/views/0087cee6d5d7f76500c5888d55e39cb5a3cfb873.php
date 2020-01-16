<?php $__env->startSection('title'); ?>
  Edit Kelurahan <?php echo e($kelurahan->kelurahan); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Edit Kelurahan <?php echo e($kelurahan->kelurahan); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row">
                          <div class="col-md-1">
                            <a href="<?php echo e(url('/kelurahan/kelurahan')); ?>" title="Back"><button class="btn btn-warning btn-sm">
                              <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                            </a>
                          </div>
                          <div class="col-md-11">
                            <h4 class="card-title">Edit Kelurahan #<?php echo e($kelurahan->kelurahan); ?></h4>
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

                        <?php echo Form::model($kelurahan, [
                            'method' => 'PATCH',
                            'url' => ['/kelurahan/kelurahan', $kelurahan->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]); ?>


                        <?php echo $__env->make('kelurahan.kelurahan.form', ['formMode' => 'edit'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <?php echo Form::close(); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>