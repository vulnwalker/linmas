<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2">
                <label class="control-label">KECAMATAN</label>
            </div>
            <div class="col-md-2">
                <div class="form-group<?php echo e($errors->has('id_kecamatan') ? 'has-error' : ''); ?>">
                    
                    <select class="form-control" id="kecamatan" name="kecamatan">
                        <option value="">--- SELECT ---</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label class="control-label">KELURAHAN</label>
            </div>
            <div class="col-md-2">
                <div class="form-group<?php echo e($errors->has('kelurahan') ? 'has-error' : ''); ?>">
                    
                    <select class="form-control" id="kelurahan" name="kelurahan">
                        <option value="">--- SELECT ---</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2">
                <label class="control-label">NO ANGGOTA</label>
            </div>
            <div class="col-md-2">
                <div class="form-group<?php echo e($errors->has('telp') ? 'has-error' : ''); ?>">
                    
                    <input type="text" name="no_anggota" id="no_anggota" class="form-control">
                </div>
            </div>
            <div class="col-md-4" style="padding-left: 0px;">
                <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal" style="margin-top: -1%;">CARI</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label class="control-label">NAMA LINMAS</label>
            </div>
            <div class="col-md-3">
                <div class="form-group<?php echo e($errors->has('fax') ? 'has-error' : ''); ?>">
                    
                    <input type="text" name="nm_linmas" id="nm_linmas" class="form-control" readonly="readonly">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-success pull-right" type="button" id="showAsetLinmas" name="showAsetLinmas">BARU</button>
            </div>
        </div>
        <div id="formAsetLinmas" style="display: none;">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="card-title">Aset Linmas</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label">JENIS LINMAS</label>
                </div>
                <div class="col-md-2">
                    <select id="jns_linmas" name="jns_linmas" class="form-control">
                        <option>--- SELECT ---</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label">NAMA ASET</label>
                </div>
                <div class="col-md-2">
                    <input type="text" name="nm_aset" id="nm_aset" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label">MERK/TYPE/SPERIfIKASI</label>
                </div>
                <div class="col-md-2">
                    <textarea rows="4" cols="50"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label">JUMLAH</label>
                </div>
                <div class="col-md-1">
                    <input type="number" name="jml" id="jml" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label">TAHUN PEROLEHAN</label>
                </div>
                <div class="col-md-1">
                    <input type="number" name="th_perolehan" id="th_perolehan" class="form-control" value="<?php echo date("Y") ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label">TAHUN PRODUKSI</label>
                </div>
                <div class="col-md-1">
                    <input type="number" name="th_produksi" id="th_produksi" class="form-control" value="<?php echo date("Y") ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label">KONDISI</label>
                </div>
                <div class="col-md-2">
                    <select>
                        <option value="">--- SELECT ---</option>
                        <option value="1">Baik</option>
                        <option value="2">Kurang Baik</option>
                        <option value="3">Rusak Berat</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label">HARGA /Rp.</label>
                </div>
                <div class="col-md-2">
                    <input type="text" name="harga" id="harga" class="form-control uang" onkeyup="rupiah()">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <label class="control-label">FOTO</label>
                </div>
                <div class="col-md-2">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                      <div class="fileinput-new thumbnail">
                        <img src="../../assets/img/image_placeholder.jpg" alt="...">
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail"></div>
                      <div>
                        <span class="btn btn-rose btn-round btn-file">
                          <span class="fileinput-new">Pilih Gambar</span>
                          <span class="fileinput-exists">Ubah</span>
                          <input type="file" name="...">
                        </span>
                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Batal</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Classic Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="nc-icon nc-simple-remove"></i>
                </button>
                <h4 class="title title-up">CARI NO ANGGOTA</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                        <input type="text" name="src_no" id="src_no" class="form-control" placeholder="Search No Anggota">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="src_nama" id="src_nama" class="form-control" placeholder="Search Nama">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-info" style="margin-top: -1%;">CARI</button>
                    </div>
                </div>
                <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                        <th style="text-align:center; width: 3%;">#</th>
                        <th>
                        <div class="form-check mt-3" style="padding: unset!important;">
                          <div class="form-check" style="height: 36px; padding: unset!important;">
                            <label class="form-check-label">
                              
                              <input type="checkbox" id="select_all">
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </div>
                        </th>
                        <th style="width: 15%;">NO ANGGOTA</th>
                        <th>NAMA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="text-align: center;">1</td>
                      <td style="width: 3%;">
                        <div class="form-check mt-3" style="padding: unset!important;">
                          <div class="form-check" style="height: 36px; padding: unset!important;">
                            <label class="form-check-label">
                              <input type="checkbox" class="checkbox" value="">
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </div>
                      </td>
                      <td>0001</td>
                      <td>Ananda</td>
                    </tr>
                    <tr>
                      <td style="text-align: center;">2</td>
                      <td>
                        <div class="form-check mt-3" style="padding: unset!important;">
                          <div class="form-check" style="height: 36px; padding: unset!important;">
                            <label class="form-check-label">
                              <input type="checkbox" class="checkbox" value="">
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </div>
                      </td>
                      <td>0002</td>
                      <td>Mahdar</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <div class="left-side" style="width: unset;">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
                    <button type="button" class="btn btn-primary">SIMPAN</button>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <!--  End Modal -->
    </div>
</div>

<div class="form-group">
    
    <button class="btn btn-primary" type="button" onclick="showSwal()">SIMPAN</button>
    <a href="<?php echo e(url('/aset/aset')); ?>">
        <button class="btn btn-danger" type="button">BATAL</button>
    </a>
</div>
<script src="<?php echo e(asset('assets/js/core/jquery.min.js')); ?>"></script>
<script type="text/javascript">
    // rupiah
    function rupiah(){
      $('.uang').mask('0.000.000.000', {reverse: true});
    }
    // end rupiah
    var select_all = document.getElementById("select_all"); //select all checkbox
    var checkboxes = document.getElementsByClassName("checkbox"); //checkbox items

    //select all checkboxes
    select_all.addEventListener("change", function(e){
      for (i = 0; i < checkboxes.length; i++) { 
        checkboxes[i].checked = select_all.checked;
      }
    });


    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].addEventListener('change', function(e){ //".checkbox" change 
        //uncheck "select all", if one of the listed checkbox item is unchecked
        if(this.checked == false){
            select_all.checked = false;
        }
        //check "select all" if all checkbox items are checked
        if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
            select_all.checked = true;
        }
      });
    }

    $(document).ready(function(){
      $('#showAsetLinmas').on('click', function(){
          $("#formAsetLinmas").css("display", "unset");
      });
    });

    function showSwal(){
        swal({
            title: 'Are you sure?',
            text: 'You will not be able to recover this imaginary file!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, keep it',
            confirmButtonClass: "btn btn-success",
            cancelButtonClass: "btn btn-danger",
            buttonsStyling: false
          }).then(function() {
            swal({
              title: 'Deleted!',
              text: 'Your imaginary file has been deleted.',
              type: 'success',
              confirmButtonClass: "btn btn-success",
              buttonsStyling: false
            }).catch(swal.noop);
          }, function(dismiss) {
            // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
            if (dismiss === 'cancel') {
                $("#formAsetLinmas").css("display", "none");
              swal({
                title: 'Cancelled',
                text: 'Your imaginary file is safe :)',
                type: 'error',
                confirmButtonClass: "btn btn-info",
                buttonsStyling: false
              }).catch(swal.noop);
            }
          }).catch(swal.noop);
    }
</script>