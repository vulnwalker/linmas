<?php $__env->startSection('title'); ?>
  Edit Pos Jaga #<?php echo e($posjaga->nama); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Edit Pos Jaga #<?php echo e($posjaga->nama); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                  <div class="row">
                      <div class="col-md-12">
                        <h4 class="card-title">Edit Pos Jaga #<?php echo e($posjaga->nama); ?></h4>
                        <hr>
                      </div>
                  </div>
                  
                  </div>
                    <div class="card-body">

                        <?php echo Form::model($posjaga, [
                            'method' => 'PATCH',
                            'url' => ['/posJaga/pos-jaga', $posjaga->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]); ?>


                        <?php echo $__env->make('posJaga.pos-jaga.form', ['formMode' => 'edit'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <?php echo Form::close(); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>