<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}
.card {
    margin-bottom: 3px;
    margin-left: -10px;
    margin-right: -10px;
}
</style>

<div class="row">
  <div class="col-md-12">
    <div class="card-header">
      <div class="row">
        <div class="col-md-12">
          <h4 class="card-title">Data Kecamatan/ Kelurahan</h4>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="form-group{{ $errors->has('id_kecamatan') ? 'has-error' : ''}}">
        <div class="row">
          {!! Form::label('id_kecamatan', ' Kecamatan :', ['class' => 'col-md-3 col-form-label']) !!}
          <div class="col-md-2">
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
          {!! Form::label('id_kelurahan', ' Kelurahan :', ['class' => 'col-md-3 col-form-label']) !!}
          <div class="col-md-2">
            <div class="form-group">
          {!! Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            </div>
          </div>
          {{-- {!! Form::textarea('id_kelurahan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
          {!! $errors->first('id_kelurahan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
          <div class="card-body">
            <div class="card-header">
            <div class="row">
                <div class="col-md-12">
                  <h4 class="card-title">Data Pribadi User</h4>
                </div>
            </div>
            </div>
            <div class="form-group{{ $errors->has('nama') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('nama', 'Nama : ', ['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-4">
                  <div class="form-group">
                {!! Form::text('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('email', 'Email : ',['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-5">
                  <div class="form-group">
                    {!! Form::email('email', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
              </div>
            </div>
            </div>
            <div class="form-group{{ $errors->has('hp') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('hp', 'Hp : ', ['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-3">
                  <div class="form-group">
                {!! Form::text('hp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                {!! $errors->first('hp', '<p class="help-block">:message</p>') !!}
                </div>
              </div>
            </div>
          </div>
            <div class="form-group{{ $errors->has('no_ktp') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('no_ktp', 'No Ktp : ',['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-5">
                  <div class="form-group">
                {!! Form::text('no_ktp', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                  </div>
                </div>
                {!! $errors->first('no_ktp', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
            <div class="form-group{{ $errors->has('jenis_kelamin') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('jenis_kelamin', 'Jenis Kelamin : ', ['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-3">
                  <div class="form-group">
                    {!! Form::select('jenis_kelamin', ['' => '', 'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], $jenis_kelamin, ['class' => 'form-control']) !!}
                    {!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
            </div>
            </div>
          </div>
    </div>

    <div class="col-md-6">
        <div class="card-header">
        <div class="row">
            <div class="col-md-12">
              <h4 class="card-title">Data Alamat User</h4>
            </div>
        </div>
        </div>
          <div class="card-body">
            <div class="form-group{{ $errors->has('alamat') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('alamat', 'Alamat :', ['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-9">
                  <div class="form-group">
                {!! Form::textarea('alamat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
            </div>
          </div>
            <div class="form-group{{ $errors->has('alamat_kecamatan') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('alamat_kecamatan', 'Kecamatan :', ['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-4">
                  <div class="form-group">
                {!! Form::text('alamat_kecamatan', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                {!! $errors->first('alamat_kecamatan', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
            </div>
            </div>
            <div class="form-group{{ $errors->has('alamat_kelurahan') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('alamat_kelurahan', 'Kelurahan :', ['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-4">
                  <div class="form-group">
                {!! Form::text('alamat_kelurahan', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                {!! $errors->first('alamat_kelurahan', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
            </div>
            </div>
            <div class="row">
                {!! Form::label('rt', 'RT / RW :', ['class' => 'col-md-3 col-form-label']) !!}
              <div class="col-md-4">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    {!! Form::text('rt', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                  </div>
                  <p>/</p>
                  <div class="col-md-3">
                    {!! Form::text('rw', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                  </div>
                </div>
                {!! $errors->first('rt', '<p class="help-block">:message</p>') !!}
              </div>
              </div>
            </div>

          <div class="form-group{{ $errors->has('foto') ? 'has-error' : ''}}">
            <div class="row">
              {!! Form::label('foto', 'Foto : ', ['class' => 'col-md-3 col-form-label']) !!}
              {{-- {!! Form::textarea('foto', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
              {!! $errors->first('foto', '<p class="help-block">:message</p>') !!} --}}
              <div class="col-md-9">
                <div class="form-group">
              <div class="col-md-12 col-sm-4" style="margin-left: -15px;">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    @if ($foto == "")
                      <img src="{{ asset('assets/img/image_placeholder.jpg')}}" alt="...">
                    @else
                      <img src="{{ url('assets/img/pendaftaran/', $foto) }}" alt="...">
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

          </div>
    </div>
    <div class="col-md-12">
      {!! Form::submit($formMode === 'edit' ? 'Ubah Data' : 'batal', ['class' => 'btn btn-danger']) !!}
      {!! Form::submit($formMode === 'edit' ? 'Ubah Data' : 'simpan', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
</div>


{{-- <div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Ubah Data' : 'Tambahkan Data', ['class' => 'btn btn-primary','style' => 'width: 100%;font-size: 17px;']) !!}
</div> --}}










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
