
<?php $__env->startSection('title'); ?>
  Buat Baru Kategori Laporan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Buat Baru Kategori Laporan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row" style="border-bottom: 1px solid #94949454">
                        <h4 class="card-title">Buat Baru Kategori Laporan</h4>
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

                        <?php echo Form::open(['url' => '/katLaporan/katLaporan', 'class' => 'form-horizontal', 'files' => true]); ?>


                        <?php echo $__env->make('katLaporan.katLaporan.form', ['formMode' => 'create'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <button type="button" class="btn btn-primary" id="insKatLaporan" name="insKatLaporan">SIMPAN</button>
                        <a href="<?php echo e(url('katLaporan/katLaporan')); ?>">
                          <button class="btn btn-danger" type="button">BATAL</button>
                        </a>
                        <?php echo Form::close(); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>