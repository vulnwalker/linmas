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
            <div class="col-md-1">
                <label class="control-label">NAMA REGU</label>
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
@include('linkJS')
<script type="text/javascript">
    $(document).ready(function(){
      $('#insRegu').on('click', function(){
        if ($("#nama").val() == "") {
          demo.showNotification('top','right','Nama Regu Tidak Boleh Kosong');
        }else{
          $.ajax({
          url: '/regu/insRegu/',
            data: {
              nama:   $("#nama").val()
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
                  window.location.href = "http://linmas.pilar.web.id/regu/regu";
                }, 1000);
              }
            }
          });
        }
      });
      // end insert
      $('#editRegu').on('click', function(){
        if ($("#nama").val() == "") {
          demo.showNotification('top','right','Nama Regu Tidak Boleh Kosong');
        }else{
          $.ajax({
          url: '/regu/editRegu/',
            data: {
              nama:   $("#nama").val(),
              id:     $("#id").val()
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
                  window.location.href = "http://linmas.pilar.web.id/regu/regu";
                }, 1000);
              }
            }
          });
        }
      });
    });
</script>