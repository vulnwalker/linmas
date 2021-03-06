<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/logo-serang.png')); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>#Print Pembinaan </title>

    <!-- Styles -->

      <?php echo $__env->make('admin.assets.cssFile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <style type="text/css">
        @page  { margin: 10px; }
        body{
          width: 21cm;
          height: 33cm;
          margin: 1px;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #000000 !important;
        }
        .table-bordered {
            border: 1px solid #000000;
        } 
        hr {
          border-top: 1px solid rgb(0, 0, 0);
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            padding: 3px 7px;
            font-size: 11px;
            vertical-align: unset;
        }

        .tablekec>tbody>tr>td, .tablekec>tbody>tr>th, .tablekec>tfoot>tr>td, .tablekec>tfoot>tr>th, .tablekec>thead>tr>td, .tablekec>thead>tr>th {
            padding: 0px;
            border: unset!important;
        }
        #thTable{
          background-color: silver!important;
          text-align: center;
        }
        .table-bordered{
          border: 1px solid white;
        }
      </style>
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/loading.css')); ?>">
</head>
<body onload="window.print()">
<table class="table table-bordered">
  <thead>
    <tr>
      <th style="text-align: center; vertical-align: middle; width: 10%; border: 1px solid white!important;">
        <img src="<?php echo e(asset('assets/PrintCard/linmas.png')); ?>" style="width: 4200%; height: 7%; max-width: 4200%;">
      </th>
      <th style="text-align: center; vertical-align: middle; font-size: 1rem; border: 1px solid white!important;">
        <span>Data Pembinaan</span>
      </th>
      <th style="text-align: center; vertical-align: middle; width: 10%; border: 1px solid white!important;">
        <img src="<?php echo e(asset('assets/PrintCard/satpolpp.png')); ?>" style="width: 4000%; height: 6%; max-width: 4000%;">
      </th>
    </tr>
  </thead>
</table>
<table class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
        <th id="thTable" style="width: 1%;">NO</th>
        <th id="thTable">NAMA KEGIATAN</th>
        <th id="thTable">LOKASI KEGIATAN</th>
        <th id="thTable">PENYELENGGARAAN</th>
        <th id="thTable">ISI KEGIATAN</th>
        <th id="thTable" style="width: 10%;">TANGGAL MULAI</th>
        <th id="thTable" style="width: 10%;">TANGGAL SELESAI</th>
    </tr>
</thead>
<tbody id="tbody">
  <?php $__currentLoopData = $pembinaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td style="text-align: center;"><?php echo e(++$key); ?></td>
      <td><?php echo e($value->nama); ?></td>
      <td><?php echo e($value->lokasi); ?></td>
      <td><?php echo e($value->penyelengara); ?></td>
      <td><?php echo e($value->kegiatan); ?></td>
      <td style="text-align: center;"><?php echo e(date("d-m-Y", strtotime($value->tanggal_mulai))); ?></td>
      <td style="text-align: center;"><?php echo e(date("d-m-Y", strtotime($value->tanggal_selesai))); ?></td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php echo $__env->make('admin.assets.jsFile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script type="text/php">
  if ( isset($pdf) ) {
    $font = $fontMetrics->get_font("helvetica", "bold");
    echo $pdf->page_text(545, 920, "Page: {PAGE_NUM} Dari {PAGE_COUNT}", $font, 8, array(0,0,0));
  }
</script>
</body>
</html>


