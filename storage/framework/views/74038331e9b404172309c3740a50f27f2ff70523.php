<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}
</style>

<div class="form-group<?php echo e($errors->has('id_kecamatan') ? 'has-error' : ''); ?>">
    <?php echo Form::label('id_kecamatan', 'Kecamatan', ['class' => 'control-label']); ?>

    <?php echo Form::select('id_kecamatan', $Kecamatan, null, ('required' == 'required') ? ['class' => 'form-control','onChange' => 'ChangeKecamatan()', 'required' => 'required'] : ['class' => 'form-control']); ?>

    
    <?php echo $errors->first('id_kecamatan', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('id_kelurahan') ? 'has-error' : ''); ?>">
    <?php echo Form::label('id_kelurahan', 'Kelurahan', ['class' => 'control-label']); ?>

    <?php echo Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']); ?>

    
    <?php echo $errors->first('id_kelurahan', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('nama') ? 'has-error' : ''); ?>">
    <?php echo Form::label('nama', 'Nama', ['class' => 'control-label']); ?>

    <?php echo Form::text('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('nama', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('kode_aset') ? 'has-error' : ''); ?>">
    <?php echo Form::label('kode_aset', 'Kode Aset', ['class' => 'control-label']); ?>

    <?php echo Form::text('kode_aset', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('kode_aset', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('jumlah') ? 'has-error' : ''); ?>">
    <?php echo Form::label('jumlah', 'Jumlah', ['class' => 'control-label']); ?>

    <?php echo Form::text('jumlah', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('jumlah', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('tahun_produksi') ? 'has-error' : ''); ?>">
    <?php echo Form::label('tahun_produksi', 'Tahun Produksi', ['class' => 'control-label']); ?>

    <?php echo Form::text('tahun_produksi', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('tahun_produksi', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('tahun_perolehan') ? 'has-error' : ''); ?>">
    <?php echo Form::label('tahun_perolehan', 'Tahun Perolehan', ['class' => 'control-label']); ?>

    <?php echo Form::text('tahun_perolehan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('tahun_perolehan', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('merk') ? 'has-error' : ''); ?>">
    <?php echo Form::label('merk', 'Merk', ['class' => 'control-label']); ?>

    <?php echo Form::text('merk', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('merk', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('kondisi') ? 'has-error' : ''); ?>">
    <?php echo Form::label('kondisi', 'Kondisi', ['class' => 'control-label']); ?>

    <?php echo Form::text('kondisi', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('kondisi', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('foto') ? 'has-error' : ''); ?>">
    <?php echo Form::label('foto', 'Foto', ['class' => 'control-label']); ?>

    
    <div class="col-md-4 col-sm-4">
      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
        <div class="fileinput-new thumbnail">
          <?php if($foto == ""): ?>
            <img src="<?php echo e(asset('assets/img/image_placeholder.jpg')); ?>" alt="...">
          <?php else: ?>
            <img src="<?php echo e(url('assets/img/aset/', $foto)); ?>" alt="...">
          <?php endif; ?>

        </div>
        <div class="fileinput-preview fileinput-exists thumbnail"></div>
        <div>
          <span class="btn btn-rose btn-round btn-file">
            <span class="fileinput-new">Select image</span>
            <span class="fileinput-exists">Change</span>
            <?php if($foto == ""): ?>
              <input type="file" name="foto" />
            <?php else: ?>
              <input type="file" name="foto" />
            <?php endif; ?>
          </span>
          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
        </div>
      </div>
    </div>
</div>



<div class="form-group">
    <?php echo Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']); ?>

</div>

<script type="text/javascript">

function ChangeKecamatan() {
      var id_kecamatan = $('#id_kecamatan').val();
      if(id_kecamatan) {
          $.ajax({
              url: '/states/get/'+id_kecamatan,
              type:"GET",
              dataType:"json",
              beforeSend: function(){
                  $('#loader').css("visibility", "visible");
              },

              success:function(data) {

                  $('select[name="id_kelurahan"]').empty();

                  $.each(data, function(key, value){

                      $('select[name="id_kelurahan"]').append('<option value="'+ key +'">' + value + '</option>');

                  });
              },
              complete: function(){
                  $('#loader').css("visibility", "hidden");
              }
          });
      } else {
          $('select[name="id_kelurahan"]').empty();
      }


}

</script>
