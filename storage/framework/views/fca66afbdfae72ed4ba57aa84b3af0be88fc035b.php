<div class="row">
  <?php echo Form::label('nama', 'Nama Kegiatan', ['class' => 'col-md-3 col-form-label']); ?>

  <div class="col-md-4">
    <div class="form-group">
      <?php echo Form::text('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    </div>
  </div>
  <?php echo $errors->first('nama', '<p class="help-block">:message</p>'); ?>

 </div>

 <div class="row">
  <?php echo Form::label('lokasi', 'Lokasi Kegiatan', ['class' => 'col-md-3 col-form-label']); ?>

  <div class="col-md-4">
    <div class="form-group">
      <?php echo Form::text('lokasi', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    </div>
  </div>
  <?php echo $errors->first('lokasi', '<p class="help-block">:message</p>'); ?>

 </div>

<div class="form-group<?php echo e($errors->has('tanggal_mulai') ? 'has-error' : ''); ?>">
 <div class="row">
   <?php echo Form::label('tanggal_mulai', 'Tanggal', ['class' => 'col-md-3 col-form-label']); ?>

   <div class="col-md-2" style="flex: 0 0 15.88%;">
     <div class="form-group">
   <?php echo Form::text('tanggal_mulai', $tanggal_mulai, ('required' == 'required') ? ['class' => 'form-control datepicker', 'required' => 'required'] : ['class' => 'form-control']); ?>

   <?php echo $errors->first('tanggal_mulai', '<p class="help-block">:message</p>'); ?>

     </div>
   </div>s/d
   <div class="col-md-2" style="flex: 0 0 15.88%;">
     <div class="form-group">
   <?php echo Form::text('tanggal_selesai', $tanggal_selesai, ('required' == 'required') ? ['class' => 'form-control datepicker', 'required' => 'required'] : ['class' => 'form-control']); ?>

   <?php echo $errors->first('tanggal_selesai', '<p class="help-block">:message</p>'); ?>

     </div>
   </div>
 </div>
</div>

<div class="row">
  <?php echo Form::label('penyelengara', 'Penyelenggara', ['class' => 'col-md-3 col-form-label']); ?>

  <div class="col-md-4">
    <div class="form-group">
      <?php echo Form::text('penyelengara', null, ('required' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']); ?>

    </div>
  </div>
  <?php echo $errors->first('penyelengara', '<p class="help-block">:message</p>'); ?>

 </div>


 <div class="row">
  <?php echo Form::label('kegiatan', 'Isi Kegiatan', ['class' => 'col-md-3 col-form-label']); ?>

  <div class="col-md-4">
    <div class="form-group">
      <?php echo Form::textarea('kegiatan', null, ('required' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']); ?>

    </div>
  </div>
  <?php echo $errors->first('kegiatan', '<p class="help-block">:message</p>'); ?>

 </div>

<!--  <div class="row">
  <?php echo Form::label('narasumber', 'Narasumber', ['class' => 'col-md-3 col-form-label']); ?>

  <div class="col-md-4">
    <div class="form-group">
      <?php echo Form::text('narasumber', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    </div>
  </div>
  <?php echo $errors->first('narasumber', '<p class="help-block">:message</p>'); ?>

 </div> -->

