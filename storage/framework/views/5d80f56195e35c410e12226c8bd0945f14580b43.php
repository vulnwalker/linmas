<div class="row">
  <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
              <h4 class="card-title">Data Kecamatan</h4>
              <hr>
            </div>
        </div>
            <div class="form-group<?php echo e($errors->has('kecamatan') ? 'has-error' : ''); ?>">
              <div class="row">
                <?php echo Form::label('kecamatan', ' Kecamatan :', ['class' => 'col-md-3 col-form-label']); ?>

                <div class="col-md-6">
                  <div class="form-group">
                  <?php echo Form::text('kecamatan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                  </div>
                </div>
                
                <?php echo $errors->first('kecamatan', '<p class="help-block">:message</p>'); ?>

              </div>
            </div>
            <div class="form-group<?php echo e($errors->has('alamat') ? 'has-error' : ''); ?>">
              <div class="row">
                <?php echo Form::label('alamat', ' Alamat :', ['class' => 'col-md-3 col-form-label']); ?>

                <div class="col-md-9">
                  <div class="form-group">
                    <?php echo Form::textarea('alamat', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                  </div>
                </div>
                
                <?php echo $errors->first('alamat', '<p class="help-block">:message</p>'); ?>

              </div>
            </div>
            <div class="form-group<?php echo e($errors->has('telp') ? 'has-error' : ''); ?>">
              <div class="row">
                <?php echo Form::label('telp', 'Telp :', ['class' => 'col-md-3 col-form-label']); ?>

                <div class="col-md-3">
                  <div class="form-group">
                <?php echo Form::text('telp', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                </div>
                
                <?php echo $errors->first('telp', '<p class="help-block">:message</p>'); ?>

              </div>
            </div>
            </div>
            <div class="form-group<?php echo e($errors->has('fax') ? 'has-error' : ''); ?>">
              <div class="row">
                <?php echo Form::label('fax', 'FAX :', ['class' => 'col-md-3 col-form-label']); ?>

                <div class="col-md-6">
                  <div class="form-group">
                  <?php echo Form::text('fax', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                  </div>
                </div>
                
                <?php echo $errors->first('fax', '<p class="help-block">:message</p>'); ?>

              </div>
            </div>
    </div>
    <div class="col-md-6">
          <div class="row">
              <div class="col-md-12">
                <h4 class="card-title">Data Camat</h4>
                <hr>
              </div>
          </div>
              <div class="form-group<?php echo e($errors->has('nama_camat') ? 'has-error' : ''); ?>">
                <div class="row">
                  <?php echo Form::label('nama_camat', 'Nama Camat :', ['class' => 'col-md-3 col-form-label']); ?>

                  <div class="col-md-4">
                    <div class="form-group">
                  <?php echo Form::text('nama_camat', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                    </div>
                  </div>
                  
                  <?php echo $errors->first('nama_camat', '<p class="help-block">:message</p>'); ?>

                </div>
              </div>
              <div class="form-group<?php echo e($errors->has('nip_camat') ? 'has-error' : ''); ?>">
                <div class="row">
                  <?php echo Form::label('nip_camat', 'Nip  Camat :', ['class' => 'col-md-3 col-form-label']); ?>

                  <div class="col-md-3">
                    <div class="form-group">
                      <?php echo Form::text('nip_camat', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                    </div>
                  </div>
                  
                  <?php echo $errors->first('nip_camat', '<p class="help-block">:message</p>'); ?>

                </div>
              </div>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <?php echo Form::submit($formMode === 'edit' ? 'Update' : 'batal', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::submit($formMode === 'edit' ? 'Update' : 'simpan', ['class' => 'btn btn-primary pull-right']); ?>

          </div>
        </div>
    </div>
</div>