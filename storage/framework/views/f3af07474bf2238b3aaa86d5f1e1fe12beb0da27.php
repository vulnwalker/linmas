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


<div class="form-group">
    
    <button type="button" class="btn btn-primary">SIMPAN</button>
    <a href="<?php echo e(url('jenisAset/jenisAset')); ?>">
        <button type="button" class="btn btn-danger">BATAL</button>
    </a>
    
</div>
