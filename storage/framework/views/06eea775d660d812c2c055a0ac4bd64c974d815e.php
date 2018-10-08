
<?php $__env->startSection('title'); ?>
  Tambah Pos Jaga 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Tambah Pos Jaga
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  <div class="row">
                      <div class="col-md-12">
                        <h4 class="card-title">Buat Baru Pos Jaga</h4>
                        <hr>
                      </div>
                  </div>
                  </div>
                    <div class="card-body">


                        <?php echo Form::open(['url' => '/posJaga/pos-jaga', 'class' => 'form-horizontal', 'files' => true]); ?>


                        <?php echo $__env->make('posJaga.pos-jaga.form', ['formMode' => 'create'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <?php echo Form::close(); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>