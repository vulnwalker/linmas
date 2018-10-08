   <div class="form-group{{ $errors->has('id_kecamatan') ? 'has-error' : ''}}">
     <div class="row">
       {!! Form::label('id_kecamatan', ' Kecamatan', ['class' => 'col-md-3 col-form-label']) !!}
       <div class="col-md-3">
         <div class="form-group">
         {!! Form::select('id_kecamatan',$Kecamatan, null, ('required' == 'required') ? ['class' => 'form-control','onChange' => 'ChangeKecamatan()', 'required' => 'required'] : ['class' => 'form-control']) !!}
         </div>
       </div>
     </div>
   </div>
   <div class="form-group{{ $errors->has('id_kelurahan') ? 'has-error' : ''}}">
     <div class="row">
       {!! Form::label('id_kelurahan', 'Kelurahan / Desa', ['class' => 'col-md-3 col-form-label']) !!}
       <div class="col-md-3">
         <div class="form-group">
       {!! Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
         </div>
       </div>
     </div>
   </div>


<div class="form-group{{ $errors->has('jenis_sapras') ? 'has-error' : ''}}">
   <div class="row">
     {!! Form::label('jenis_sapras', 'Jenis Sapras', ['class' => 'col-md-3 col-form-label']) !!}
     <div class="col-md-3">
       <div class="form-group">
       {!! Form::select('jenis_sapras', $slcSapras, null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
       </div>
     </div>
     {!! Form::hidden('jenis_saprasOld', $jenis_saprasOld, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} 
     {!! $errors->first('jenis_sapras', '<p class="help-block">:message</p>') !!}
   </div>
 </div>

<div class="form-group{{ $errors->has('ket_item') ? 'has-error' : ''}}">
<div class="row">
 {!! Form::label('ket_item', 'Merk/ Type/ Spesifikasi', ['class' => 'col-md-3 col-form-label']) !!}
 <div class="col-md-3">
   <div class="form-group">
      {!! Form::textarea('ket_item', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
   </div>
 </div>
</div>
</div>

 <div class="form-group{{ $errors->has('tahun') ? 'has-error' : ''}}">
   <div class="row">
     {!! Form::label('tahun', ' Tahun', ['class' => 'col-md-3 col-form-label']) !!}
     <div class="col-md-2">
       <div class="form-group">
        {!! Form::text('tahun', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
       </div>
     </div>
     {!! $errors->first('tahun', '<p class="help-block">:message</p>') !!}
   </div>
 </div>

<div class="form-group{{ $errors->has('kondisi') ? 'has-error' : ''}}">
   <div class="row">
     {!! Form::label('kondisi', 'Kondisi', ['class' => 'col-md-3 col-form-label']) !!}
     <div class="col-md-3">
       <div class="form-group">
          {!! Form::select('kondisi', ['' => '','Baik' => 'Baik','Kurang Baik' => 'Kurang Baik','Rusak Berat' => 'Rusak Berat'], $kondisi, ['class' => 'form-control']) !!}
       </div>
     </div>
   </div>
 </div>

<div class="form-group{{ $errors->has('keterangan') ? 'has-error' : ''}}">
<div class="row">
 {!! Form::label('keterangan', 'Keterangan', ['class' => 'col-md-3 col-form-label']) !!}
 <div class="col-md-3">
   <div class="form-group">
      {!! Form::textarea('keterangan', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
   </div>
 </div>
</div>
</div>

<hr>
<div class="form-group">
  <div class="row">
    <div class="col-md-2" style="margin-left: 13%;">
      @if($formMode === 'edit')
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary','style' => 'width: 100%;font-size: 17px;']) !!}
      @else
      {!! Form::submit('Simpan', ['class' => 'btn btn-primary','style' => 'width: 100%;font-size: 17px;']) !!}
      @endif

    </div>
    <div class="col-md-2">
      <a href="{{ url('/sapras/sapras') }}" title="Back" class= "btn btn-danger" style= "width: 100%;font-size: 17px;">
        Batal
      </a>
    </div>
  </div>
</div>



<script type="text/javascript">
          function ChangeKecamatan() {

          var id_kecamatan = $('#id_kecamatan').val();
          if(id_kecamatan) {
              $.ajax({
                  url: '/getkelurahan/get/'+id_kecamatan,
                  type:"GET",
                  dataType:"json",
                  beforeSend: function(){
                      var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
                      if ( $('#loading').length ) {
                        $('#loading').remove();
                      }
                      $('#loadingData').append(loader);
                  },

                  success:function(data) {

                      $('select[name="id_kelurahan"]').empty();

                      $.each(data, function(key, value){

                          $('select[name="id_kelurahan"]').append('<option value="'+ value +'">' + key  + '</option>');

                      });
                  },
                  complete: function(){
                      $('#loading').remove();
                  }
              });
          } else {
              $('select[name="id_kelurahan"]').empty();
          }


    }
</script>