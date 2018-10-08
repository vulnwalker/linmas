


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo e(url('/admin')); ?>">
    <img src="<?php echo e(asset('assets/images/logo-serang.png')); ?>" style="width: 50px; height: 50px;">
  </a>
  <span style="font-size: 17px;">Linmas Kabupaten Serang</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <div class="collapse navbar-collapse justify-content-end" id="navigation" style="z-index: 1000000000000;">

        <ul class="navbar-nav">
          <li class="nav-item btn-rotate dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

              <span style="color: black;">
                <?php echo e(Auth::user()->name); ?>

              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?php echo e(url('/logout')); ?>"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Logout
                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
              </a>
            </div>
          </li>
        </ul>
        <a class="navbar-brand" href="<?php echo e(url('/admin')); ?>">
          <button class="btn btn-icon btn-round" style="border-radius:  50%;">
            <i class="nc-icon nc-shop text-center"></i>
          </button>
        </a>
      </div>
    </form>
  </div>
</nav>