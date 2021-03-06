<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
      <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/logo-serang.png')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/PrintCard/css/style.css')); ?>">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <title>Print Card Linmas</title>
      <style type="text/css">
        @media  print{@page  {size: landscape}}
      </style>
</head>

<!-- <body onload="window.print()"> -->
<body>
  <div class="container-fluid">
    <div class="row">
    <?php $__currentLoopData = $pengesahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-3" style="margin-bottom: 1%;margin-right: 8%;">
  <div class="card" style="margin: 0;height: 53.98mm !important;width: 85.60mm !important;border: 1px solid #969494;box-shadow: unset;">
  	      <table style="background: #f9f9f9;">
	          <tr>
	            <td style="font-weight: bold;">
	            	<img src="<?php echo e(asset('assets/PrintCard/linmas.png')); ?>" style="width: 26px;padding-left: 3px;vertical-align: middle;">
	            </td>
	            <td style="
					    font-weight: bold;
					    padding: 2%;
					    width: 100%;
					    text-align: center;
					    text-transform: uppercase;
					">Kartu Anggota Satlinmas
				</td>
				<td>
					<img src="<?php echo e(asset('assets/PrintCard/serang.png')); ?>" style="width: 20px;vertical-align: middle;">
				</td>
	            <td>
				<img src="<?php echo e(asset('assets/PrintCard/satpolpp.png')); ?>" style="width: 23px;vertical-align: middle;padding-right: 3px;">
				</td>
	          </tr>
         </table>
    <div class="header" style="background-color: #85cd85;">
        <div class="title" style="background: #85cd85;text-align: right;width: 173%;">
        
          <div style="margin-bottom: 14%;">
    		  <?php if($item->foto): ?>  
    		   <div class="player-thumb" style="background-image: url(<?php echo e(url('assets/img/linmas',$item->foto)); ?>); 
    		   width: 75px;height: 75px;border-radius: 0%;margin-bottom: -5px;"></div>
    		  
    		  <?php else: ?>
    		 <div class="player-thumb" style="background-image: url(<?php echo e(url('assets/PrintCard/default.png')); ?>); 
    		   width: 75px;height: 75px;border-radius: 0%;margin-bottom: -5px;"></div>
    		  <?php endif; ?>
          <p style="font-size: 10px;color: white;margin-top: 0px;text-align: center;margin-bottom: 25px;"><?php echo e($item->tanggal); ?></p>
          <p style="font-size: 10px;color: white;margin-top: 0px;text-align: center;">Kepala Satpol PP</p>
          </div>
      </div>
    </div>
    <div class="content" style="height: 240px;margin-top: -70%;padding-left: 2%;font-size: 10px;color: white;background: #31010100;padding-top: 0%;">
        <table>
          <tr>
            <td style="font-weight: bold;">Nama</td>
            <td>:</td>
            <td><?php echo e($item->nama); ?></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Nomor</td>
            <td>:</td>
            <td><?php echo e($item->no_angota); ?></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Jabatan</td>
            <td>:</td>
            <td>
            	<?php if($item->jabatan): ?>
            	 <?php echo e($item->jabatan); ?>

            	<?php else: ?>
            	 Tidak Memiliki Jabatan
            	<?php endif; ?>
            </td>
          </tr>
          <tr style="vertical-align: baseline;">
            <td  style="font-weight: bold;">Alamat</td>
            <td>:</td>
            <td><?php echo e($item->alamat); ?> <br> Kec <?php echo e($item->alamat_kecamatan); ?> <br> Kel/Des <?php echo e($item->alamat_kelurahan); ?></td>
          </tr>
<!--           <tr>
            <td style="font-weight: bold;">No KTP</td>
            <td>:</td>
            <td><?php echo e($item->no_ktp); ?></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">No HP</td>
            <td>:</td>
            <td><?php echo e($item->hp); ?></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Status </td>
            <td>:</td>
            <td><?php echo e($item->status); ?></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Agama</td>
            <td>:</td>
            <td><?php echo e($item->agama); ?></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Pendidikan</td>
            <td>:</td>
            <td><?php echo e($item->pendidikan); ?></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Jenis Kel </td>
            <td>:</td>
            <td><?php echo e($item->jenis_kelamin); ?></td> -->
          </tr>
        </table>
      </p>


    </div>
  </div>
</div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
