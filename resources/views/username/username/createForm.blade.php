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
                {{-- {!! Form::text('email', null, ['id' => 'username', 'class' => 'form-control']) !!} --}}
                <input type="text" name="email" id="username" class="form-control" value="" autocomplete="off">
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
            <label class="control-label">PASSWORD</label>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" value="" autocomplete="off">
                {{-- {!! Form::text('password', null, ['class' => 'form-control']) !!} --}}
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label class="control-label">LEVEL</label>
        </div>
        <div class="col-md-1">
          <div class="form-group">
            <div class="form-check-radio" style="margin-bottom: 0px;" onclick="hide()">
              <label class="form-check-label">
                  <input class="form-check-input levelRadio" type="radio" name="levelRadio" id="exampleRadios11" value="1" checked> Administrasi
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px; margin-left: 10px;" onclick="show()">
            <label class="form-check-label">
                <input class="form-check-input levelRadio" type="radio" name="levelRadio" id="exampleRadios12" value="2"> Operator
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
      </div>
        <div class="row" id="rowKec" style="display: -webkit-box;">
          <div class="col-md-2">
            <label class="control-label">KECAMATAN</label>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <select class="form-control" id="kd_kec" name="kd_kec">
                <option value="">SEMUA</option>
                @foreach($slcKd_kec as $value)
                  <option value="{{ $value->kd_kec }}">{{ $value->nama }}</option>
                @endforeach
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
                {{-- @foreach($slcKd_kel as $value)
                  <option value="{{ $value->kd_kel_des }}">{{ $value->nama }}</option>
                @endforeach --}}
              </select>
            </div>
          </div>
        </div>
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
                <input class="form-check-input adminisRadio" type="radio" name="adminisRadio" id="adminisRadio1" value="1"> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input adminisRadio" type="radio" name="adminisRadio" id="adminisRadio2" value="2" checked> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input adminisRadio" type="radio" name="adminisRadio" id="adminisRadio3" value="3"> Disable
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
                <input class="form-check-input userRadio" type="radio" name="userRadio" id="userRadio1" value="1"> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input userRadio" type="radio" name="userRadio" id="userRadio2" value="2" checked> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input userRadio" type="radio" name="userRadio" id="userRadio3" value="3"> Disable
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
                <input class="form-check-input anggotaRadio" type="radio" name="anggotaRadio" id="exampleRadios11" value="1"> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input anggotaRadio" type="radio" name="anggotaRadio" id="exampleRadios12" value="2" checked> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input anggotaRadio" type="radio" name="anggotaRadio" id="exampleRadios13" value="3"> Disable
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
                <input class="form-check-input pengaRadio" type="radio" name="pengaRadio" id="exampleRadios11" value="1"> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input pengaRadio" type="radio" name="pengaRadio" id="exampleRadios12" value="2" checked> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input pengaRadio" type="radio" name="pengaRadio" id="exampleRadios13" value="3"> Disable
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
                <input class="form-check-input pembinaRadio" type="radio" name="pembinaRadio" id="exampleRadios11" value="1"> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input pembinaRadio" type="radio" name="pembinaRadio" id="exampleRadios12" value="2" checked> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input pembinaRadio" type="radio" name="pembinaRadio" id="exampleRadios13" value="3"> Disable
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
                <input class="form-check-input siskamRadio" type="radio" name="siskamRadio" id="exampleRadios11" value="1"> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input siskamRadio" type="radio" name="siskamRadio" id="exampleRadios12" value="2" checked> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input siskamRadio" type="radio" name="siskamRadio" id="exampleRadios13" value="3"> Disable
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
                <input class="form-check-input saprasRadio" type="radio" name="saprasRadio" id="exampleRadios11" value="1"> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input saprasRadio" type="radio" name="saprasRadio" id="exampleRadios12" value="2" checked> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input saprasRadio" type="radio" name="saprasRadio" id="exampleRadios13" value="3"> Disable
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
                <input class="form-check-input publiRadio" type="radio" name="publiRadio" id="exampleRadios11" value="1"> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input publiRadio" type="radio" name="publiRadio" id="exampleRadios12" value="2" checked> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input publiRadio" type="radio" name="publiRadio" id="exampleRadios13" value="3"> Disable
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
                <input class="form-check-input laporanRadio" type="radio" name="laporanRadio" id="exampleRadios11" value="1"> Read
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input laporanRadio" type="radio" name="laporanRadio" id="exampleRadios12" value="2" checked> Write
              <span class="form-check-sign"></span>
            </label>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-check-radio" style="margin-bottom: 0px;">
            <label class="form-check-label">
              <input class="form-check-input laporanRadio" type="radio" name="laporanRadio" id="exampleRadios13" value="3"> Disable
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
            <option value="1" selected="selected">AKTIF</option>
            <option value="2">TIDAK</option>
          </select>
        </div>
      </div>
    </div>
</div>


<div class="form-group">
    <button type="button" class="btn btn-primary" id="insUser" name="insUser">SIMPAN</button>
    <a href="{{ url('username/username') }}">
        <button class="btn btn-danger" type="button">BATAL</button>
    </a>
</div>
{{-- @include('linkJS') --}}
<script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $("#username").val('');
      $("#password").val('');
      $('#insUser').on('click', function(){
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
          url: '/username/insUser/',
            data: {
              username:     $("#username").val(),
              password:     $("#password").val(),
              kd_kec:       $("#kd_kec").val(),
              kel_des:      $("#kel_des").val(),
              status:       $("#status").val(),
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
          $('#kel_des').append("<option value=''>--- SELECT ---</option>");
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
    document.getElementById("adminisRadio2").checked = true;
    document.getElementById("userRadio2").checked = true;
  }

  function show(){
    document.getElementById("rowKec").style.display = "-webkit-box";
    document.getElementById("rowKelDes").style.display = "-webkit-box";
    document.getElementById("adminisRadio3").checked = true;
    document.getElementById("userRadio3").checked = true;
  }
</script>