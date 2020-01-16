<div class="form-group{{ $errors->has('id_kecamatan') ? 'has-error' : ''}}">
  <div class="row">
    {!! Form::label('id_kecamatan', ' Kecamatan', ['class' => 'col-md-3 col-form-label']) !!}
    <div class="col-md-3">
      <div class="form-group">
      {!! Form::select('id_kecamatan', $Kecamatan, null, ('required' == 'required') ? ['class' => 'form-control','onChange' => 'ChangeKecamatan()', 'required' => 'required'] : ['class' => 'form-control']) !!}
      </div>
    </div>
    {{-- {!! Form::textarea('id_kecamatan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
    {!! $errors->first('id_kecamatan', '<p class="help-block">:message</p>') !!}
  </div>
</div>
<div class="form-group{{ $errors->has('id_kelurahan') ? 'has-error' : ''}}">
  <div class="row">
    {!! Form::label('id_kelurahan', ' Kelurahan/ Desa', ['class' => 'col-md-3 col-form-label']) !!}
    <div class="col-md-3">
      <div class="form-group">
    {!! Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
      </div>
    </div>
    {{-- {!! Form::textarea('id_kelurahan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
    {!! $errors->first('id_kelurahan', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="row">
  {!! Form::label('nama', 'Nama Pos Jaga', ['class' => 'col-md-3 col-form-label']) !!}
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::text('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    </div>
  </div>
  {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
 </div>
<div class="row">
  {!! Form::label('alamat', 'Alamat', ['class' => 'col-md-3 col-form-label']) !!}
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::textarea('alamat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    </div>
  </div>
  {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
 </div>

 <div class="row">
   {!! Form::label('luas', 'Luas Bangunan (m2)', ['class' => 'col-md-3 col-form-label']) !!}
   <div class="col-md-2">
     <div class="form-group">
       {!! Form::text('luas', null, ('required' == 'required') ? ['class' => 'form-control luasna', 'required' => 'required'] : ['onkeyup' => 'luasna()','class' => 'form-control luasna']) !!}
     </div>
   </div>
   {!! $errors->first('luas', '<p class="help-block">:message</p>') !!}
  </div>

  <div class="form-group{{ $errors->has('konstruksi') ? 'has-error' : ''}}">
    <div class="row">
      {!! Form::label('konstruksi', 'Konstruksi', ['class' => 'col-md-3 col-form-label']) !!}
      <div class="col-md-2">
        <div class="form-group">
          {!! Form::select('konstruksi', ['' => '', '1' => 'Permanen', '2' => 'Semi Permanen', '3' => 'Darurat'],$konstruksi, ['class' => 'form-control']) !!}
          {!! $errors->first('konstruksi', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
  </div>
  </div>
  <div class="form-group{{ $errors->has('kondisi') ? 'has-error' : ''}}">
    <div class="row">
      {!! Form::label('kondisi', 'Kondisi', ['class' => 'col-md-3 col-form-label']) !!}
      <div class="col-md-2">
        <div class="form-group">
          {!! Form::select('kondisi', ['' => '', '1' => 'Baik', '2' => 'Kurang Baik', '3' => 'Rusak Berat'],$kondisi, ['class' => 'form-control']) !!}
          {!! $errors->first('kondisi', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
  </div>
  </div>


    <div class="form-group{{ $errors->has('keterangan') ? 'has-error' : ''}}">
    <div class="row">
      {!! Form::label('luas_tanah', 'Luas Tanah (m2)', ['class' => 'col-md-3 col-form-label']) !!}
      <div class="col-md-2">
        <div class="form-group">
      {!! Form::text('luas_tanah', null, ('' == 'required') ? [ 'required' => 'required'] : ['class' => 'form-control luasna']) !!}
      {!! $errors->first('luas_tanah', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
</div>

  <div class="form-group{{ $errors->has('keterangan') ? 'has-error' : ''}}">
    <div class="row">
      {!! Form::label('kepemilikan', 'Kepemilikan', ['class' => 'col-md-3 col-form-label']) !!}
      <div class="col-md-4">
        <div class="form-group">
      {!! Form::text('kepemilikan', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
      {!! $errors->first('kepemilikan', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
</div>

  <div class="form-group{{ $errors->has('aktifitas') ? 'has-error' : ''}}">
    <div class="row">
      {!! Form::label('aktifitas', 'Aktifitas', ['class' => 'col-md-3 col-form-label']) !!}
      <div class="col-md-2">
        <div class="form-group">
          {!! Form::select('aktifitas', ['' => '', '1' => 'Aktif', '2' => 'Tidak Aktif'],$aktifitas, ['class' => 'form-control']) !!}
          {!! $errors->first('aktifitas', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
  </div>
  </div>


  <div class="form-group{{ $errors->has('keterangan') ? 'has-error' : ''}}">
    <div class="row">
      {!! Form::label('keterangan', 'Keterangan', ['class' => 'col-md-3 col-form-label']) !!}
      <div class="col-md-4">
        <div class="form-group">
      {!! Form::textarea('keterangan', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
      {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
</div>

  <div class="form-group{{ $errors->has('foto') ? 'has-error' : ''}}">
    <div class="row">
      {!! Form::label('foto', 'Foto ', ['class' => 'col-md-3 col-form-label']) !!}
      {{-- {!! Form::textarea('foto', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
      {!! $errors->first('foto', '<p class="help-block">:message</p>') !!} --}}
      <div class="col-md-9">
        <div class="form-group">
      <div >
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
          <div class="fileinput-new thumbnail">
            @if ($foto == "")
              <img src="{{ asset('assets/img/image_placeholder.jpg')}}" alt="...">
            @else
              <img src="{{ url('assets/img/posjaga/', $foto) }}" alt="...">
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
  </div>
</div>
</div>

<div class="form-group">
  <hr>
  <div class="row">
    <div class="col-md-2" style="margin-left: 13%;">
      @if($formMode === 'edit')
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary','style' => 'width: 100%;font-size: 17px;']) !!}
      @else
      {!! Form::submit('Simpan', ['id' => 'simpans','onclick' => 'SimpanBtn()','class' => 'btn btn-primary','style' => 'width: 100%;font-size: 17px;']) !!}
      @endif

    </div>
    <div class="col-md-2">
      <a href="{{ url('/posJaga/pos-jaga') }}" title="Back" class= "btn btn-danger" style= "width: 100%;font-size: 17px;">
        Batal
      </a>
    </div>
  </div>
</div>



<script type="text/javascript">

  function SimpanBtn() {

  if ($('#id_kecamatan').val()== '' || $('#id_kelurahan').val() == '' || $('#nama').val() == '' || $('#alamat').val() == '') {
     document.getElementById("simpans").disabled = false;
     swal("Maaf", "Lengkapi Data", "error");
  }else{
    document.getElementById("simpans").disabled = true;
    document.getElementById("simpans").disabled = true;
    document.getElementById("simpan").submit();

  }
     
}

function ChangeKecamatan() {
      var id_kecamatan = $('#id_kecamatan').val();
      if(id_kecamatan) {
          $.ajax({
              url: '/getkelurahan/get/'+id_kecamatan,
              type:"GET",
              dataType:"json",
              beforeSend: function(){
                  $('#loader').css("visibility", "visible");
              },

              success:function(data) {

                  $('select[name="id_kelurahan"]').empty();

                  $.each(data, function(key, value){

                      $('select[name="id_kelurahan"]').append('<option value="'+ value +'">' + key + '</option>');

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
