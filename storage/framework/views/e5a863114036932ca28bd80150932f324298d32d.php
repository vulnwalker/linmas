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


<!-- 
          <div class="row">
            <?php echo Form::label('no_angota', 'No. Angota', ['class' => 'col-md-3 col-form-label']); ?>

            <div class="col-md-8">
              <div class="form-group">
                <?php echo Form::text('no_angota', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

              </div>
            </div>
            <?php echo $errors->first('no_angota', '<p class="help-block">:message</p>'); ?>

           </div> -->



               <?php echo Form::hidden('status_linmas', null, ('required' == 'required') ? ['id' => 'status_linmas','class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

               <?php echo Form::hidden('jabatan', null, ('required' == 'required') ? ['id' => 'jabatan','class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>




           <div class="form-group<?php echo e($errors->has('nama') ? 'has-error' : ''); ?>">
             <div class="row">
               <?php echo Form::label('nama', 'Nama', ['class' => 'col-md-3 col-form-label']); ?>

               <div class="col-md-4">
                 <div class="form-group">
               <?php echo Form::text('nama', null, ('required' == 'required') ? ['id' => 'nama','class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

               <?php echo $errors->first('nama', '<p class="help-block">:message</p>'); ?>

                 </div>
               </div>
             </div>
           </div>

           <div class="form-group<?php echo e($errors->has('tgl_lahir') ? 'has-error' : ''); ?>">
             <div class="row">
               <?php echo Form::label('tgl_lahir', 'Tempat/ Tgl Lahir', ['class' => 'col-md-3 col-form-label']); ?>

              <div class="col-md-2">
                 <div class="form-group">
               <?php echo Form::text('tempat_lahir', null, ('required' == 'required') ? ['id' => 'tempat_lahir','class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

               <?php echo $errors->first('tempat_lahir', '<p class="help-block">:message</p>'); ?>

                 </div>
               </div>/
               <div class="col-md-2">
                 <div class="form-group">
               <?php echo Form::text('tgl_lahir', null, ('required' == 'required') ? ['id' => 'tgl_lahir','class' => 'form-control datepicker', 'required' => 'required'] : ['class' => 'form-control']); ?>

               <?php echo $errors->first('tgl_lahir', '<p class="help-block">:message</p>'); ?>

                 </div>
               </div>
             </div>
           </div>

           <div class="form-group<?php echo e($errors->has('jenis_kelamin') ? 'has-error' : ''); ?>">
             <div class="row">
               <?php echo Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'col-md-3 col-form-label']); ?>

               <div class="col-md-2">
                 <div class="form-group">
                   <?php echo Form::select('jenis_kelamin', ['' => '', 'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], $jenis_kelamin, ['id' => 'jenis_kelamin','class' => 'form-control']); ?>

                   <?php echo $errors->first('jenis_kelamin', '<p class="help-block">:message</p>'); ?>

             </div>
           </div>
           </div>
           </div>

           <div class="form-group<?php echo e($errors->has('no_ktp') ? 'has-error' : ''); ?>">
             <div class="row">
               <?php echo Form::label('no_ktp', 'No Ktp',['class' => 'col-md-3 col-form-label']); ?>

               <div class="col-md-3">
                 <div class="form-group">
               <?php echo Form::text('no_ktp', null, ('required' == 'required') ? ['id' => 'no_ktp','onkeyup' => 'ktp()','class' => 'form-control ktp', 'required' => 'required'] : ['onkeyup' => 'ktp()','class' => 'form-control ktp']); ?>

                 </div>
               </div>
               <?php echo $errors->first('no_ktp', '<p class="help-block">:message</p>'); ?>

             </div>
           </div>

           <div class="form-group<?php echo e($errors->has('alamat') ? 'has-error' : ''); ?>">
             <div class="row">
               <?php echo Form::label('alamat', 'Alamat ', ['class' => 'col-md-3 col-form-label']); ?>

               <div class="col-md-4">
                 <div class="form-group">
               <?php echo Form::textarea('alamat', null, ('' == 'required') ? ['id' => 'alamat','class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

               <?php echo $errors->first('alamat', '<p class="help-block">:message</p>'); ?>

             </div>
           </div>
           </div>
         </div>

         <div class="form-group<?php echo e($errors->has('id_kecamatan') ? 'has-error' : ''); ?>">
           <div class="row">
             <?php echo Form::label('id_kecamatan', ' Kecamatan', ['class' => 'col-md-3 col-form-label']); ?>

             <div class="col-md-3">
               <div class="form-group">
               <?php echo Form::select('id_kecamatan', $Kecamatan, null, ('required' == 'required') ? ['class' => 'form-control','onChange' => 'ChangeKecamatan()', 'required' => 'required'] : ['class' => 'form-control']); ?>

               </div>
             </div>
             
             <?php echo $errors->first('id_kecamatan', '<p class="help-block">:message</p>'); ?>

           </div>
         </div>
         <div class="form-group<?php echo e($errors->has('id_kelurahan') ? 'has-error' : ''); ?>">
           <div class="row">
             <?php echo Form::label('id_kelurahan', ' Kelurahan/ Desa', ['class' => 'col-md-3 col-form-label']); ?>

             <div class="col-md-3">
               <div class="form-group">
             <?php echo Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

               </div>
             </div>
             
             <?php echo $errors->first('id_kelurahan', '<p class="help-block">:message</p>'); ?>

           </div>
         </div>

         <div class="form-group<?php echo e($errors->has('rt') ? 'has-error' : ''); ?>">
           <div class="row">
             <?php echo Form::label('rt', 'RT/ RW', ['class' => 'col-md-3 col-form-label']); ?>

             <div class="col-md-1">
               <div class="form-group">
             <?php echo Form::text('rt', null, ('required' == 'required') ? ['id' => 'rt','class' => 'form-control kode','onkeypress' => 'kode()', 'required' => 'required'] : ['class' => 'form-control']); ?>

             <?php echo $errors->first('rt', '<p class="help-block">:message</p>'); ?>

               </div>
             </div>/
             <div class="col-md-1">
               <div class="form-group">
             <?php echo Form::text('rw', null, ('required' == 'required') ? ['id' => 'rw','class' => 'form-control kode','onkeypress' => 'kode()', 'required' => 'required'] : ['class' => 'form-control']); ?>

             <?php echo $errors->first('rw', '<p class="help-block">:message</p>'); ?>

               </div>
             </div>
           </div>
         </div>

           <div class="form-group<?php echo e($errors->has('hp') ? 'has-error' : ''); ?>">
             <div class="row">
               <?php echo Form::label('hp', 'Hp', ['class' => 'col-md-3 col-form-label']); ?>

               <div class="col-md-2">
                 <div class="form-group">
               <?php echo Form::text('hp', null, ('' == 'required') ? ['id' => 'hp','onkeyup' => 'noHP()', 'class' => 'form-control noHP', 'required' => 'required'] : ['onkeyup' => 'noHP()', 'class' => 'form-control noHP']); ?>

               <?php echo $errors->first('hp', '<p class="help-block">:message</p>'); ?>

               </div>
             </div>
           </div>
         </div>

         <div class="form-group<?php echo e($errors->has('status') ? 'has-error' : ''); ?>">
           <div class="row">
             <?php echo Form::label('status', 'Status', ['class' => 'col-md-3 col-form-label']); ?>

             <div class="col-md-2">
               <div class="form-group">
                  <?php echo Form::select('status', ['' => '--Status--','Janda' => 'Janda','Duda' => 'Duda','Kawin' => 'Kawin', 'Belum Kawin' => 'Belum Kawin'],$status, ['id' => 'status','class' => 'form-control']); ?>

               </div>
             </div>             
           </div>
         </div>

         <div class="form-group<?php echo e($errors->has('agama') ? 'has-error' : ''); ?>">
           <div class="row">
             <?php echo Form::label('agama', 'Agama', ['class' => 'col-md-3 col-form-label']); ?>

             <div class="col-md-2">
               <div class="form-group">
                  <?php echo Form::select('agama', ['' => '--Agama--','Islam' => 'Islam','Kristen' => 'Kristen','Kartolik' => 'Kartolik', 'Budha' => 'Budha', 'Hindu' => 'Hindu', 'Konghucu' => 'Konghucu'], $agama, ['id' => 'agama','class' => 'form-control']); ?>

               </div>
             </div>             
           </div>
         </div>

         <div class="form-group<?php echo e($errors->has('gol_darah') ? 'has-error' : ''); ?>">
           <div class="row">
             <?php echo Form::label('gol_darah', 'Golongan Darah', ['class' => 'col-md-3 col-form-label']); ?>

             <div class="col-md-2">
               <div class="form-group">
                  <?php echo Form::select('gol_darah', ['' => '--Golongan Darah--','A' => 'A','B' => 'B','AB' => 'AB', 'O' => 'O'], $gol_darah, ['class' => 'form-control']); ?>

               </div>
             </div>             
           </div>
         </div>

         <div class="form-group<?php echo e($errors->has('pendidikan') ? 'has-error' : ''); ?>">
           <div class="row">
             <?php echo Form::label('pendidikan', 'Pendidikan', ['class' => 'col-md-3 col-form-label']); ?>

             <div class="col-md-2">
               <div class="form-group">
                  <?php echo Form::select('pendidikan', ['' => '--Pendidikan--','SD' => 'SD','SMP' => 'SMP','SMA/SMK' => 'SMA/SMK', 'Diploma' => 'Diploma', 'Sarjana' => 'Sarjana', 'Pasca Sarjana' => 'Pasca Sarjana', 'Doktor' => 'Doktor'], $pendidikan, ['class' => 'form-control']); ?>

               </div>
             </div>             
           </div>
         </div>



         <div class="form-group<?php echo e($errors->has('uk_baju') ? 'has-error' : ''); ?>">
           <div class="row">
             <?php echo Form::label('uk_baju', 'Ukuran Seragam', ['class' => 'col-md-3 col-form-label']); ?>

             <div class="col-md-2">
               <div class="form-group">
                  <?php echo Form::select('uk_baju', ['S' => 'Small ( S )','M' => 'Medium ( M )','L' => 'Large ( L )', 'XL' => 'Extra Large ( XL )', 'XXL' => 'Extra Large ( XXL )'], $uk_baju, ['class' => 'form-control']); ?>

               </div>
             </div>             
           </div>
         </div>

         <div class="form-group<?php echo e($errors->has('uk_baju') ? 'has-error' : ''); ?>">
           <div class="row">
             <?php echo Form::label('uk_sepatu', 'Ukuran Sepatu', ['class' => 'col-md-3 col-form-label']); ?>

             <div class="col-md-1">
               <div class="form-group">
               <?php echo Form::text('uk_sepatu', null, ('' == 'required') ? ['class' => 'form-control kode','onkeypress' => 'kode()','required' => 'required'] : ['class' => 'form-control kode','onkeypress' => 'kode()']); ?>

               </div>
             </div>
           </div>
         </div>


          <div class="form-group<?php echo e($errors->has('keterangan') ? 'has-error' : ''); ?>">
            <div class="row">
              <?php echo Form::label('keterangan', 'Keterangan', ['class' => 'col-md-3 col-form-label']); ?>

              <div class="col-md-4">
                <div class="form-group">
              <?php echo Form::textarea('keterangan', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

              <?php echo $errors->first('keterangan', '<p class="help-block">:message</p>'); ?>

              </div>
            </div>
          </div>
        </div>

          <div class="form-group<?php echo e($errors->has('foto') ? 'has-error' : ''); ?>">
            <div class="row">
              <?php echo Form::label('foto', 'Foto ', ['class' => 'col-md-3 col-form-label']); ?>

              
              <div class="col-md-9">
                <div class="form-group">
              <div >
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    <?php if($foto == ""): ?>
                      <img src="<?php echo e(asset('assets/img/image_placeholder.jpg')); ?>" alt="...">
                    <?php else: ?>
                      <img src="<?php echo e(url('assets/img/linmas/', $foto)); ?>" alt="...">
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

    <div class="modal fade bd-example-modal-md" id="modalPendaftaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

          <div class="modal-header" style="text-align:left;display:inline-flex !important;">
            <h5 class="modal-title" id="exampleModalLabel">Buat Nomer SK</h5>
          </div>
          <div class="modal-body">



            <div class="form-group<?php echo e($errors->has('walikota') ? 'has-error' : ''); ?>">
              <div class="row">
                <?php echo Form::label('walikota', 'Bupati/ Walikota', ['class' => 'col-md-4']); ?>

                <div class="col-md-7">
                  <div class="form-group">
                <?php echo Form::text('walikota', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

                <?php echo $errors->first('walikota', '<p class="help-block">:message</p>'); ?>

                </div>
              </div>
            </div>
          </div>
        <div class="form-group<?php echo e($errors->has('no_sk') ? 'has-error' : ''); ?>">
          <div class="row">
            <?php echo Form::label('no_sk', 'Nomer SK', ['class' => 'col-md-4']); ?>

            <div class="col-md-6">
              <div class="form-group">
            <?php echo Form::text('no_sk', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']); ?>

            <?php echo $errors->first('no_sk', '<p class="help-block">:message</p>'); ?>

            </div>
          </div>
        </div>
      </div>
        <div class="form-group<?php echo e($errors->has('tgl') ? 'has-error' : ''); ?>">
          <div class="row">
            <?php echo Form::label('tgl', 'Tanggal', ['class' => 'col-md-4']); ?>

            <div class="col-md-5">
              <div class="form-group">
            <?php echo Form::text('tgl', null, ('required' == 'required') ? ['class' => 'form-control datepicker', 'required' => 'required'] : ['class' => 'form-control']); ?>

            <?php echo $errors->first('tgl', '<p class="help-block">:message</p>'); ?>

            </div>
          </div>
        </div>
      </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Save changes</button>
          </div>

        </div>
      </div>
    </div>





<hr>
<div class="form-group">
  <div class="row">
    <div class="col-md-2" style="margin-left: 13%;">
      <?php if($formMode === 'edit'): ?>
        <?php echo Form::submit('Simpan', ['class' => 'btn btn-primary','style' => 'width: 100%;font-size: 17px;']); ?>

      <?php else: ?>
      <?php echo Form::submit('Simpan', ['id' => 'simpans','onclick' => 'SimpanBtn()','class' => 'btn btn-primary','style' => 'width: 100%;font-size: 17px;']); ?>

      <?php endif; ?>

    </div>
    <div class="col-md-2">
      <a href="<?php echo e(url('/linmas/linmas')); ?>" title="Back" class= "btn btn-danger" style= "width: 100%;font-size: 17px;">
        Batal
      </a>
    </div>
  </div>
</div>

<script type="text/javascript">
function SimpanBtn() {

  if ($('#nama').val()== '' || $('#tempat_lahir').val() == '' || $('#tgl_lahir').val() == '' || $('#jenis_kelamin').val() == '' || $('#no_ktp').val() == '' || $('#alamat').val() == '' || $('#id_kecamatan').val() == '' || $('#id_kelurahan').val() =='' || $('#rt').val() == '' || $('#rw').val() =='' ||  $('#status').val() == '' || $('#agama').val() == '') {
     document.getElementById("simpans").disabled = false;
     swal("Maaf", "Lengkapi Data", "error");
  }else{
    document.getElementById("simpans").disabled = true;
    document.getElementById("simpans").disabled = true;
    document.getElementById("simpan").submit();

  }
     
}

function ChangeStatus(){
  var status_linmas = $('#status_linmas').val();
  if(status_linmas === "2"){
      document.getElementById("hideStatus").style.display = "none";
  }else{
      document.getElementById("hideStatus").style.display = "";
  }

}
function ChangeKecamatan() {
      var id_kecamatan = $('#id_kecamatan').val();
      if(id_kecamatan) {
          $.ajax({
              url: '/getkelurahan/get/'+id_kecamatan,
              type:"GET",
              dataType:"json",
              beforeSend: function(){
                  $('#loader').css("visibility", "visible");
              },

              success:function(data) {

                  $('select[name="id_kelurahan"]').empty();

                  $.each(data, function(key, value){

                      $('select[name="id_kelurahan"]').append('<option value="'+value+'">' +key+ '</option>');

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
