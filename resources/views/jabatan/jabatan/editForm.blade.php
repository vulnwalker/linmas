<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}
</style>
{{-- @foreach($upWilayah as $key=>$value)
@endforeach --}}
<div class="row">
    <div class="col-md-12">
        <div class="row" id="rowRegu">
            <div class="col-md-2">
                <label class="control-label">NAMA JABATAN</label>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::hidden('id', null, ['id' => 'id', 'class' => 'form-control']) !!}
                    {!! Form::text('nama', null, ['id' => 'nama', 'class' => 'form-control']) !!}
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
      $('#editJabatan').on('click', function(){
        if ($("#nama").val() == "") {
          demo.showNotification('top','right','Nama Regu Tidak Boleh Kosong');
        }else{
          $.ajax({
          url: '/jabatan/editJabatan/',
            data: {
              nama:     $("#nama").val(),
              id:       $("#id").val()
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
                  window.location.href = "http://linmas.pilar.web.id/jabatan/jabatan";
                }, 1000);
              }
            }
          });
        }
      });
    });
</script>
<script type="text/javascript">
  function srcRegu(){
    var kd_jabatan = document.getElementById("danton").value;
    if (kd_jabatan == 1) {
      document.getElementById("rowRegu").style.display = "-webkit-box";
    }else{
      document.getElementById("rowRegu").style.display = "-webkit-box";
    }
  }
</script>