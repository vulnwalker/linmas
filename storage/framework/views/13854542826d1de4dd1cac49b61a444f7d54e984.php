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
                  <?php echo Form::text('email', null, ['id' => 'username', 'class' => 'form-control']); ?>

              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
              <label class="control-label">PASSWORD</label>
          </div>
          <div class="col-md-2">
              <div class="form-group">
                  <input type="password" name="password" id="password" class="form-control" value="<?php echo e($username->password2nd); ?>">
                  <?php echo Form::hidden('id', null, ['id' => 'id', 'class' => 'form-control']); ?>

              </div>
          </div>
          <button class="btn btn-primary btn-round btn-icon" type="button" id="showPassword" onclick="showPass();" style="margin: 0px; border-radius: 100%; margin-top: -7px;">
            <i class="fa fa-eye"></i>
          </button>

          <button class="btn btn-primary btn-round btn-icon" type="button" id="hidePassword" onclick="hidePass();" style="margin: 0px; border-radius: 100%; margin-top: -7px; display: none;">
            <i class="fa fa-eye-slash"></i>
          </button>
        </div>
        <div class="row">
          <div class="col-md-2">
            <label class="control-label">LEVEL</label>
          </div>
          <div class="col-md-1">
            <div class="form-group">
              <div class="form-check-radio" style="margin-bottom: 0px;" onclick="hide()">
                <label class="form-check-label">
                    <input class="form-check-input levelRadio" type="radio" name="levelRadio" id="exampleRadios11" value="1" <?php if($username->level == 1): ?> checked <?php endif; ?>> Administrasi
                  <span class="form-check-sign"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-check-radio" style="margin-bottom: 0px; margin-left: 10px;" onclick="show()">
              <label class="form-check-label">
                  <input class="form-check-input levelRadio" type="radio" name="levelRadio" id="exampleRadios12" value="2" <?php if($username->level == 2): ?> checked <?php endif; ?>> Operator
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <?php if($username->level == 1): ?>
          <div class="row" id="rowKec" style="display: -webkit-box;">
            <div class="col-md-2">
              <label class="control-label">KECAMATAN</label>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <select class="form-control" id="kd_kec" name="kd_kec">
                  <option value="">SEMUA</option>
                  <?php $__currentLoopData = $slcKd_kec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($value->kd_kec); ?>" <?php if($value->kd_kec == $username->kd_kec): ?> selected <?php endif; ?>><?php echo e($value->nama); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row" id="rowKelDes" style="display: -webkit-box;">
            <div class="col-md-2">
              <label class="control-label">KELURAHAN / DESA</label>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <select class="form-control" id="kel_des" name="kel_des">
                  <option value="">SEMUA</option>
                  <?php $__currentLoopData = $slcKd_kel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($value->kd_kel_des); ?>" <?php if($value->kd_kel_des == $username->kel_des): ?> selected <?php endif; ?>><?php echo e($value->nama); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>
          </div>
        <?php else: ?>
          <div class="row" id="rowKec" style="display: -webkit-box;">
            <div class="col-md-2">
              <label class="control-label">KEC</label>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <select class="form-control" id="kd_kec" name="kd_kec">
                  <option value="">SEMUA</option>
                  <?php $__currentLoopData = $slcKd_kec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($value->kd_kec); ?>" <?php if($value->kd_kec == $username->kd_kec): ?> selected <?php endif; ?>><?php echo e($value->nama); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row" id="rowKelDes" style="display: -webkit-box;">
            <div class="col-md-2">
              <label class="control-label">KEL / DES</label>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <select class="form-control" id="kel_des" name="kel_des">
                  <option value="">SEMUA</option>
                  <?php $__currentLoopData = $slcKd_kel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($value->kd_kel_des); ?>" <?php if($value->kd_kel_des == $username->kel_des): ?> selected <?php endif; ?>><?php echo e($value->nama); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>
          </div>
        <?php endif; ?>
    </div>
    <div class="col-md-12" style="padding-left: 0px; border-bottom: 1px solid #94949454; margin-bottom: .5rem;">
      <div class="row">
        <div class="col-md-12">
          <h6>HAK AKSES</h6>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2">
          <label class="control-label">MODUL ADMINISTRASI</label>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <div class="form-check-radio" style="margin-bottom: 0px;">
              <label class="form-check-label">
                <input class="form-check-input adminisRadio" type="radio" name="adminisRadio" id="exampleRadios11" value="1" <?php if($username->adminis == 1): ?> checked <?php endif; ?>> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input adminisRadio" type="radio" name="adminisRadio" id="exampleRadios12" value="2" <?php if($username->adminis == 2): ?> checked <?php endif; ?>> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input adminisRadio" type="radio" name="adminisRadio" id="exampleRadios13" value="3" <?php if($username->adminis == 3): ?> checked <?php endif; ?>> Disable
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label class="control-label">MODUL USER</label>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <div class="form-check-radio" style="margin-bottom: 0px;">
              <label class="form-check-label">
                <input class="form-check-input userRadio" type="radio" name="userRadio" id="exampleRadios11" value="1" <?php if($username->user == 1): ?> checked <?php endif; ?>> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input userRadio" type="radio" name="userRadio" id="exampleRadios12" value="2" <?php if($username->user == 2): ?> checked <?php endif; ?>> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input userRadio" type="radio" name="userRadio" id="exampleRadios13" value="3" <?php if($username->user == 3): ?> checked <?php endif; ?>> Disable
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label class="control-label">MODUL PENDATAAN</label>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <div class="form-check-radio" style="margin-bottom: 0px;">
              <label class="form-check-label">
                <input class="form-check-input anggotaRadio" type="radio" name="anggotaRadio" id="exampleRadios11" value="1" <?php if($username->anggota == 1): ?> checked <?php endif; ?>> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input anggotaRadio" type="radio" name="anggotaRadio" id="exampleRadios12" value="2" <?php if($username->anggota == 2): ?> checked <?php endif; ?>> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input anggotaRadio" type="radio" name="anggotaRadio" id="exampleRadios13" value="3" <?php if($username->anggota == 3): ?> checked <?php endif; ?>> Disable
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label class="control-label">MODUL PENGASAHAAN</label>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <div class="form-check-radio" style="margin-bottom: 0px;">
              <label class="form-check-label">
                <input class="form-check-input pengaRadio" type="radio" name="pengaRadio" id="exampleRadios11" value="1" <?php if($username->pengasahaan == 1): ?> checked <?php endif; ?>> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input pengaRadio" type="radio" name="pengaRadio" id="exampleRadios12" value="2" <?php if($username->pengasahaan == 2): ?> checked <?php endif; ?>> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input pengaRadio" type="radio" name="pengaRadio" id="exampleRadios13" value="3" <?php if($username->pengasahaan == 3): ?> checked <?php endif; ?>> Disable
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label class="control-label">MODUL PEMBINAAN</label>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <div class="form-check-radio" style="margin-bottom: 0px;">
              <label class="form-check-label">
                <input class="form-check-input pembinaRadio" type="radio" name="pembinaRadio" id="exampleRadios11" value="1" <?php if($username->pembinaan == 1): ?> checked <?php endif; ?>> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input pembinaRadio" type="radio" name="pembinaRadio" id="exampleRadios12" value="2" <?php if($username->pembinaan == 2): ?> checked <?php endif; ?>> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input pembinaRadio" type="radio" name="pembinaRadio" id="exampleRadios13" value="3" <?php if($username->pembinaan == 3): ?> checked <?php endif; ?>> Disable
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label class="control-label">MODUL POS SISKAMLING</label>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <div class="form-check-radio" style="margin-bottom: 0px;">
              <label class="form-check-label">
                <input class="form-check-input siskamRadio" type="radio" name="siskamRadio" id="exampleRadios11" value="1" <?php if($username->posKamling == 1): ?> checked <?php endif; ?>> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input siskamRadio" type="radio" name="siskamRadio" id="exampleRadios12" value="2" <?php if($username->posKamling == 2): ?> checked <?php endif; ?>> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input siskamRadio" type="radio" name="siskamRadio" id="exampleRadios13" value="3" <?php if($username->posKamling == 3): ?> checked <?php endif; ?>> Disable
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label class="control-label">MODUL SAPRAS</label>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <div class="form-check-radio" style="margin-bottom: 0px;">
              <label class="form-check-label">
                <input class="form-check-input saprasRadio" type="radio" name="saprasRadio" id="exampleRadios11" value="1" <?php if($username->sapras == 1): ?> checked <?php endif; ?>> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input saprasRadio" type="radio" name="saprasRadio" id="exampleRadios12" value="2" <?php if($username->sapras == 2): ?> checked <?php endif; ?>> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input saprasRadio" type="radio" name="saprasRadio" id="exampleRadios13" value="3" <?php if($username->sapras == 3): ?> checked <?php endif; ?>> Disable
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label class="control-label">MODUL PUBLIKASI</label>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <div class="form-check-radio" style="margin-bottom: 0px;">
              <label class="form-check-label">
                <input class="form-check-input publiRadio" type="radio" name="publiRadio" id="exampleRadios11" value="1" <?php if($username->publikasi == 1): ?> checked <?php endif; ?>> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input publiRadio" type="radio" name="publiRadio" id="exampleRadios12" value="2" <?php if($username->publikasi == 2): ?> checked <?php endif; ?>> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input publiRadio" type="radio" name="publiRadio" id="exampleRadios13" value="3" <?php if($username->publikasi == 3): ?> checked <?php endif; ?>> Disable
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label class="control-label">MODUL PELAPORAN</label>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <div class="form-check-radio" style="margin-bottom: 0px;">
              <label class="form-check-label">
                <input class="form-check-input laporanRadio" type="radio" name="laporanRadio" id="exampleRadios11" value="1" <?php if($username->pelaporan == 1): ?> checked <?php endif; ?>> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input laporanRadio" type="radio" name="laporanRadio" id="exampleRadios12" value="2" <?php if($username->pelaporan == 2): ?> checked <?php endif; ?>> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input laporanRadio" type="radio" name="laporanRadio" id="exampleRadios13" value="3" <?php if($username->pelaporan == 3): ?> checked <?php endif; ?>> Disable
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label class="control-label">STATUS</label>
        </div>
        <div class="col-md-2">
          <select class="form-control" id="status" name="status">
            <option value="">SELECT</option>
            <option value="1" <?php if($username->status == 1): ?> selected <?php endif; ?>>AKTIF</option>
            <option value="2" <?php if($username->status == 2): ?> selected <?php endif; ?>>TIDAK</option>
          </select>
        </div>
      </div>
    </div>
</div>


<div class="form-group">
    <button type="button" class="btn btn-primary" id="editUser" name="editUser">SIMPAN</button>
    <a href="<?php echo e(url('username/username')); ?>">
        <button class="btn btn-danger" type="button">BATAL</button>
    </a>
</div>

<script src="<?php echo e(asset('assets/js/core/jquery.min.js')); ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('#editUser').on('click', function(){
        var level =       $(".levelRadio:checked").val();
        var adminis =     $(".adminisRadio:checked").val();
        var user =        $(".userRadio:checked").val();
        var anggota =     $(".anggotaRadio:checked").val();
        var pengasahaan = $(".pengaRadio:checked").val();
        var pembinaan =   $(".pembinaRadio:checked").val();
        var posKamling =  $(".siskamRadio:checked").val();
        var sapras =      $(".saprasRadio:checked").val();
        var publikasi =   $(".publiRadio:checked").val();
        var pelaporan =   $(".laporanRadio:checked").val();
        if ($("#username").val() == "") {
          demo.showNotification('top','right','Username Tidak Boleh Kosong');
        }else if ($("#password").val() == "") {
          demo.showNotification('top','right','Password Tidak Boleh Kosong');
        }else if ($("#status").val() == "") {
          demo.showNotification('top','right','Status Tidak Boleh Kosong');
        }else{
          $.ajax({
          url: '/username/editUser/',
            data: {
              username:     $("#username").val(),
              password:     $("#password").val(),
              kd_kec:       $("#kd_kec").val(),
              kel_des:      $("#kel_des").val(),
              status:       $("#status").val(),
              id:           $("#id").val(),
              level:        level,
              adminis:      adminis,
              user:         user,
              anggota:      anggota,
              pengasahaan:  pengasahaan,
              pembinaan:    pembinaan,
              posKamling:   posKamling,
              sapras:       sapras,
              publikasi:    publikasi,
              pelaporan:    pelaporan
            },
            type: "GET",
            // dataType: "json",
            success:function(data){
              var resp = eval('(' + data + ')');
              if (resp.err != "") {
                demo.showNotification('top','right',resp.err);
              }else{
                demo.showNotification('top','right','Successfully!');
                window.setTimeout(function(){
                  window.location.href = "http://linmas.pilar.web.id/username/username/";
                }, 1000);
              }
            }
          });
        }
      });
      // end insert
      $('#kd_kec').on('change', function(){
        var stateID = $('#kd_kec').val();
        if (stateID) {
          $.ajax({
            url: '/username/srcKelDes/'+stateID,
            type: "GET",
            dataType: "json",
            success:function(data){
              $('#kel_des').empty();
              $.each(data, function(key, value){
                $('#kel_des').append("<option value="+ value +">"+ key +"</option>");
              });
            }
          });
        }else{
          $('#kel_des').empty();
          $('#kel_des').append("<option value=''>SEMUA</option>");
        }
      });
    });
</script>
<script type="text/javascript">
  function hide(){
    document.getElementById("rowKec").style.display = "-webkit-box";
    // document.getElementById("rowKec").style.display = "none";
    document.getElementById("rowKelDes").style.display = "-webkit-box";
    // document.getElementById("rowKelDes").style.display = "none";
  }

  function show(){
    document.getElementById("rowKec").style.display = "-webkit-box";
    document.getElementById("rowKelDes").style.display = "-webkit-box";
  }

  function showPass(){
    document.getElementById("password").type = "text";
    document.getElementById("showPassword").style.display = "none";
    document.getElementById("hidePassword").style.display = "-webkit-box";
  }

  function hidePass(){
    document.getElementById("password").type = "password";
    document.getElementById("showPassword").style.display = "-webkit-box";
    document.getElementById("hidePassword").style.display = "none";
  }
</script>