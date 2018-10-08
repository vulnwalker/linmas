<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-1">
                <label class="control-label">JENIS TUGAS</label>
            </div>
            <div class="col-md-2">
                <div class="form-group<?php echo e($errors->has('id_kecamatan') ? 'has-error' : ''); ?>">
                    <input type="text" name="nm_tugas" id="nm_tugas" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <label class="control-label">SIFAT TUGAS</label>
            </div>
            <div class="col-md-2">
                <div class="form-group<?php echo e($errors->has('kelurahan') ? 'has-error' : ''); ?>">
                    <select class="form-control" id="sifat" name="sifat">
                        <option value="">--- SELECT ---</option>
                        <option value="1">Rutin</option>
                        <option value="2">Berkala</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<div class="form-group">
    <button type="button" class="btn btn-primary" id="insJnsTugas" name="insJnsTugas">SIMPAN</button>
    <a href="<?php echo e(url('tugas/tugas')); ?>">
        <button type="button" class="btn btn-danger">BATAL</button>
    </a>
</div>
<?php echo $__env->make('linkJS', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script type="text/javascript">
    $(document).ready(function(){
      $('#insJnsTugas').on('click', function(){
        if ($("#nm_tugas").val() == "") {
            demo.showNotification('top','right','Jenis Tugas Tidak Boleh Kosong');
        }else if ($("#sifat").val() == "") {
            demo.showNotification('top','right','Sifat Tugas Tidak Boleh Kosong');
        }else{
          $.ajax({
          url: '/tugas/insJnsTugas/',
            data: {
              nm_tugas: $("#nm_tugas").val(),
              sifat:    $("#sifat").val()
            },
            type: "GET",
            dataType: "json",
            success:function(data){
              demo.showNotification('top','right','Successfully!');
              window.setTimeout(function(){
                window.location.href = "http://linmas.pilar.web.id/tugas/tugas";
              }, 1000);
            }
          });
        }
      });
    });
</script>