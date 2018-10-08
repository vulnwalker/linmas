<style type="text/css">
  #editableDiv, #mytextarea {
    margin:10px 0;
    height: 400px!important;
}
.notReplaced {
    margin: 10px 0;
}
div#ephox_mytextarea{
  width: 100%;
  max-width: 100%;
  min-width: 0px;
   max-height: unset!important; 
  min-height: 0px;
  height: 400px;
  display: flex;
}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="https://s3.amazonaws.com/ephox-static-ephox-com/jsfiddle/textboxio/textboxio.js"></script>
<script type="text/javascript">
      $( document ).ready(function() {
       textboxio.replace('#mytextarea');
    });
</script>
<div class="form-group<?php echo e($errors->has('id_laporan') ? 'has-error' : ''); ?>">
 <div class="row">
   <?php echo Form::label('id_laporan', 'KATEGORI LAPORAN', ['class' => 'col-md-3 col-form-label']); ?>

   <div class="col-md-2">
     <div class="form-group">
     <?php echo Form::select('id_laporan', $slcLaporan, null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

     </div>
   </div>
   <?php echo $errors->first('id_laporan', '<p class="help-block">:message</p>'); ?>

 </div>
</div>
<div class="form-group<?php echo e($errors->has('username') ? 'has-error' : ''); ?>">
 <div class="row">
   <?php echo Form::label('username', 'USER', ['class' => 'col-md-3 col-form-label']); ?>

   <div class="col-md-2">
     <div class="form-group">
     <?php echo Form::text('username',Auth::user()->name, ('' == 'required') ? ['class' => 'form-control', 'readonly' => 'readonly', 'required' => 'required'] : ['class' => 'form-control', 'readonly' => 'readonly']); ?>

     </div>
   </div>
   <?php echo $errors->first('username', '<p class="help-block">:message</p>'); ?>

 </div>
</div>
<div class="form-group<?php echo e($errors->has('judul') ? 'has-error' : ''); ?>">
 <div class="row">
   <?php echo Form::label('judul', 'JUDUL', ['class' => 'col-md-3 col-form-label']); ?>

   <div class="col-md-5">
     <div class="form-group">
     <?php echo Form::text('judul', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

     </div>
   </div>
   <?php echo $errors->first('judul', '<p class="help-block">:message</p>'); ?>

 </div>
</div>
<div class="form-group" onload="instantiateTextbox();">
  <label class="control-label">Isi Laporan</label>
    <?php echo Form::textarea('deskripsi', null, ('' == 'required') ? ['id' => 'mytextarea', 'class' => 'form-control', 'required' => 'required'] : ['id' => 'mytextarea','class' => 'form-control']); ?>

</div>

<hr>
<div class="form-group">
  <div class="row">
    <div class="col-md-1">
      <?php if($formMode === 'edit'): ?>
        <?php echo Form::submit('Simpan', ['class' => 'btn btn-primary','style' => 'width: 100%;font-size: 17px;']); ?>

      <?php else: ?>
      <?php echo Form::submit('Simpan', ['class' => 'btn btn-primary','style' => 'width: 100%;font-size: 17px;']); ?>

      <?php endif; ?>
    </div>
    <div class="col-md-1">
      <a href="<?php echo e(url('/pelaporan/pelaporans')); ?>" title="Back" class= "btn btn-danger" style= "width: 100%;font-size: 17px;">
        Batal
      </a>
    </div>
  </div>
</div>