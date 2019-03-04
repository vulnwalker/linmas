

<!DOCTYPE html>
<html>
<head>
  <title>Linmas</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
        <style type="text/css">
        .table-bordered td, .table-bordered th {
            border: 1px solid #000000 !important;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }
        @page  { margin: 5px; }
      </style>

      <style type="text/css" >
        table { 
      
          border:1px solid black !important;
      }

        body{
          margin: 5px;
          margin-top: 20px;
          width:210mm;
          height: auto;
          font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
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

        .table-bordered {
            border: 1px solid #000000;
        } 
        hr {
            margin-top: 0.5%; 
            margin-bottom: 0.5%; 
            border: 0;
            border-top: 1px solid rgb(0, 0, 0);
        }


        .table {
          width: 100%;
          max-width: 100%;
          margin-bottom: 1rem;
          background-color: transparent;
          font-size: 16px;

      }

      .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05) !important;
        }


      </style>
<body>
<table class="table table-bordered" style="margin-bottom:1%; border: 1px solid white !important;">
  <thead>
    <tr style="margin-bottom:0%;">
      <th style="padding-top: 0% !important; text-align: center; vertical-align: middle; width: 10%; border: 1px solid white!important;" rowspan="1">
        <img src="<?php echo e(asset('assets/PrintCard/linmas.png')); ?>" style="width: 4200%; height: 7%; max-width: 4200%;">
      </th>
      <th style="font-style: 0.4rem; border: 1px solid white!important; padding-top: 0% !important; ">
        <div style="padding-left: 25%; width:50%; text-align:center; ">
         <span style="text-align: center;text-transform: uppercase;"><h2>Daftar Anggota Linmas</h2></span>
          <table style="margin-top: -10px;size: 11px;width: 100%;text-align:center; vertical-align: -webkit-center;border: 1px solid white!important;" class="tablekec">
            <tr>
              <td style=" width: 15%;"></td>
              <td style=" width: 35%;">
                <span style="float:  left;">Kecamatan</span></td>
              <td style="width: 5%; text-align: center;">:</td>
              <td>
                <span style="float:  left;"><?php echo e($Kecamatan); ?></span>
              </td>
            </tr>
            <tr>
              <td style=" width: 15%;"></td>
              <td style="width: 35%;">
                <span style="float: left;">Kelurahan/Desa</span>
              </td>
              <td style="width: 5%; text-align: center;">:</td>
              <td>
                <span style="float:  left;"><?php echo e($Kelurahan); ?></span>
              </td>
            </tr>
            <tr>
              <td style=" width: 15%;"></td>
              <td style="width: 35%;">
                <span style="float: left;">Status</span>
              </td>
              <td style="width: 5%; text-align: center;">:</td>
              <td>
                <span style="float:  left;"><?php echo e($statusLinmas); ?></span>
              </td>
            </tr>
          </table>
        </div>
        
      </th>

      <th style="padding-top: 0% !important; text-align: center; vertical-align: middle; width: 10%; border: 1px solid white!important;" rowspan="1">
        <img src="<?php echo e(asset('assets/PrintCard/satpolpp.png')); ?>" style="width: 4000%; height: 6%; max-width: 4000%;">
      </th>
    </tr>
  </thead>
</table>
          <table class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead style="text-transform:uppercase;background: #e2e2e2 !important;">
                <tr >
                    <th style="text-align: center;width: 1%;vertical-align: middle;">NO</th>
                    <th style="width: 19%;vertical-align: middle;">Nama/ Kelamin/ Tgl Lahir</th>
                    <th style="width: 11.4%;vertical-align: middle;">Agama / Status</th>
                    <th style="vertical-align: middle;">Alamat</th>
                    <th style="vertical-align: middle;">No KTP/ NO HP</th>
                    <th style="width: 9%;text-align: left;vertical-align: middle;">Ukuran</th>
                    <th style="width: 12%;vertical-align: middle;">Keterangan</th>
                    <th style="width: 8%;text-align: center;vertical-align: middle;">Status</th>
                </tr>
            </thead>

            <tbody id="tbody">
            <?php $__currentLoopData = $linmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td style="text-align: center;"><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                    <td><?php echo e($item->nama); ?> <br>
                        <?php echo e($item->jenis_kelamin); ?> <br>
                        <?php
                          $ExplodeTanggal = explode('/',$item->tgl_lahir);
                          $TanggalLahir =  $ExplodeTanggal[1].'-'.$ExplodeTanggal[0].'-'.$ExplodeTanggal[2];
                        ?>
                        <?php echo e($item->tempat_lahir); ?>, <?php echo e($TanggalLahir); ?></td>
                    <td>   <?php echo e($item->agama); ?>

                      <br> <?php echo e($item->pendidikan); ?>

                      <br> <?php echo e($item->status); ?>

                    </td>
                    <td>   <?php echo e($item->alamat); ?>

                      <br> Rt <?php echo e($item->rt); ?> - Rw <?php echo e($item->rw); ?>

                      <br> Kec. <?php echo e($item->alamat_kecamatan); ?>

                      <br> Kel/Des. <?php echo e($item->alamat_kelurahan); ?>

                    </td>
                    <td style="width: 13%;"><?php echo e($item->no_ktp); ?>

                      <br><?php echo e($item->hp); ?>

                    </td>
                    <td style="text-align: left;padding-right: 0% !important;">Baju : <?php echo e($item->uk_baju); ?><br> Sepatu : <?php echo e($item->uk_sepatu); ?>

                    </td>
                    <td><?php echo e($item->keterangan); ?>

                    </td>
                    <td>
                      <?php if($item->status_linmas == 1): ?>
                         Telah Disahkan
                      <?php elseif($item->status_linmas == 0): ?>
                         Belum Disahkan
                      <?php else: ?>

                      <?php endif; ?>
                    </td>
                </tr>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

        </table>



  <script type="text/php">
    if ( isset($pdf) ) {
        $font = $fontMetrics->get_font("helvetica", "bold");
        echo $pdf->page_text(545, 920, "Page: {PAGE_NUM} Dari {PAGE_COUNT}", $font, 8, array(0,0,0));
    }
</script> 

</body>

</html>
<!-- <link href="<?php echo e(asset('assets/css/paper-dashboard.min790f.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet"> -->
