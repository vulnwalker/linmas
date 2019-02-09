<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $__env->make('linkCSS', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body class="login-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <img src="<?php echo e(asset('assets/images/logo-serang.png')); ?>" style="margin-right: 15px;">
        <a class="navbar-brand" href="#">
          SIMLINMAS<br>
          <span>Satpol PP Kabupaten Serang</span>
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page ">
    
    <div class="full-page section-image" filter-color="black" data-image="<?php echo e(asset('assets/images/linmas.jpg')); ?>">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="content">
        <div class="container">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <form class="form" method="POST" action="<?php echo e(route('login')); ?>" autocomplete="off">
              <?php echo csrf_field(); ?>
              <div class="card card-login">
                <div class="card-header ">
                  <div class="card-header ">
                    <h3 class="header text-center">LOGIN</h3>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-single-02"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Your User" name="email" id="email" value="<?php echo e(old('email')); ?>" required autofocus>
                    <?php if($errors->has('email')): ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($errors->first('email')); ?></strong>
                      </span>
                    <?php endif; ?>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-key-25"></i>
                      </span>
                    </div>
                    <input type="password" id="password" placeholder="Password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required="">
                    <?php if($errors->has('password')): ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($errors->first('password')); ?></strong>
                      </span>
                    <?php endif; ?>
                  </div>
                  <br/>
                </div>
                <div class="card-footer ">
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary btn-block mb-3">
                        <?php echo e(__('Login')); ?>

                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $__env->make('linkJS', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
</body>
</html>