<div class="row">
  {!! Form::label('nama', 'Nama Kegiatan', ['class' => 'col-md-3 col-form-label']) !!}
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::text('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    </div>
  </div>
  {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
 </div>

 <div class="row">
  {!! Form::label('lokasi', 'Lokasi Kegiatan', ['class' => 'col-md-3 col-form-label']) !!}
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::text('lokasi', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    </div>
  </div>
  {!! $errors->first('lokasi', '<p class="help-block">:message</p>') !!}
 </div>

<div class="form-group{{ $errors->has('tanggal_mulai') ? 'has-error' : ''}}">
 <div class="row">
   {!! Form::label('tanggal_mulai', 'Tanggal', ['class' => 'col-md-3 col-form-label']) !!}
   <div class="col-md-2" style="flex: 0 0 15.88%;">
     <div class="form-group">
   {!! Form::text('tanggal_mulai', $tanggal_mulai, ('required' == 'required') ? ['class' => 'form-control datepicker', 'required' => 'required'] : ['class' => 'form-control']) !!}
   {!! $errors->first('tanggal_mulai', '<p class="help-block">:message</p>') !!}
     </div>
   </div>s/d
   <div class="col-md-2" style="flex: 0 0 15.88%;">
     <div class="form-group">
   {!! Form::text('tanggal_selesai', $tanggal_selesai, ('required' == 'required') ? ['class' => 'form-control datepicker', 'required' => 'required'] : ['class' => 'form-control']) !!}
   {!! $errors->first('tanggal_selesai', '<p class="help-block">:message</p>') !!}
     </div>
   </div>
 </div>
</div>

<div class="row">
  {!! Form::label('penyelengara', 'Penyelenggara', ['class' => 'col-md-3 col-form-label']) !!}
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::text('penyelengara', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    </div>
  </div>
  {!! $errors->first('penyelengara', '<p class="help-block">:message</p>') !!}
 </div>


 <div class="row">
  {!! Form::label('kegiatan', 'Isi Kegiatan', ['class' => 'col-md-3 col-form-label']) !!}
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::textarea('kegiatan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    </div>
  </div>
  {!! $errors->first('kegiatan', '<p class="help-block">:message</p>') !!}
 </div>

<!--  <div class="row">
  {!! Form::label('narasumber', 'Narasumber', ['class' => 'col-md-3 col-form-label']) !!}
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::text('narasumber', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    </div>
  </div>
  {!! $errors->first('narasumber', '<p class="help-block">:message</p>') !!}
 </div> -->


