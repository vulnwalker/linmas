<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-1">
                <label class="control-label">JENIS ASSET</label>
            </div>
            <div class="col-md-2">
                <div class="form-group<?php echo e($errors->has('id_kecamatan') ? 'has-error' : ''); ?>">
                    <input type="text" name="jns_asset" id="jns_asset" class="form-control">
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<div class="form-group">
    <button type="button" class="btn btn-primary" id="insJnsAset" name="insJnsAset">SIMPAN</button>
    <a href="<?php echo e(url('jenisAset/jenisAset')); ?>">
        <button type="button" class="btn btn-danger">BATAL</button>
    </a>
</div>
<?php echo $__env->make('linkJS', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script type="text/javascript">
    $(document).ready(function(){
      $('#insJnsAset').on('click', function(){
        if ($("#jns_asset").val() == "") {
            demo.showNotification('top','right','Jenis Assets Tidak Boleh Kosong');
        }else{
          $.ajax({
          url: '/tugas/insJnsAset/',
            data: {
              jns_asset: $("#jns_asset").val()
            },
            type: "GET",
            dataType: "json",
            success:function(data){
              demo.showNotification('top','right','Successfully!');
              window.setTimeout(function(){
                window.location.href = "http://linmas.pilar.web.id/jenisAset/jenisAset";
              }, 1000);
            }
          });
        }
      });
    });
</script>