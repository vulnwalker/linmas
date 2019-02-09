<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-1">
                <label class="control-label">NAMA TUGAS</label>
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


<div class="form-group">
    
    <button type="button" class="btn btn-primary">SIMPAN</button>
    <a href="<?php echo e(url('tugas/tugas')); ?>">
        <button type="button" class="btn btn-danger">BATAL</button>
    </a>
    
</div>
