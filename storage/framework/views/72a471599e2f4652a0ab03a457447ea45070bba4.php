<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="row">
          <div class="col-md-2">
              <label class="control-label">USERNAME</label>
          </div>
          <div class="col-md-2">
              <div class="form-group">
                  <input type="text" name="username" id="username" class="form-control">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <label class="control-label">HAK AKSES</label>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <select class="form-control" id="hak_akses" name="hak_akses">
                <option value="">--- SELECT ---</option>
                <option value="2">Master</option>
                <option value="1">Admin</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <label>PASSWORD</label>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <label>WILAYAH</label>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <select class="form-control" id="kd_kec" name="kd_kec">
                <option value="">--- SELECT ---</option>
                <?php $__currentLoopData = $slcKd_kec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($value->kd_kec); ?>"><?php echo e($value->nama); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <select class="form-control" id="kd_kel" name="kd_kel">
                <option value="">--- SELECT ---</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <label class="control-label">JENIS SAPRAS</label>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              
              <select class="form-control" name="jns_sapras" id="jns_sapras">
                <option value="">--- SELECT ---</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <label class="control-label">REGU ANGGOTA</label>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              
              <select class="form-control" id="regu_anggota" name="regu_anggota">
                <option value="">--- SELECT ---</option>
              </select>
            </div>
          </div>
        </div>
    </div>
</div>

<hr>
<div class="form-group">
    <button type="button" class="btn btn-primary" id="ins_adminis" name="ins_adminis">SIMPAN</button>
    
    <a href="<?php echo e(url('adminis/adminis')); ?>">
        <button class="btn btn-danger" type="button">BATAL</button>
    </a>
</div>
<?php echo $__env->make('linkJS', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script type="text/javascript">
    $(document).ready(function(){
      $('#ins_adminis').on('click', function(){
        if ($("#username").val() == "") {
          demo.showNotification('top','right','Username Tidak Boleh Kosong');
        }else if ($("#hak_akses").val() == "") {
          demo.showNotification('top','right','Hak Akses Tidak Boleh Kosong');
        }else if ($("#password").val() == "") {
          demo.showNotification('top','right','Password Tidak Boleh Kosong');
        }else if ($("#kd_kec").val() == "") {
          demo.showNotification('top','right','Kecamatan Tidak Boleh Kosong');
        }else if ($("#kd_kel").val() == "") {
          demo.showNotification('top','right','Kelurahan / Desa Tidak Boleh Kosong');
        }
        // else if ($("#jns_sapras").val() == "") {
        //   demo.showNotification('top','right','Jenis Sapras Tidak Boleh Kosong');
        // }else if ($("#regu_anggota").val() == "") {
        //   demo.showNotification('top','right','Regu Anggota Tidak Boleh Kosong');
        // }
        else{
          $.ajax({
          url: '/adminis/insAdminis/',
            data: {
              username:       $("#username").val(),
              hak_akses:      $("#hak_akses").val(),
              password:       $("#password").val(),
              kd_kec:         $("#kd_kec").val(),
              kd_kel:         $("#kd_kel").val(),
              jns_sapras:     $("#jns_sapras").val(),
              regu_anggota:   $("#regu_anggota").val()
            },
            type: "GET",
            dataType: "json",
            success:function(data){
              $.each(data, function(key, value){
                $('#kd_kel').append("<option value="+ value +">"+ key +"</option>");
              });
              demo.showNotification('top','right','Successfully!');
              window.setTimeout(function(){
                // window.location.href = "http://linmas.pilar.web.id/adminis/adminis";
              }, 1000);
            }
          });
        }
      });
      // end insert
      $('#kd_kec').on('change', function(){
        var stateID = $('#kd_kec').val();
        if (stateID) {
          $.ajax({
            url: '/adminis/srcKd_kelDes/'+stateID,
            type: "GET",
            dataType: "json",
            success:function(data){
              $('#kd_kel').empty();
              $.each(data, function(key, value){
                $('#kd_kel').append("<option value="+ value +">"+ key +"</option>");
              });
            }
          });
        }else{
          $('#kd_kel').empty();
          $('#kd_kel').append("<option value=''>--- SELECT ---</option>");
        }
      });
    });
</script>