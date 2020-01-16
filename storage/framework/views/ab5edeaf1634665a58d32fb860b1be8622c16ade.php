
<?php $__env->startSection('title'); ?>
  Panduan Pengunaan Aplikasi Aplulkat KITE
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Panduan Pengunaan Aplikasi Aplulkat KITE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
  .modal-content {
    height: auto;
    min-height: 30%;
    border-radius: 0;
    width: 100%;
    margin: 2%;
    text-align: left;
}
.modal-footer {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 0%;
    border-top: 1px solid #e9ecef;
    padding-right: 1%;
}

.modal-body {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem;
    padding-bottom: 0%;
}
</style>
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
 <div id="loadingData">

 </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header" style="margin-top: -1%;">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 class="card-title">Panduan Pengunaan Aplikasi Aplulkat KITE</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-2" >
                            <a href="" class="btn btn-primary btn-sm" style="float: right;"> <i class="fal fa-download"></i> Download Panduan</a>
                        </div>
                    </div>
                    <hr style="margin-top: 0%;margin-bottom: 0%;">
                    </div>
                    <div class="card-body" style="padding: 15px 15px 10px !important;">

   	 	   </div>
   	 	  </div>
   	 	 </div>
   		</div>
       </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>