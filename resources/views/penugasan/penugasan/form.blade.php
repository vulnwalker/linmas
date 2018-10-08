<style>
.form-group .form-control, .input-group .form-control {
    padding: 5px;
}

</style>

<div class="row">
  <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
              <h5 class="card-title">Data Kecamatan/ Kelurahan</h5>
              <hr>
            </div>
        </div>

            <div class="form-group{{ $errors->has('id_kecamatan') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('id_kecamatan', ' Kecamatan :', ['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-9">
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
                <div class="col-md-9">
                  <div class="form-group">
                {!! Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                  </div>
                </div>
                {{-- {!! Form::textarea('id_kelurahan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                {!! $errors->first('id_kelurahan', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
    </div>
  <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
              <h5 class="card-title">Data Kecamatan/ Kelurahan</h5>
              <hr>
            </div>
        </div>
            <div class="form-group{{ $errors->has('status_pendaftaran') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('status_pendaftaran', ' Status Pendaftaran :', ['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-9">
                  <div class="form-group">
                    {!! Form::select('status_pendaftaran', ['' => '', '0' => 'Tidak Tetap', '1' => 'Tetap'], $status_pendaftaran, ['class' => 'form-control']) !!}
                  </div>
                </div>
                {{-- {!! Form::textarea('id_kecamatan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                {!! $errors->first('status_pendaftaran', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
            <div class="form-group{{ $errors->has('status') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('status', ' Status Aktif :', ['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-9">
                  <div class="form-group">
                    {!! Form::select('status', ['' => '', '0' => 'Tidak Aktif', '1' => 'Aktif'], $status, ['class' => 'form-control']) !!}
                  </div>
                </div>
                {{-- {!! Form::textarea('id_kelurahan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-12">
          <div class="row">
              <div class="col-md-12">
                <h5 class="card-title">Data Penugasan</h5>
                <hr>
              </div>
          </div>
              <div class="form-group{{ $errors->has('nama') ? 'has-error' : ''}}">
                <div class="row">
                  {!! Form::label('nama', ' Nama :', ['class' => 'col-md-3 col-form-label']) !!}
                  <div class="col-md-9">
                    <div class="form-group">
                        {!! Form::text('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                    </div>
                  </div>
                  {{-- {!! Form::textarea('id_kecamatan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                  {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                </div>
              </div>
              <div class="form-group{{ $errors->has('alamat') ? 'has-error' : ''}}">
                <div class="row">
                  {!! Form::label('alamat', ' Alamat :', ['class' => 'col-md-3 col-form-label']) !!}
                  <div class="col-md-9">
                    <div class="form-group">
                      {!! Form::textarea('alamat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                    </div>
                  </div>
                  {{-- {!! Form::textarea('id_kelurahan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                  {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
                </div>
              </div>
      </div>
    </div>



{{-- <div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
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
