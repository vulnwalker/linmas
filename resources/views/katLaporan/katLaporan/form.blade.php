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
                <label class="control-label">NAMA KATEGORI LAPORAN</label>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::text('nama', null, ['id' => 'nama', 'class' => 'form-control']) !!}
                    {!! Form::hidden('id', null, ['id' => 'id', 'class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
{{-- @include('linkJS') --}}
<script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('#insKatLaporan').on('click', function(){
        if ($("#nama").val() == "") {
          demo.showNotification('top','right','Kode Kecamatan Tidak Boleh Kosong');
        }else{
          $.ajax({
          url: '/katLaporan/insKatLaporan/',
            data: {
              nama: $("#nama").val()
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
                  window.location.href = "http://linmas.pilar.web.id/katLaporan/katLaporan";
                }, 1000);
              }
            }
          });
        }
      });
      // end insert
      $('#editKatLaporan').on('click', function(){
        if ($("#nama").val() == "") {
          demo.showNotification('top','right','Nama Tidak Boleh Kosong');
        }else{
          $.ajax({
          url: '/katLaporan/editKatLaporan/',
            data: {
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
                  window.location.href = "http://linmas.pilar.web.id/katLaporan/katLaporan";
                }, 1000);
              }
            }
          });
        }
      });
    });
</script>