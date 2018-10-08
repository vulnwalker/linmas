<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2">
                <label class="control-label">KODE</label>
            </div>
            <div class="col-md-1">
                <div class="form-group<?php echo e($errors->has('id_kecamatan') ? 'has-error' : ''); ?>">
                    
                    <input type="text" name="kd_kec" id="kd_kec" class="form-control kode" onkeyup="kode()">
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group<?php echo e($errors->has('id_kecamatan') ? 'has-error' : ''); ?>">
                    <input type="text" name="kd_kel" id="kd_kel" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label class="control-label">NAMA KECAMATAN / KELURAHAN</label>
            </div>
            <div class="col-md-2">
                <div class="form-group<?php echo e($errors->has('kelurahan') ? 'has-error' : ''); ?>">
                    
                    <input type="text" name="nm_kec_kel" id="nm_kec_kel" class="form-control">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="form-group">
    <button type="button" class="btn btn-primary">SIMPAN</button>
    <a href="<?php echo e(url('wilayah/wilayah')); ?>">
        <button class="btn btn-danger" type="button">BATAL</button>
    </a>
    
</div>
