<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}
.card {
    margin-bottom: 3px;
    margin-left: -10px;
    margin-right: -10px;
}
</style>

<div class="row">
  <div class="col-md-12">
    <div class="card-header">
      <div class="row">
        <div class="col-md-12">
          <h4 class="card-title">Data Kecamatan/ Kelurahan</h4>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="form-group<?php echo e($errors->has('id_kecamatan') ? 'has-error' : ''); ?>">
        <div class="row">
          <?php echo Form::label('id_kecamatan', ' Kecamatan :', ['class' => 'col-md-3 col-form-label']); ?>

          <div class="col-md-2">
            <div class="form-group">
            <?php echo Form::select('id_kecamatan', $Kecamatan, null, ('required' == 'required') ? ['class' => 'form-control','onChange' => 'ChangeKecamatan()', 'required' => 'required'] : ['class' => 'form-control']); ?>

            </div>
          </div>
          
          <?php echo $errors->first('id_kecamatan', '<p class="help-block">:message</p>'); ?>

        </div>
      </div>
      <div class="form-group<?php echo e($errors->has('id_kelurahan') ? 'has-error' : ''); ?>">
        <div class="row">
          <?php echo Form::label('id_kelurahan', ' Kelurahan :', ['class' => 'col-md-3 col-form-label']); ?>

          <div class="col-md-2">
            <div class="form-group">
          <?php echo Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

            </div>
          </div>
          
          <?php echo $errors->first('id_kelurahan', '<p class="help-block">:message</p>'); ?>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
          <div class="card-body">
            <div class="card-header">
            <div class="row">
                <div class="col-md-12">
                  <h4 class="card-title">Data Pribadi User</h4>
                </div>
            </div>
            </div>
            <div class="form-group<?php echo e($errors->has('nama') ? 'has-error' : ''); ?>">
              <div class="row">
                <?php echo Form::label('nama', 'Nama : ', ['class' => 'col-md-3 col-form-label']); ?>

                <div class="col-md-4">
                  <div class="form-group">
                <?php echo Form::text('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                <?php echo $errors->first('nama', '<p class="help-block">:message</p>'); ?>

                  </div>
                </div>
              </div>
            </div>
            <div class="form-group<?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
              <div class="row">
                <?php echo Form::label('email', 'Email : ',['class' => 'col-md-3 col-form-label']); ?>

                <div class="col-md-5">
                  <div class="form-group">
                    <?php echo Form::email('email', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                    <?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

                </div>
              </div>
            </div>
            </div>
            <div class="form-group<?php echo e($errors->has('hp') ? 'has-error' : ''); ?>">
              <div class="row">
                <?php echo Form::label('hp', 'Hp : ', ['class' => 'col-md-3 col-form-label']); ?>

                <div class="col-md-3">
                  <div class="form-group">
                <?php echo Form::text('hp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                <?php echo $errors->first('hp', '<p class="help-block">:message</p>'); ?>

                </div>
              </div>
            </div>
          </div>
            <div class="form-group<?php echo e($errors->has('no_ktp') ? 'has-error' : ''); ?>">
              <div class="row">
                <?php echo Form::label('no_ktp', 'No Ktp : ',['class' => 'col-md-3 col-form-label']); ?>

                <div class="col-md-5">
                  <div class="form-group">
                <?php echo Form::text('no_ktp', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                  </div>
                </div>
                <?php echo $errors->first('no_ktp', '<p class="help-block">:message</p>'); ?>

              </div>
            </div>
            <div class="form-group<?php echo e($errors->has('jenis_kelamin') ? 'has-error' : ''); ?>">
              <div class="row">
                <?php echo Form::label('jenis_kelamin', 'Jenis Kelamin : ', ['class' => 'col-md-3 col-form-label']); ?>

                <div class="col-md-3">
                  <div class="form-group">
                    <?php echo Form::select('jenis_kelamin', ['' => '', 'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], $jenis_kelamin, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('jenis_kelamin', '<p class="help-block">:message</p>'); ?>

              </div>
            </div>
            </div>
            </div>
          </div>
    </div>

    <div class="col-md-6">
        <div class="card-header">
        <div class="row">
            <div class="col-md-12">
              <h4 class="card-title">Data Alamat User</h4>
            </div>
        </div>
        </div>
          <div class="card-body">
            <div class="form-group<?php echo e($errors->has('alamat') ? 'has-error' : ''); ?>">
              <div class="row">
                <?php echo Form::label('alamat', 'Alamat :', ['class' => 'col-md-3 col-form-label']); ?>

                <div class="col-md-9">
                  <div class="form-group">
                <?php echo Form::textarea('alamat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                <?php echo $errors->first('alamat', '<p class="help-block">:message</p>'); ?>

              </div>
            </div>
            </div>
          </div>
            <div class="form-group<?php echo e($errors->has('alamat_kecamatan') ? 'has-error' : ''); ?>">
              <div class="row">
                <?php echo Form::label('alamat_kecamatan', 'Kecamatan :', ['class' => 'col-md-3 col-form-label']); ?>

                <div class="col-md-4">
                  <div class="form-group">
                <?php echo Form::text('alamat_kecamatan', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                <?php echo $errors->first('alamat_kecamatan', '<p class="help-block">:message</p>'); ?>

              </div>
            </div>
            </div>
            </div>
            <div class="form-group<?php echo e($errors->has('alamat_kelurahan') ? 'has-error' : ''); ?>">
              <div class="row">
                <?php echo Form::label('alamat_kelurahan', 'Kelurahan :', ['class' => 'col-md-3 col-form-label']); ?>

                <div class="col-md-4">
                  <div class="form-group">
                <?php echo Form::text('alamat_kelurahan', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                <?php echo $errors->first('alamat_kelurahan', '<p class="help-block">:message</p>'); ?>

              </div>
            </div>
            </div>
            </div>
            <div class="row">
                <?php echo Form::label('rt', 'RT / RW :', ['class' => 'col-md-3 col-form-label']); ?>

              <div class="col-md-4">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <?php echo Form::text('rt', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                  </div>
                  <p>/</p>
                  <div class="col-md-3">
                    <?php echo Form::text('rw', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                  </div>
                </div>
                <?php echo $errors->first('rt', '<p class="help-block">:message</p>'); ?>

              </div>
              </div>
            </div>

          <div class="form-group<?php echo e($errors->has('foto') ? 'has-error' : ''); ?>">
            <div class="row">
              <?php echo Form::label('foto', 'Foto : ', ['class' => 'col-md-3 col-form-label']); ?>

              
              <div class="col-md-9">
                <div class="form-group">
              <div class="col-md-12 col-sm-4" style="margin-left: -15px;">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    <?php if($foto == ""): ?>
                      <img src="<?php echo e(asset('assets/img/image_placeholder.jpg')); ?>" alt="...">
                    <?php else: ?>
                      <img src="<?php echo e(url('assets/img/pendaftaran/', $foto)); ?>" alt="...">
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
          </div>
        </div>
    </div>

          </div>
    </div>
    <div class="col-md-12">
      <?php echo Form::submit($formMode === 'edit' ? 'Ubah Data' : 'batal', ['class' => 'btn btn-danger']); ?>

      <?php echo Form::submit($formMode === 'edit' ? 'Ubah Data' : 'simpan', ['class' => 'btn btn-primary pull-right']); ?>

    </div>
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
