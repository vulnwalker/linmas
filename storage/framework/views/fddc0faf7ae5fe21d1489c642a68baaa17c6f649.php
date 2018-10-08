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
    <title>HOME</title>
</head>
<body class="bg-dark fg-white">
    <div class="container-fluid start-screen no-overflow">
        <h1 class="start-screen-title" style="line-height: unset;">LINMAS</h1>
        <div class="tiles-area" style="margin-top: -25px;">
            <!-- <div class="tiles-grid tiles-group size-2 fg-white" data-group-title="General"> -->
            <div class="tiles-grid tiles-group size-2 fg-white" style="margin-left: 80px;">
                <a href="<?php echo e(url('/wilayah/wilayah')); ?>" target="_blank" data-role="tile" class="bg-cyan fg-white" data-size="medium">
                    <img src="<?php echo e(asset('assets/images/wilayah.png')); ?>" class="icon" style="height: 80%; max-width: 80%;">
                    <span class="branding-bar">WILAYAH</span>
                </a>
                <a href="<?php echo e(url('/jenisLinmas/jenis-linmas')); ?>" target="_blank" data-role="tile" class="bg-indigo fg-white">
                    <img src="<?php echo e(asset('assets/images/jenis linmas.png')); ?>" class="icon" style="height: 80%; max-width: 80%;">
                    <span class="branding-bar">JENIS LINMAS</span>
                </a>
                <a href="<?php echo e(url('/tugas/tugas')); ?>" target="_blank" data-role="tile" class="bg-orange fg-white" data-size="wide">
                    <img src="<?php echo e(asset('assets/images/jenis tugas.png')); ?>" class="icon" style="height: 80%; max-width: 80%;">
                    <span class="branding-bar">JENIS TUGAS</span>
                </a>
                <a href="<?php echo e(url('/jenisAset/jenisAset')); ?>" target="_blank" data-role="tile" data-size="wide" class="bg-emerald fg-white">
                    <img src="<?php echo e(asset('assets/images/jenis aset.png')); ?>" class="icon" style="height: 80%; max-width: 80%">
                    <span class="branding-bar">JENIS ASSETS</span>
                </a>
            </div>

            <!-- <div class="tiles-grid tiles-group size-1 fg-white" data-group-title="Office"> -->
            <div class="tiles-grid tiles-group size-2 fg-white">
                <div data-role="tile" data-size="large" data-effect="animate-slide-left">
                    <div class="slide" data-cover="<?php echo e(asset('assets/images/Linmas.jpg')); ?>"></div>
                    <div class="slide" data-cover="<?php echo e(asset('assets/images/Linmas2.jpg')); ?>"></div>
                    <div class="slide" data-cover="<?php echo e(asset('assets/images/Linmas3.jpg')); ?>"></div>
                    <div class="slide" data-cover="<?php echo e(asset('assets/images/Linmas4.jpg')); ?>"></div>
                    <div class="slide" data-cover="<?php echo e(asset('assets/images/Linmas5.jpg')); ?>"></div>
                    <span class="branding-bar">Gallery</span>
                </div>
                <a href="<?php echo e(url('/aset/aset')); ?>" target="_blank" data-role="tile" data-size="wide" class="fg-white">
                    <img src="<?php echo e(asset('assets/images/data aset.png')); ?>" class="icon" style="height: 80%; max-width: 80%;">
                    <span class="branding-bar">DATA ASSETS</span>
                </a>
            </div>

            <div class="tiles-grid tiles-group size-2 fg-white">
                <div data-role="tile" data-size="wide" class="bg-cobalt">
                    <img src="<?php echo e(asset('assets/images/rekurtment linmas.png')); ?>" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">REKURTMENT LINMAS</span>
                </div>
                <a href="<?php echo e(url('linmas/linmas')); ?>" target="_blank" data-role="tile" data-size="medium" class="bg-indigo">
                    <img src="<?php echo e(asset('assets/images/anggota linmas.png')); ?>" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">ANGGOTA LINMAS</span>
                </a>
                <a href="<?php echo e(url('penugasan/penugasan')); ?>" target="_blank" data-role="tile" data-size="medium" class="bg-teal fg-white">
                    <img src="<?php echo e(asset('assets/images/penugasan.png')); ?>" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">PENUGASAN</span>
                </a>
                <a href="<?php echo e(url('linmas/linmas')); ?>" data-role="tile" target="_blank" data-size="medium" class="fg-white">
                    <img src="<?php echo e(asset('assets/images/linmas.png')); ?>" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">LINMAS</span>
                </a>
                <a href="<?php echo e(url('posJaga/pos-jaga')); ?>" data-role="tile" target="_blank" data-size="medium" class="bg-indigo fg-white">
                    <img src="<?php echo e(asset('assets/images/post jaga.png')); ?>" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">POST JAGA</span>
                </a>
            </div>

            <div class="tiles-grid tiles-group size-2 fg-white">
                <a href="#" data-role="tile" class="bg-indigo fg-white" data-size="wide">
                    <img src="<?php echo e(asset('assets/images/username.png')); ?>" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">USERNAME</span>
                </a>
                <div data-role="tile" class="bg-crimson fg-white" data-size="wide">
                    <img src="<?php echo e(asset('assets/images/ganti password.png')); ?>" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">GANTI PASSWORD</span>
                </div>
                <a href="<?php echo e(url('/logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-role="tile" data-size="wide" class="bg-grayBlue fg-white">
                    <img src="<?php echo e(asset('assets/images/logout.png')); ?>" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">LOGOUT</span>
                </a>
                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                  <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('assets/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/metro.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/start.js')); ?>"></script>
</body>
</html>