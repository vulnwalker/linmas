<div class="form-group<?php echo e($errors->has('id_kecamatan') ? 'has-error' : ''); ?>">
    <?php echo Form::label('id_kecamatan', 'Id Kecamatan', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('id_kecamatan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('id_kecamatan', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('id_kelurahan') ? 'has-error' : ''); ?>">
    <?php echo Form::label('id_kelurahan', 'Id Kelurahan', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('id_kelurahan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('id_kelurahan', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('nama') ? 'has-error' : ''); ?>">
    <?php echo Form::label('nama', 'Nama', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('nama', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('lokasi') ? 'has-error' : ''); ?>">
    <?php echo Form::label('lokasi', 'Lokasi', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('lokasi', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('lokasi', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('kondisi') ? 'has-error' : ''); ?>">
    <?php echo Form::label('kondisi', 'Kondisi', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('kondisi', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('kondisi', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('kelengkapan') ? 'has-error' : ''); ?>">
    <?php echo Form::label('kelengkapan', 'Kelengkapan', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('kelengkapan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('kelengkapan', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('sarpras') ? 'has-error' : ''); ?>">
    <?php echo Form::label('sarpras', 'Sarpras', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('sarpras', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('sarpras', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('aktifitas') ? 'has-error' : ''); ?>">
    <?php echo Form::label('aktifitas', 'Aktifitas', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('aktifitas', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('aktifitas', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group<?php echo e($errors->has('foto') ? 'has-error' : ''); ?>">
    <?php echo Form::label('foto', 'Foto', ['class' => 'control-label']); ?>

    <?php echo Form::textarea('foto', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('foto', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <?php echo Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']); ?>

</div>
