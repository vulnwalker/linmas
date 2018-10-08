
<div class="row">
  <?php echo Form::label('jenis_penugasan', 'Jenis Penugasan', ['class' => 'col-md-2 col-form-label']); ?>

  <div class="col-md-5">
    <div class="form-group">
      <?php echo Form::select('jenis_penugasan', ['' => '', '1' => 'Pilpres 2019', '2' => 'Perlombaan 17 Agustus'], '', ['class' => 'form-control']); ?>

    </div>
  </div>
  <?php echo $errors->first('jenis_penugasan', '<p class="help-block">:message</p>'); ?>

 </div>

 <div class="form-group<?php echo e($errors->has('tgl_penugasan_mulai') ? 'has-error' : ''); ?>">
   <div class="row">
     <?php echo Form::label('tgl_penugasan_mulai', 'Tanggal Penugasan', ['class' => 'col-md-2 col-form-label']); ?>

     <div class="col-md-2">
       <div class="form-group">
     <?php echo Form::text('tgl_penugasan_mulai', null, ('required' == 'required') ? ['class' => 'form-control datepicker', 'required' => 'required'] : ['class' => 'form-control']); ?>

     <?php echo $errors->first('tgl_penugasan_mulai', '<p class="help-block">:message</p>'); ?>

       </div>
     </div>s/d
     <div class="col-md-2">
       <div class="form-group">
     <?php echo Form::text('tgl_penugasan_akhir', null, ('required' == 'required') ? ['class' => 'form-control datepicker', 'required' => 'required'] : ['class' => 'form-control']); ?>

     <?php echo $errors->first('tgl_penugasan_akhir', '<p class="help-block">:message</p>'); ?>

       </div>
     </div>
   </div>
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
