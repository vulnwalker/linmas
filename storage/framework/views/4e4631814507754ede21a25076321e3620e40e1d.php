


<div class="sidebar" data-color="brown" data-active-color="danger">

  <div class="logo">
    <a href="http://www.creative-tim.com/" class="simple-text logo-mini">
      <div class="logo-image-small">
        <img src="../assets/img/logo-small.png">
      </div>
    </a>
    <a href="http://www.creative-tim.com/" class="simple-text logo-normal">
       SIMLINMAS
      <!-- <div class="logo-image-big">
        <img src="../assets/img/logo-big.png">
      </div> -->
    </a>
  </div>
  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" />
      </div>
      <div class="info">
        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
          <span>
            <?php echo e(Auth::user()->name); ?>

            <b class="caret"></b>
          </span>
        </a>
        <div class="clearfix"></div>
        <div class="collapse" id="collapseExample">
          <ul class="nav">
            <li>
              <a href="#">
                <span class="sidebar-mini-icon">MP</span>
                <span class="sidebar-normal">My Profile</span>
              </a>
            </li>
            <li>
              <a href="<?php echo e(url('/logout')); ?>"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="sidebar-mini-icon">L</span>
                <span class="sidebar-normal">Logout</span>
                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <ul class="nav">
      <li class="<?php echo e(active('admin')); ?>">
        <a href="<?php echo e(url('admin')); ?>">
          <i class="nc-icon nc-layout-11"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="<?php echo e(active('pendaftaran*')); ?>">
        <a href="<?php echo e(url('pendaftaran/pendaftaran')); ?>">
          <i class="nc-icon nc-badge"></i>
          <p>Pendaftaran</p>
        </a>
      </li>
      <li class="<?php echo e(active('kecamatan*')); ?>">
        <a href="<?php echo e(url('kecamatan/kecamatan')); ?>">
          <i class="nc-icon nc-bank"></i>
          <p>Kecamatan</p>
        </a>
      </li>
      <li class="<?php echo e(active('kelurahan*')); ?>">
        <a href="<?php echo e(url('kelurahan/kelurahan')); ?>">
          <i class="nc-icon nc-shop"></i>
          <p>Kelurahan</p>
        </a>
      </li>


      <li class="<?php echo e(active(['jenisLinmas*', 'linmas*','asetLimas*'])); ?>">
        <a data-toggle="collapse" href="#tablesExamples" >
          <i class="nc-icon nc-book-bookmark"></i>
          <p>
            Linmas
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse <?php echo e(active(['jenisLinmas*', 'linmas*','asetLimas*'], 'show')); ?>" id="tablesExamples">
          <ul class="nav">
            <li class="<?php echo e(active('jenisLinmas*')); ?>">
              <a href="<?php echo e(url('jenisLinmas/jenis-linmas')); ?>">
                <span class="sidebar-mini-icon">J</span>
                <span class="sidebar-normal"> Jenis Linmas </span>
              </a>
            </li>
            <li class="<?php echo e(active('linmas*')); ?>">
              <a href="<?php echo e(url('linmas/linmas')); ?>">
                <span class="sidebar-mini-icon">L</span>
                <span class="sidebar-normal"> Linmas </span>
              </a>
            </li>

            <li class="<?php echo e(active('asetLimas*')); ?>">
              <a href="<?php echo e(url('asetLimas/aset-limas')); ?>">
                <span class="sidebar-mini-icon">A</span>
                <span class="sidebar-normal"> Aset Linmas </span>
              </a>
            </li>

          </ul>
        </div>
      </li>

      <li class="<?php echo e(active('lokasi*')); ?>">
        <a href="<?php echo e(url('lokasi/lokasi')); ?>">
          <i class="fa fa-map-marker"></i>
          <p>Lokasi</p>
        </a>
      </li>

    </ul>
  </div>
</div>
