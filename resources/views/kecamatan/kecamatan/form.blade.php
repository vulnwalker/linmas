<div class="row">
  <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
              <h4 class="card-title">Data Kecamatan</h4>
              <hr>
            </div>
        </div>
            <div class="form-group{{ $errors->has('kecamatan') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('kecamatan', ' Kecamatan :', ['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-6">
                  <div class="form-group">
                  {!! Form::text('kecamatan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                  </div>
                </div>
                {{-- {!! Form::textarea('id_kecamatan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                {!! $errors->first('kecamatan', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
            <div class="form-group{{ $errors->has('alamat') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('alamat', ' Alamat :', ['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-9">
                  <div class="form-group">
                    {!! Form::textarea('alamat', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                  </div>
                </div>
                {{-- {!! Form::textarea('id_kelurahan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
            <div class="form-group{{ $errors->has('telp') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('telp', 'Telp :', ['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-3">
                  <div class="form-group">
                {!! Form::text('telp', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                </div>
                {{-- {!! Form::textarea('status_limas', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                {!! $errors->first('telp', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
            </div>
            <div class="form-group{{ $errors->has('fax') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('fax', 'FAX :', ['class' => 'col-md-3 col-form-label']) !!}
                <div class="col-md-6">
                  <div class="form-group">
                  {!! Form::text('fax', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                  </div>
                </div>
                {{-- {!! Form::textarea('status_limas', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                {!! $errors->first('fax', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
    </div>
    <div class="col-md-6">
          <div class="row">
              <div class="col-md-12">
                <h4 class="card-title">Data Camat</h4>
                <hr>
              </div>
          </div>
              <div class="form-group{{ $errors->has('nama_camat') ? 'has-error' : ''}}">
                <div class="row">
                  {!! Form::label('nama_camat', 'Nama Camat :', ['class' => 'col-md-3 col-form-label']) !!}
                  <div class="col-md-4">
                    <div class="form-group">
                  {!! Form::text('nama_camat', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                    </div>
                  </div>
                  {{-- {!! Form::textarea('status_limas', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                  {!! $errors->first('nama_camat', '<p class="help-block">:message</p>') !!}
                </div>
              </div>
              <div class="form-group{{ $errors->has('nip_camat') ? 'has-error' : ''}}">
                <div class="row">
                  {!! Form::label('nip_camat', 'Nip  Camat :', ['class' => 'col-md-3 col-form-label']) !!}
                  <div class="col-md-3">
                    <div class="form-group">
                      {!! Form::text('nip_camat', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                    </div>
                  </div>
                  {{-- {!! Form::textarea('status_limas', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                  {!! $errors->first('nip_camat', '<p class="help-block">:message</p>') !!}
                </div>
              </div>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            {!! Form::submit($formMode === 'edit' ? 'Update' : 'batal', ['class' => 'btn btn-danger']) !!}
            {!! Form::submit($formMode === 'edit' ? 'Update' : 'simpan', ['class' => 'btn btn-primary pull-right']) !!}
          </div>
        </div>
    </div>
</div>