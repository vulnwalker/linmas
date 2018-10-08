<div class="row">
  <div class="col-md-1">
      <label class="control-label">JENIS LINMAS</label>
  </div>
  <div class="col-md-2">
      <div class="form-group{{ $errors->has('id_kecamatan') ? 'has-error' : ''}}">
          <input type="text" name="jns_linmas" id="jns_linmas" class="form-control">
      </div>
  </div>
</div>

<hr>
<div class="form-group">
	<button type="button" class="btn btn-primary" id="insJnsLinmas" name="insJnsLinmas">SIMPAN</button>
	<a href="{{ url('jenisLinmas/jenis-linmas') }}">
		<button type="button" class="btn btn-danger">BATAL</button>
	</a>
</div>
@include('linkJS')
<script type="text/javascript">
    $(document).ready(function(){
      $('#insJnsLinmas').on('click', function(){
        if ($("#jns_linmas").val() == "") {
          demo.showNotification('top','right','Jenis Linmas Tidak Boleh Kosong');
        }else{
          $.ajax({
          url: '/jenisLinmas/insJnsLinmas/',
            data: {
              jns_linmas: $("#jns_linmas").val()
            },
            type: "GET",
            dataType: "json",
            success:function(data){
              demo.showNotification('top','right','Successfully!');
              window.setTimeout(function(){
                window.location.href = "http://linmas.pilar.web.id/jenisLinmas/jenis-linmas";
              }, 1000);
            }
          });
        }
      });
    });
</script>