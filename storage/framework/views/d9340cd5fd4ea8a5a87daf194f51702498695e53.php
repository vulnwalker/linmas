  <?php $__env->startSection('title'); ?>
    SILIMAS Dasboard
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('judul'); ?>
    Dasboard
  <?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
  <div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h4 class="card-title">Global Sales by Top Locations</h4>
          <p class="card-category">All products that were shipped</p>
        </div>
        <div class="card-body ">
          <div class="row">
            <div class="col-md-12">
              Aplikasi Radikal
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>