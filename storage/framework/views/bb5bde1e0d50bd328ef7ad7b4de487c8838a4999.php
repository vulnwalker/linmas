<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2">
                <div class="form-group<?php echo e($errors->has('id_kecamatan') ? 'has-error' : ''); ?>">
                    <?php echo Form::label('id_kecamatan', 'Kecamatan', ['class' => 'control-label']); ?>

                    <?php echo Form::select('id_kecamatan', $Kecamatan, null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                    <?php echo $errors->first('id_kecamatan', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group<?php echo e($errors->has('kelurahan') ? 'has-error' : ''); ?>">
                    <?php echo Form::label('kelurahan', 'Kelurahan', ['class' => 'control-label']); ?>

                    <?php echo Form::text('kelurahan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                    <?php echo $errors->first('kelurahan', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group<?php echo e($errors->has('telp') ? 'has-error' : ''); ?>">
                    <?php echo Form::label('telp', 'Telp', ['class' => 'control-label']); ?>

                    <?php echo Form::text('telp', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                    <?php echo $errors->first('telp', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group<?php echo e($errors->has('fax') ? 'has-error' : ''); ?>">
                    <?php echo Form::label('fax', 'Fax', ['class' => 'control-label']); ?>

                    <?php echo Form::text('fax', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                    <?php echo $errors->first('fax', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group<?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                    <?php echo Form::label('email', 'Email', ['class' => 'control-label']); ?>

                    <?php echo Form::email('email', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                    <?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group<?php echo e($errors->has('alamat') ? 'has-error' : ''); ?>">
                    <?php echo Form::label('alamat', 'Alamat', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('alamat', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                    <?php echo $errors->first('alamat', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="form-group">
    <?php echo Form::submit($formMode === 'edit' ? 'Update' : 'batal', ['class' => 'btn btn-danger']); ?>

    <?php echo Form::submit($formMode === 'edit' ? 'Update' : 'simpan', ['class' => 'btn btn-primary pull-right']); ?>

</div>
