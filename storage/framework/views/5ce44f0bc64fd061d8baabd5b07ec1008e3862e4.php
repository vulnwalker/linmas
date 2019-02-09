<div class="form-group<?php echo e($errors->has('jns_linmas') ? 'has-error' : ''); ?>">
    <?php echo Form::label('jns_linmas', 'jenis linmas', ['class' => 'control-label']); ?>

    <?php echo Form::text('jns_linmas', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

    <?php echo $errors->first('jns_linmas', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
	<button type="button" class="btn btn-primary">SIMPAN</button>
	<a href="<?php echo e(url('jenisLinmas/jenis-linmas')); ?>">
		<button type="button" class="btn btn-danger">BATAL</button>
	</a>
</div>
