<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/logo-serang.png')); ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>#Print Pos Jaga </title>

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
            border: unset !important;
        }
        #thTable{
          background-color: silver!important;
          text-align: center;
        }
        .table-bordered{
          border: unset;
        }
      </style>
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/loading.css')); ?>">
</head>
<body onload="window.print()">
<table class="table table-bordered">
  <thead>
    <tr>
      <th style="text-align: center; vertical-align: middle; width: 10%; border: unset!important;" rowspan="2">
        <img src="<?php echo e(asset('assets/PrintCard/linmas.png')); ?>" style="width: 4200%; height: 7%; max-width: 4200%;">
      </th>
      <th style="text-align: center; vertical-align: middle; font-size: 1rem; border: unset!important;">
        <span>Data Pos Jaga</span>
      </th>
      <th style="text-align: center; vertical-align: middle; width: 10%; border: unset!important;" rowspan="2">
        <img src="<?php echo e(asset('assets/PrintCard/satpolpp.png')); ?>" style="width: 4000%; height: 6%; max-width: 4000%;">
      </th>
    </tr>
    <tr>
      <th style="vertical-align: middle; font-style: 0.4rem; border: unset!important; padding-top: 0px;">
        <div style="padding-left: 33%; width:50%; text-align:center; ">
          <table style="width: 100%;text-align:center; vertical-align: -webkit-center;" class="tablekec">
            <tr>
              <td style="width: 35%;">
                <span style="float:  left;">Kecamatan</span></td>
              <td style="width: 1%;">:</td>
              <td>
                <span style="float:  left;"><?php echo e($kecamatan); ?></span>
              </td>
            </tr>
            <tr>
              <td style="width: 35%;">
                <span style="float: left;">Kelurahan/Desa</span>
              </td>
            </td>
              <td style="width: 1%;">:</td>
              <td>
                <span style="float:  left;"><?php echo e($kelurahanDesa); ?></span>
              </td>
            </tr>
          </table>
        </div>
        
      </th>
    </tr>
  </thead>
</table>
<table class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
        <th id="thTable">NO</th>
        <th id="thTable">Nama Pos Jaga</th>
        <th id="thTable">Alamat / Kecamatan / Kelurahan</th>
        <th id="thTable">Konstruksi/ Luas/ Kondisi</th>
        <th id="thTable">Kepemilikan/ Luas Tanah</th>
        <th id="thTable">Aktifitas</th>
        <th id="thTable">Keterangan</th>
    </tr>
</thead>
<tbody id="tbody">
  <?php $__currentLoopData = $posJaga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
      <td><?php echo e($item->nama); ?></td>
      <td><?php echo e($item->alamat); ?><br>Kec. <?php echo e($item->alamat_kec); ?><br>Kel/Des. <?php echo e($item->alamat_kel); ?></td>
      <td>
        - <?php if($item->konstruksi == 1): ?>
          Permanen
          <?php elseif($item->konstruksi == 2): ?>
          Semi Permanen
          <?php elseif($item->konstruksi == 3): ?>
          Darurat
          <?php endif; ?> 
        <br>- <?php echo e($item->luas); ?> 
        <br>
        - <?php if($item->kondisi == 1): ?>
          Baik
          <?php elseif($item->kondisi == 2): ?>
          Kurang Baik
          <?php elseif($item->kondisi == 3): ?>
          Rusak Berat
          <?php endif; ?> 
      </td>
      <td>
        - <?php echo e($item->kepemilikan); ?>

        <br>
        - <?php echo e($item->luas_tanah); ?>

      </td>
      <td>
          <?php if($item->aktifitas == 1): ?>
          Aktif
          <?php elseif($item->aktifitas == 2): ?>
          Tidak Aktif
          <?php endif; ?> 
      </td>
      <td><?php echo e($item->keterangan); ?></td>
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


