<?php $__env->startSection('title'); ?>
  Buat Baru  Lokasi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Buat Baru  Lokasi
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <div class="row">
                      <div class="col-md-1">
                        <a href="<?php echo e(url('/lokasi/lokasi')); ?>" title="Back">
                          <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                        </a>
                      </div>
                      <div class="col-md-11">
                        <h4 class="card-title">Buat Baru Lokasi</h4>
                        <p class="card-category"></p>
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

                        <?php echo Form::open(['url' => '/lokasi/lokasi', 'class' => 'form-horizontal', 'files' => true]); ?>


                        <?php echo $__env->make('lokasi.lokasi.form', ['formMode' => 'create'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <?php echo Form::close(); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>