
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="twitter:site" content="@metroui">
    <meta name="twitter:creator" content="@pimenov_sergey">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Metro 4 Components Library">
    <meta name="twitter:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
    <meta name="twitter:image" content="../../images/m4-logo-social.png">
    <meta property="og:url" content="https://metroui.org.ua/v4/index.html">
    <meta property="og:title" content="Metro 4 Components Library">
    <meta property="og:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="../../images/m4-logo-social.png">
    <meta property="og:image:secure_url" content="../../images/m4-logo-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="968">
    <meta property="og:image:height" content="504">
    <meta name="author" content="Sergey Pimenov">
    <meta name="description" content="The most popular HTML, CSS, and JS library in Metro style.">
    <meta name="keywords" content="HTML, CSS, JS, Metro, CSS3, Javascript, HTML5, UI, Library, Web, Development, Framework">
    <link href="<?php echo e(asset('assets/css/metro-all8e71.css?ver=@b-version')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/start.css')); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/logo-serang.png')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/loading.css')); ?>">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cretino" />

    
    <?php echo $__env->make('admin.assets.cssFile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <title>HOME</title>
    <style type="text/css">
        .start-screen-title{
            left: unset;
        }
        .tiles-area{
            width: 1280px!important;
            margin-top: -25px;
        }
        .container-fluid.start-screen.no-overflow{
            padding-top: 0px!important;
        }
        .start-screen {
            padding: 140px 80px 0 40px!important;
        }
        span.branding-bar {
            padding-left: 4px!important;
            padding-right: 0px!important;
        }
        a.bg-cyan.fg-white.tile-medium:hover {
            background-color: #8a8a8a!important;
        }
        a.bg-indigo.fg-white.tile-medium:hover{
            background-color: #8a8a8a!important;
        }
        a.bg-orange.fg-white.tile-wide:hover{
            background-color: #8a8a8a!important;
        }
        a.bg-emerald.fg-white.tile-wide:hover{
            background-color: #8a8a8a!important;
        }
        a.fg-white.tile-wide:hover{
            background-color: #8a8a8a!important;
        }
        a.bg-cobalt.tile-wide:hover{
            background-color: #8a8a8a!important;
        }
        a.bg-teal.fg-white.tile-medium:hover{
            background-color: #8a8a8a!important;
        }
        a.fg-white.tile-medium:hover{
            background-color: #8a8a8a!important;
        }
        a.bg-crimson.fg-white.tile-wide:hover{
            background-color: #8a8a8a!important;
        }
        td{
        	padding: 10px!important;
        }
        .pagination .page-item{
            border: unset;
        }
        .pagination .page-item:hover, .pagination .page-item.service:hover {
            background-color: unset;
        }
        .pagination .page-item.active{
            background-color: unset;
        }
    </style>
</head>
<body class="bg-dark fg-white" style="background-image: url(<?php echo e(asset('assets/images/argyle.png')); ?>)">

    <?php if(Auth::user()->status == 2): ?>
    <script src="<?php echo e(asset('assets/js/jquery-3.3.1.min.js')); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var loader = '<div id="loading"  style="background:  #0a0a0aeb !important;"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
            if ( $('#loading').length ) {
              $('#loading').remove();
            }
            $('#loadingData').append(loader);
            document.getElementById('logout-form').submit();
        });
    </script>
    <div id="loadingData"></div>
    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
      <?php echo csrf_field(); ?>
    </form>
    <?php else: ?>

    <div class="container-fluid start-screen no-overflow">
        <div class="grid" style="margin-bottom: 3rem;">
            <div class="row" style="margin-top: 2rem; width: 1285px;">
                <div class="cell-12" style="padding-right: 0px; padding-left: 0px;">
                    <img src="<?php echo e(asset('assets/images/linmas_logo_resize.png')); ?>" style="margin-top: 19px;" align="left">
                    <img src="<?php echo e(asset('assets/images/aplukat kite.png')); ?>" style="width: 295px;" align="left">
                    <img src="<?php echo e(asset('assets/images/alamat.png')); ?>" style="margin-top: 24px; margin-left: 10px;" align="right">
                    <img src="<?php echo e(asset('assets/images/satpol pp.png')); ?>" style="width: 75px;height: 85px;margin-top: 19px;" align="right">
                </div>
            </div>
        </div>
        <?php
            if (Auth::user()->anggota == 3) {
                $idAnggota     = "anggota";
                $hrefAnggota   = "";
            }else{
                $idAnggota     = "";
                $hrefAnggota   = "href=linmas/linmas";
            }

            if (Auth::user()->adminis == 3) {
                $idAdmin    = "adminis";
                $hrefAdmin  = "";
            }else{
                $idAdmin    = "";
                $hrefAdmin  = "href=wilayah/wilayah";
            }

            if (Auth::user()->user == 3) {
                $idUser     = "user";
                $hrefUser   = "";
            }else{
                $idUser     = "";
                $hrefUser   = "href=username/username";
            }

            if (Auth::user()->pengasahaan == 3) {
                $idPengasahan     = "pengasahan";
                $hrefPengasahan   = "";
            }else{
                $idPengasahan     = "";
                $hrefPengasahan   = "href=Pengesahan/Pengesahan";
            }

            if (Auth::user()->pembinaan == 3) {
                $idPembinaan     = "pembinaan";
                $hrefPembinaan   = "";
            }else{
                $idPembinaan     = "";
                $hrefPembinaan   = "href=pembinaan/pembinaan";
            }

            if (Auth::user()->posKamling == 3) {
                $idPosKamling     = "posKamling";
                $hrefPosKamling   = "";
            }else{
                $idPosKamling     = "";
                $hrefPosKamling   = "href=posJaga/pos-jaga";
            }

            if (Auth::user()->sapras == 3) {
                $idSapras     = "sapras";
                $hrefSapras   = "";
            }else{
                $idSapras     = "";
                $hrefSapras   = "href=sapras/sapras";
            }

            if (Auth::user()->publikasi == 3) {
                $idPublikasi     = "publikasi";
                $hrefPublikasi   = "";
            }else{
                $idPublikasi     = "";
                $hrefPublikasi   = "href=ContentPublikasi/content-publikasi";
            }

            if (Auth::user()->pelaporan == 3) {
                $idPelaporan     = "pelaporan";
                $hrefPelaporan   = "";
            }else{
                $idPelaporan     = "";
                $hrefPelaporan   = "href=pelaporan/pelaporans";
            }
        ?>
        <div class="tiles-area">
            <div class="tiles-grid tiles-group size-2 fg-white">
                <a <?php echo e($hrefAnggota); ?> target="_blank" data-role="tile" class="bg-indigo fg-white" data-size="medium" id="<?php echo e($idAnggota); ?>">
                    <img src="<?php echo e(asset('assets/images/anggota white.png')); ?>" class="icon" style="height: 80%; max-width: 80%;">
                    <span class="branding-bar">PENDATAAN</span>
                </a>
                <a <?php echo e($hrefPengasahan); ?> target="_blank" data-role="tile" class="bg-orange fg-white" data-size="medium" id="<?php echo e($idPengasahan); ?>">
                    <img src="<?php echo e(asset('assets/images/pengasahan white.png')); ?>" class="icon" style="height: 70%; max-width: 80%;">
                    <span class="branding-bar">PENGESAHAN</span>
                </a>
                <a <?php echo e($hrefSapras); ?> data-role="tile" target="_blank" data-size="medium" class="bg-red fg-white" id="<?php echo e($idSapras); ?>">
                    <img src="<?php echo e(asset('assets/images/prasarana.png')); ?>" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">SARANA PRASARANA</span>
                </a>
                <a <?php echo e($hrefPosKamling); ?> target="_blank" data-role="tile" data-size="medium" class="fg-white" id="<?php echo e($idPosKamling); ?>">
                    <img src="<?php echo e(asset('assets/images/pos jaga.png')); ?>" class="icon" style="height: 80%; max-width: 80%;">
                    <span class="branding-bar">POS KAMLING</span>
                </a>
            </div>

            <div class="tiles-grid tiles-group size-2 fg-white">
                <div data-role="tile" data-size="large" data-effect="animate-slide-left" style="cursor: default;">
                    <?php $__currentLoopData = $slcUploads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="slide" data-cover="<?php echo e(url('assets/images/upload',$value->filename)); ?>" style="background-image: url(<?php echo e(url('assets/images/upload',$value->filename)); ?>); background-size: cover; background-repeat: no-repeat; z-index: 1; left: 0px;"></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <span class="branding-bar">Gallery</span>
                </div>
            </div>

            <div class="tiles-grid tiles-group size-2 fg-white">
                <a <?php echo e($hrefPembinaan); ?> target="_blank" data-role="tile" data-size="medium" class="fg-white" id="<?php echo e($idPembinaan); ?>">
                    <img src="<?php echo e(asset('assets/images/pembinaan white.png')); ?>" class="icon" style="height: 80%; max-width: 80%">
                    <span class="branding-bar">PEMBINAAN</span>
                </a>
                <a <?php echo e($hrefPublikasi); ?> target="_blank" data-role="tile" data-size="medium" class="bg-cobalt fg-white" id="<?php echo e($idPublikasi); ?>">
                    <img src="<?php echo e(asset('assets/images/publikasi white.png')); ?>" class="icon" style="max-width: 70%; height: 70%;">
                    <span class="branding-bar">PUBLIKASI</span>
                </a>
                <a <?php echo e($hrefPelaporan); ?> target="_blank" data-role="tile" data-size="wide" class="bg-emerald fg-white" id="<?php echo e($idPelaporan); ?>">
                    <img src="<?php echo e(asset('assets/images/pelaporan white.png')); ?>" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">PELAPORAN</span>
                </a>
            </div>

            <div class="tiles-grid tiles-group size-2 fg-white">
                <a <?php echo e($hrefAdmin); ?> target="_blank" data-role="tile" class="bg-orange fg-white" data-size="medium" id="<?php echo e($idAdmin); ?>">
                    <img src="<?php echo e(asset('assets/images/adminis white.png')); ?>" class="icon" style="height: 70%; max-width: 80%;">
                    <span class="branding-bar">ADMINISTRASI</span>
                </a>
                <a <?php echo e($hrefUser); ?> target="_blank" data-role="tile" class="bg-indigo fg-white" data-size="medium" id="<?php echo e($idUser); ?>">
                    <img src="<?php echo e(asset('assets/images/username white.png')); ?>" class="icon" style="max-width: 80%; height: 70%;">
                    <span class="branding-bar">USER</span>
                </a>
                <a data-toggle="modal" data-target="#noticeModal" data-role="tile" data-size="medium" class="bg-red fg-white">
                
                    <img src="<?php echo e(asset('assets/images/ganti password.png')); ?>" class="icon" style="max-width: 70%; height: 70%;">
                    <span class="branding-bar">GANTI PASSWORD</span>
                </a>
                <a onclick="logoutSuccess()" data-role="tile" data-size="medium" class="bg-grayBlue fg-white">
                    <img src="<?php echo e(asset('assets/images/logout white.png')); ?>" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">LOGOUT</span>
                </a>
                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                  <?php echo csrf_field(); ?>
                </form>
            </div>
            <p style="color: transparent; cursor: help;">
            	hmmm.. you found me....
            </p>
            <div class="grid">
                <div class="row" style="width: 1285px;">
                    <div class="cell-12" style="text-align: center;">
                        <img src="<?php echo e(asset('assets/images/logo alamat kab serang.png')); ?>"> | <a href="<?php echo e(url('usersLogin/usersLogin')); ?>" target="_blank" style="cursor: pointer; color: white;">
                            Users Online : <span id="countLogin" name="countLogin"></span>
                        </a> | <a href="/bantuan/linmas" target="_blank" style="cursor: pointer;color: white;"> Bantuan </a>
                    </div>
                </div>
	            <div class="row" style="width: 1285px;">
	            	<div class="cell-12">
	            		<marquee style="font-size: 13px; position: relative; top: 50%; transform: translateY(-50%);">Copyright © 2018 Satuan Polisi Pamong Praja - Pemerintah Kabupaten Serang</marquee>
	            	</div>
                    
	            </div>
	        </div>

		        <!-- notice modal -->
            <div class="modal fade" id="listUsersLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-notice" style="width: 1000px; height: 400px;">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <h5 class="modal-title" id="myModalLabel" style="color: black;"><i class="nc-icon nc-key-25" style="color: black; margin-right: 10px;"></i>Users Login</h5>
                  </div>
                  <div class="modal-body">
                    <div class="instruction">
                      <div class="row">
                        <div class="col-md-12">
                          <table  class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
	                              <th style="text-align: center;width: 0%;line-height: 40px;">NO</th>
	                              <th>NAMA</th>
	                              <th>KECAMATAN</th>
	                              <th>KELURAHAN / DESA</th>
	                              <td>TANGGAL LOGIN</td>
	                              <td>TANGGAL LOGOUT</td>
                              </tr>
                            </thead>
                          	<tbody id="tbody">
                          		<?php $__currentLoopData = $slcUserLogin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      			   <tr id="<?php echo e($value->id); ?>">
                                      <td style="text-align: center;"><?php echo e(++$key); ?></td>
                                      <td style="width: 3%; display: none;">
                                        <div class="form-check mt-3" style="padding: unset!important;">
                                          <div class="form-check" style="width: 1px; height: 36px; padding: unset!important;">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="checkbox" value="<?php echo e($value->id); ?>">
                                              <span class="form-check-sign"></span>
                                            </label>
                                          </div>
                                        </div>
                                      </td>
                                      <td><?php echo e($value->nama); ?></td>
                                      <td><?php echo e($value->nm_kec); ?></td>
                                      <td><?php echo e($value->nm_kel_des); ?></td>
                                      <td><?php echo e(date("d-m-Y H:i:s", strtotime($value->login))); ?></td>
                                      <td><?php echo e(date("d-m-Y H:i:s", strtotime($value->logout))); ?></td>
                                    </tr>
                          		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          	</tbody>
                          </table>
                            <div class="pagination">
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end notice modal -->

            <!-- notice modal -->
            <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-notice" style="width: 500px; height: 400px;">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <h5 class="modal-title" id="myModalLabel" style="color: black;"><i class="nc-icon nc-key-25" style="color: black; margin-right: 10px;"></i>Ganti Password</h5>
                  </div>
                  <div class="modal-body">
                    <div class="instruction">
                      <div class="row">
                        <div class="col-md-12">
                          <strong>Password Lama</strong>
                          <input type="text" name="password" id="password" class="form-control" readonly="readonly" value="<?php echo e(Auth::user()->password2nd); ?>">
                          <input type="hidden" name="id" id="id" value="<?php echo e(Auth::user()->id); ?>">
                          <input type="hidden" name="nama" id="nama" value="<?php echo e(Auth::user()->name); ?>">
                          <input type="hidden" name="kd_kec" id="kd_kec" value="<?php echo e(Auth::user()->kd_kec); ?>">
                          <input type="hidden" name="kel_des" id="kel_des" value="<?php echo e(Auth::user()->kel_des); ?>">
                          <input type="hidden" name="nm_kec" id="nm_kec" value="<?php echo e(Auth::user()->nm_kec); ?>">
                          <input type="hidden" name="nm_kel_des" id="nm_kel_des" value="<?php echo e(Auth::user()->nm_kel_des); ?>">
                        </div>
                      </div>
                    </div>
                    <div class="instruction">
                      <div class="row">
                        <div class="col-md-12">
                          <strong>Password Baru</strong>
                          <input type="password" name="passwordBaru" id="passwordBaru" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-info btn-round" data-dismiss="modal" id="gantiPass" name="gantiPass">SIMPAN</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end notice modal -->

        </div>
    </div>
    <script src="<?php echo e(asset('assets/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/metro.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/start.js')); ?>"></script>
    <?php echo $__env->make('admin.assets.jsFile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#adminis').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#user').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#anggota').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#pengasahan').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#pembinaan').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#posKamling').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#sapras').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#publikasi').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#pelaporan').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
        });
    </script>
<script type="text/javascript">
    $(document).ready(function(){

    	// login list
    	$.ajax({
          url: '/user/loginSuccess/',
            data: {
              id: 			$("#id").val(),
              nama: 		$("#nama").val(),
              kd_kec:       $("#kd_kec").val(),
              kel_des:      $("#kel_des").val(),
              nm_kec: 	    $("#nm_kec").val(),
              nm_kel_des:   $("#nm_kel_des").val()
            },
            type: "GET",
            success:function(data){
              var resp = eval('(' + data + ')');
              document.getElementById("countLogin").innerHTML = resp.countLogin;
              // alert(resp.content);
            }
        });
    	// End login list

      $('#gantiPass').on('click', function(){
        if ($("#passwordBaru").val() == "") {
          demo.showNotification('top','right','Password Baru Tidak Boleh Kosong');
        }else{
          $.ajax({
          url: '/gantiPass/editPassword/',
            data: {
              passwordBaru:   $("#passwordBaru").val(),
              id:             $("#id").val()
            },
            type: "GET",
            // dataType: "json",
            success:function(data){
              var resp = eval('(' + data + ')');
              if (resp.err != "") {
                demo.showNotification('top','right',resp.err);
              }else{
                demo.showNotification('top','right','Successfully!');
                window.setTimeout(function(){
                  document.getElementById('logout-form').submit();
                }, 1000);
              }
            }
          });
        }
      });

    function getPageList(totalPages, page, maxLength) {
      if (maxLength < 5) throw "maxLength must be at least 5";

      function range(start, end) {
          return Array.from(Array(end - start + 1), (_, i) => i + start); 
      }

      var sideWidth = maxLength < 9 ? 1 : 2;
      var leftWidth = (maxLength - sideWidth*2 - 1) >> 1;
      var rightWidth = (maxLength - sideWidth*2 - 2) >> 1;
      if (totalPages <= maxLength) {
          // no breaks in list
          return range(1, totalPages);
      }
      if (page <= maxLength - sideWidth - 1 - rightWidth) {
          // no break on left of page
          return range(1, maxLength-sideWidth-1)
              .concat([0])
              .concat(range(totalPages-sideWidth+1, totalPages));
      }
      if (page >= totalPages - sideWidth - 1 - rightWidth) {
          // no break on right of page
          return range(1, sideWidth)
              .concat([0])
              .concat(range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
      }
      // Breaks on both sides
      return range(1, sideWidth)
          .concat([0])
          .concat(range(page - leftWidth, page + rightWidth)) 
          .concat([0])
          .concat(range(totalPages-sideWidth+1, totalPages));
    }

    $(function () {
      // Number of items and limits the number of items per page
      var numberOfItems = $("#tbody tr").length;
      var limitPerPage = 10;
      // Total pages rounded upwards
      var totalPages = Math.ceil(numberOfItems / limitPerPage);
      // Number of buttons at the top, not counting prev/next,
      // but including the dotted buttons.
      // Must be at least 5:
      var paginationSize = 13; 
      var currentPage;

      function showPage(whichPage) {
        if (whichPage < 1 || whichPage > totalPages) return false;
        currentPage = whichPage;
        $("#tbody tr").hide()
            .slice((currentPage-1) * limitPerPage, 
                    currentPage * limitPerPage).show();
        // Replace the navigation items (not prev/next):            
        $(".pagination li").slice(1, -1).remove();
        getPageList(totalPages, currentPage, paginationSize).forEach( item => {
            $("<li>").addClass("page-item")
                     .addClass(item ? "current-page" : "disabled")
                     .toggleClass("active", item === currentPage).append(
                $("<a>").addClass("page-link").attr({
                    href: "javascript:void(0)"}).text(item || "...")
            ).insertBefore("#next-page");
        });
        // Disable prev/next when at first/last page:
        $("#previous-page").toggleClass("disabled", currentPage === 1);
        $("#next-page").toggleClass("disabled", currentPage === totalPages);
        return true;
      }

      // Include the prev/next buttons:
      $(".pagination").append(
        $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
            $("<a>").addClass("page-link").attr({
                href: "javascript:void(0)"}).text("Prev")
        ),
        $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
            $("<a>").addClass("page-link").attr({
                href: "javascript:void(0)"}).text("Next")
        )
      );
      // Show the page links
      $("#tbody").show();
      showPage(1);

      // Use event delegation, as these items are recreated later    
      $(document).on("click", ".pagination li.current-page:not(.active)", function () {
          return showPage(+$(this).text());
      });
      $("#next-page").on("click", function () {
          return showPage(currentPage+1);
      });

      $("#previous-page").on("click", function () {
          return showPage(currentPage-1);
      });
    });
      // end insert
    });
    function logoutSuccess(){
	$.ajax({
      url: '/user/logoutSuccess/',
        data: {
          id: 			$("#id").val(),
          nama: 	    $("#nama").val(),
          kd_kec:       $("#kd_kec").val(),
          kel_des:      $("#kel_des").val(),
          nm_kec: 	    $("#nm_kec").val(),
          nm_kel_des:   $("#nm_kel_des").val()
        },
        type: "GET",
        success:function(data){
          var resp = eval('(' + data + ')');
          event.preventDefault();
					document.getElementById('logout-form').submit();
        }
      });
		}
</script>
<?php endif; ?>
</body>
</html>