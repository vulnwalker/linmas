<script src="<?php echo e(asset('assets/js/jquery-3.3.1.min.js')); ?>"></script>
<div class="form-group<?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
 <div class="row">
   <?php echo Form::label('password', 'PASSWORD LAMA', ['class' => 'col-md-3 col-form-label']); ?>

   <div class="col-md-3">
     <div class="form-group">
     <?php echo Form::text('password2nd', null, ('' == 'required') ? ['class' => 'form-control','readonly' => 'readonly', 'required' => 'required'] : ['class' => 'form-control','readonly' => 'readonly']); ?>

     </div>
   </div>
   <?php echo $errors->first('password', '<p class="help-block">:message</p>'); ?>

 </div>
</div>

<div class="form-group<?php echo e($errors->has('passwordBaru') ? 'has-error' : ''); ?>">
 <div class="row">
   <?php echo Form::label('passwordBaru', 'PASSWORD BARU', ['class' => 'col-md-3 col-form-label']); ?>

   <div class="col-md-3">
     <div class="form-group">
     <?php echo Form::text('passwordBaru', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

     </div>
   </div>
   <?php echo $errors->first('passwordBaru', '<p class="help-block">:message</p>'); ?>

 </div>
</div>

<input type="hidden" name="id" id="id" value="<?php echo e(Auth::user()->id); ?>">

<hr>
<div class="form-group">
  <div class="row">
    <div class="col-md-1">
        
      <button type="button" class="btn btn-primary" id="gantiPass" name="gantiPass">SIMPAN</button>
    </div>
    <div class="col-md-1">
      <a href="<?php echo e(url('/admin')); ?>" title="Back" class= "btn btn-danger" style= "width: 100%;font-size: 17px;">
        Batal
      </a>
    </div>
  </div>
</div>
<form id="logoutForm" name="logoutForm" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
  <?php echo csrf_field(); ?>
</form>
<script type="text/javascript">
    $(document).ready(function(){
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
                  document.getElementById('logoutForm').submit();
                }, 1000);
              }
            }
          });
        }
      });
      // end insert
    });
</script>