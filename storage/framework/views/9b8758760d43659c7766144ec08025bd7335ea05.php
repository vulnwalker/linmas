
<?php $__env->startSection('title'); ?>
  Edit Pelaporan #<?php echo e($pelaporan->judul); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Edit Pelaporan #<?php echo e($pelaporan->judul); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Pelaporan #<?php echo e($pelaporan->judul); ?></div>
                    <div class="card-body">

                        <?php if($errors->any()): ?>
                            <ul class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>

                        <?php echo Form::model($pelaporan, [
                            'method' => 'PATCH',
                            'url' => ['/pelaporan/pelaporans', $pelaporan->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]); ?>


                        <?php echo $__env->make('pelaporan.pelaporans.form', ['formMode' => 'edit'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <?php echo Form::close(); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>