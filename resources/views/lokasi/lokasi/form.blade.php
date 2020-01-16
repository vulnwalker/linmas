<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}
</style>

<div class="form-group{{ $errors->has('id_kecamatan') ? 'has-error' : ''}}">
    {!! Form::label('id_kecamatan', 'Kecamatan', ['class' => 'control-label']) !!}
    {!! Form::select('id_kecamatan', $Kecamatan, null, ('required' == 'required') ? ['class' => 'form-control','onChange' => 'ChangeKecamatan()', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('id_kecamatan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('id_kelurahan') ? 'has-error' : ''}}">
    {!! Form::label('id_kelurahan', 'Kelurahan', ['class' => 'control-label']) !!}
    {!! Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('id_kelurahan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('nama') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'control-label']) !!}
    {!! Form::text('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('lokasi') ? 'has-error' : ''}}">
    {!! Form::label('lokasi', 'Lokasi', ['class' => 'control-label']) !!}
    {!! Form::textarea('lokasi', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('lokasi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('kondisi') ? 'has-error' : ''}}">
    {!! Form::label('kondisi', 'Kondisi Fisik', ['class' => 'control-label']) !!}
    {!! Form::text('kondisi', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('kondisi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('kelengkapan') ? 'has-error' : ''}}">
    {!! Form::label('kelengkapan', 'Kelengkapan', ['class' => 'control-label']) !!}
    {!! Form::select('kelengkapan', ['' => '', '1' => 'Lengkap', '2' => 'Belum/ Tidak Lengkap'], $kelengkapan, ['class' => 'form-control']) !!}
    {!! $errors->first('kelengkapan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('sarpras') ? 'has-error' : ''}}">
    {!! Form::label('sarpras', 'Sarpras', ['class' => 'control-label']) !!}
    {!! Form::select('sarpras', ['' => '', '1' => 'Baik', '2' => 'Kurang Baik'], $sarpras, ['class' => 'form-control']) !!}
    {!! $errors->first('sarpras', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('aktifitas') ? 'has-error' : ''}}">
    {!! Form::label('aktifitas', 'Aktifitas', ['class' => 'control-label']) !!}
    {!! Form::select('aktifitas', ['' => '', '1' => 'Aktif/ Rutin', '2' => 'Tidak Aktif/ Tidak Rutin'], $aktifitas, ['class' => 'form-control']) !!}
    {!! $errors->first('aktifitas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto') ? 'has-error' : ''}}">
    {!! Form::label('foto', 'Foto', ['class' => 'control-label']) !!}
    {{-- {!! Form::textarea('foto', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!} --}}
    <div class="col-md-4 col-sm-4">
      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
        <div class="fileinput-new thumbnail">
          @if ($foto == "")
            <img src="{{ asset('assets/img/image_placeholder.jpg')}}" alt="...">
          @else
            <img src="{{ url('assets/img/lokasi/', $foto) }}" alt="...">
          @endif

        </div>
        <div class="fileinput-preview fileinput-exists thumbnail"></div>
        <div>
          <span class="btn btn-rose btn-round btn-file">
            <span class="fileinput-new">Select image</span>
            <span class="fileinput-exists">Change</span>
            @if ($foto == "")
              <input type="file" name="foto" />
            @else
              <input type="file" name="foto" />
            @endif
          </span>
          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
        </div>
      </div>
    </div>
</div>



<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'simpan', ['class' => 'btn btn-primary']) !!}
</div>


<script type="text/javascript">

function ChangeKecamatan() {
      var id_kecamatan = $('#id_kecamatan').val();
      if(id_kecamatan) {
          $.ajax({
              url: '/states/get/'+id_kecamatan,
              type:"GET",
              dataType:"json",
              beforeSend: function(){
                  $('#loader').css("visibility", "visible");
              },

              success:function(data) {

                  $('select[name="id_kelurahan"]').empty();

                  $.each(data, function(key, value){

                      $('select[name="id_kelurahan"]').append('<option value="'+ key +'">' + value + '</option>');

                  });
              },
              complete: function(){
                  $('#loader').css("visibility", "hidden");
              }
          });
      } else {
          $('select[name="id_kelurahan"]').empty();
      }


}

</script>
