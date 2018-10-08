<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/logo-serang.png')); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Styles -->

      <?php echo $__env->make('admin.assets.cssFile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <style type="text/css">
        .card {
            margin-bottom: 3px;
            margin-left: -15px;
            margin-right: -10px;
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            padding: 0px 7px;
            vertical-align: unset;
        }

      </style>
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/loading.css')); ?>">
</head>
<body>
    <div class="wrapper ">
       
      <div class="main-panel" style="width:  100%;">
        <?php echo $__env->make('admin.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>

    <!-- Scripts -->
    
  <?php echo $__env->make('admin.assets.jsFile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>
