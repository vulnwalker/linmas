<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Styles -->

      <?php echo $__env->make('admin.assets.cssFile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
    <div class="wrapper ">
       
      <div class="main-panel">
        <?php echo $__env->make('admin.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>

    <!-- Scripts -->
    
  <?php echo $__env->make('admin.assets.jsFile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>
