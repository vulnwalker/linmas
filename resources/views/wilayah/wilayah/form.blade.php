<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}
</style>
{{-- @foreach($upWilayah as $key=>$value)
@endforeach --}}
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2">
                <label class="control-label">KODE</label>
            </div>
            <div style="padding-right: 15px; padding-left: 15px;">
                <div class="form-group" style="width: 35px;">
                    <input type="text" name="kd_prov" id="kd_prov" class="form-control kode" onkeyup="kode()" readonly="readonly" value="36">
                </div>
            </div>
            <div style="padding-right: 15px;">
                <div class="form-group" style="width: 35px;">
                    <input type="text" name="kd_kota_kab" id="kd_kota_kab" class="form-control kode" onkeyup="kode()" readonly="readonly" value="04">
                </div>
            </div>
            <div style="padding-right: 15px;">
              <div class="form-group" style="width: 35px;">
                {!! Form::text('kd_kec', null, ['id' => 'kd_kec', 'class' => 'form-control kode', 'onkeyup'=>'kode()']) !!}
              </div>
            </div>
            <div>
              <div class="form-group" style="width: 35px;">
                {!! Form::text('kd_kel_des', null, ['id' => 'kd_kel_des', 'class' => 'form-control kode', 'onkeyup'=>'kode()']) !!}
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label class="control-label">KECAMATAN / KELURAHAN/ DESA</label>
            </div>
            <div class="col-md-2">
                <div class="form-group{{ $errors->has('kelurahan') ? 'has-error' : ''}}">
                    {!! Form::text('nama', null, ['id' => 'nama', 'class' => 'form-control']) !!}
                    {!! Form::hidden('id', null, ['id' => 'id', 'class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<div class="form-group">
    {{-- <button type="button" class="btn btn-primary" id="insWilayah" name="insWilayah">SIMPAN</button> --}}
    {{-- {!! Form::submit($formMode === 'edit' ? 'SIMPAN' : 'SIMPAN', ['class' => 'btn btn-primary']) !!} --}}
    {{-- <a href="{{ url('wilayah/wilayah') }}">
        <button class="btn btn-danger" type="button">BATAL</button>
    </a> --}}
</div>
@include('linkJS')
<script type="text/javascript">
    $(document).ready(function(){
      $('#insWilayah').on('click', function(){
        if ($("#kd_kec").val() == "") {
          demo.showNotification('top','right','Kode Kecamatan Tidak Boleh Kosong');
        }else if ($("#kd_kel_des").val() == "") {
          demo.showNotification('top','right','Kode Kelurahan Tidak Boleh Kosong');
        }else if ($("#nama").val() == "") {
          demo.showNotification('top','right','Nama Kecamatan / Kelurahan Tidak Boleh Kosong');
        }else{
          $.ajax({
          url: '/wilayah/insWilayah/',
            data: {
              kd_prov:      $("#kd_prov").val(),
              kd_kota_kab:  $("#kd_kota_kab").val(),
              kd_kec:       $("#kd_kec").val(),
              kd_kel_des:   $("#kd_kel_des").val(),
              nama:         $("#nama").val()
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
                  window.location.href = "http://linmas.pilar.web.id/wilayah/wilayah";
                }, 1000);
              }
            }
          });
        }
      });
      // end insert
      $('#editWilayah').on('click', function(){
        if ($("#kd_kec").val() == "") {
          demo.showNotification('top','right','Kode Kecamatan Tidak Boleh Kosong');
        }else if ($("#kd_kel_des").val() == "") {
          demo.showNotification('top','right','Kode Kelurahan Tidak Boleh Kosong');
        }else if ($("#nama").val() == "") {
          demo.showNotification('top','right','Nama Kecamatan / Kelurahan Tidak Boleh Kosong');
        }else{
          $.ajax({
          url: '/wilayah/editWilayah/',
            data: {
              kd_prov:      $("#kd_prov").val(),
              kd_kota_kab:  $("#kd_kota_kab").val(),
              kd_kec:       $("#kd_kec").val(),
              kd_kel_des:   $("#kd_kel_des").val(),
              nama:         $("#nama").val(),
              id:           $("#id").val()
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
                  window.location.href = "http://linmas.pilar.web.id/wilayah/wilayah";
                }, 1000);
              }
            }
          });
        }
      });
    });
</script>