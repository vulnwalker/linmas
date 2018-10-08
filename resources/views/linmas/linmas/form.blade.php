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


<!-- 
          <div class="row">
            {!! Form::label('no_angota', 'No. Angota', ['class' => 'col-md-3 col-form-label']) !!}
            <div class="col-md-8">
              <div class="form-group">
                {!! Form::text('no_angota', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
              </div>
            </div>
            {!! $errors->first('no_angota', '<p class="help-block">:message</p>') !!}
           </div> -->


           <div class="form-group{{ $errors->has('nama') ? 'has-error' : ''}}">
             <div class="row">
               {!! Form::label('nama', 'Nama', ['class' => 'col-md-3 col-form-label']) !!}
               <div class="col-md-4">
                 <div class="form-group">
               {!! Form::text('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
               {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                 </div>
               </div>
             </div>
           </div>

           <div class="form-group{{ $errors->has('tgl_lahir') ? 'has-error' : ''}}">
             <div class="row">
               {!! Form::label('tgl_lahir', 'Tempat/ Tgl Lahir', ['class' => 'col-md-3 col-form-label']) !!}
              <div class="col-md-2">
                 <div class="form-group">
               {!! Form::text('tempat_lahir', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
               {!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
                 </div>
               </div>/
               <div class="col-md-2">
                 <div class="form-group">
               {!! Form::text('tgl_lahir', null, ('required' == 'required') ? ['class' => 'form-control datepicker', 'required' => 'required'] : ['class' => 'form-control']) !!}
               {!! $errors->first('tgl_lahir', '<p class="help-block">:message</p>') !!}
                 </div>
               </div>
             </div>
           </div>

           <div class="form-group{{ $errors->has('jenis_kelamin') ? 'has-error' : ''}}">
             <div class="row">
               {!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'col-md-3 col-form-label']) !!}
               <div class="col-md-2">
                 <div class="form-group">
                   {!! Form::select('jenis_kelamin', ['' => '', 'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], $jenis_kelamin, ['class' => 'form-control']) !!}
                   {!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
             </div>
           </div>
           </div>
           </div>

           <div class="form-group{{ $errors->has('no_ktp') ? 'has-error' : ''}}">
             <div class="row">
               {!! Form::label('no_ktp', 'No Ktp',['class' => 'col-md-3 col-form-label']) !!}
               <div class="col-md-3">
                 <div class="form-group">
               {!! Form::text('no_ktp', null, ('required' == 'required') ? ['onkeyup' => 'ktp()','class' => 'form-control ktp', 'required' => 'required'] : ['onkeyup' => 'ktp()','class' => 'form-control ktp']) !!}
                 </div>
               </div>
               {!! $errors->first('no_ktp', '<p class="help-block">:message</p>') !!}
             </div>
           </div>

           <div class="form-group{{ $errors->has('alamat') ? 'has-error' : ''}}">
             <div class="row">
               {!! Form::label('alamat', 'Alamat ', ['class' => 'col-md-3 col-form-label']) !!}
               <div class="col-md-4">
                 <div class="form-group">
               {!! Form::textarea('alamat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
               {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
             </div>
           </div>
           </div>
         </div>

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

         <div class="form-group{{ $errors->has('rt') ? 'has-error' : ''}}">
           <div class="row">
             {!! Form::label('rt', 'RT/ RW', ['class' => 'col-md-3 col-form-label']) !!}
             <div class="col-md-1">
               <div class="form-group">
             {!! Form::text('rt', null, ('required' == 'required') ? ['class' => 'form-control kode','onkeypress' => 'kode()', 'required' => 'required'] : ['class' => 'form-control']) !!}
             {!! $errors->first('rt', '<p class="help-block">:message</p>') !!}
               </div>
             </div>/
             <div class="col-md-1">
               <div class="form-group">
             {!! Form::text('rw', null, ('required' == 'required') ? ['class' => 'form-control kode','onkeypress' => 'kode()', 'required' => 'required'] : ['class' => 'form-control']) !!}
             {!! $errors->first('rw', '<p class="help-block">:message</p>') !!}
               </div>
             </div>
           </div>
         </div>

           <div class="form-group{{ $errors->has('hp') ? 'has-error' : ''}}">
             <div class="row">
               {!! Form::label('hp', 'Hp', ['class' => 'col-md-3 col-form-label']) !!}
               <div class="col-md-2">
                 <div class="form-group">
               {!! Form::text('hp', null, ('' == 'required') ? ['onkeyup' => 'noHP()', 'class' => 'form-control noHP', 'required' => 'required'] : ['onkeyup' => 'noHP()', 'class' => 'form-control noHP']) !!}
               {!! $errors->first('hp', '<p class="help-block">:message</p>') !!}
               </div>
             </div>
           </div>
         </div>

         <div class="form-group{{ $errors->has('status') ? 'has-error' : ''}}">
           <div class="row">
             {!! Form::label('status', 'Status', ['class' => 'col-md-3 col-form-label']) !!}
             <div class="col-md-2">
               <div class="form-group">
                  {!! Form::select('status', ['' => '--Status--','Janda' => 'Janda','Duda' => 'Duda','Kawin' => 'Kawin', 'Belum Kawin' => 'Belum Kawin'],$status, ['class' => 'form-control']) !!}
               </div>
             </div>             
           </div>
         </div>

         <div class="form-group{{ $errors->has('agama') ? 'has-error' : ''}}">
           <div class="row">
             {!! Form::label('agama', 'Agama', ['class' => 'col-md-3 col-form-label']) !!}
             <div class="col-md-2">
               <div class="form-group">
                  {!! Form::select('agama', ['' => '--Agama--','Islam' => 'Islam','Kristen' => 'Kristen','Kartolik' => 'Kartolik', 'Budha' => 'Budha', 'Hindu' => 'Hindu', 'Konghucu' => 'Konghucu'], $agama, ['class' => 'form-control']) !!}
               </div>
             </div>             
           </div>
         </div>

         <div class="form-group{{ $errors->has('gol_darah') ? 'has-error' : ''}}">
           <div class="row">
             {!! Form::label('gol_darah', 'Golongan Darah', ['class' => 'col-md-3 col-form-label']) !!}
             <div class="col-md-2">
               <div class="form-group">
                  {!! Form::select('gol_darah', ['' => '--Golongan Darah--','A' => 'A','B' => 'B','AB' => 'AB', 'O' => 'O'], $gol_darah, ['class' => 'form-control']) !!}
               </div>
             </div>             
           </div>
         </div>

         <div class="form-group{{ $errors->has('pendidikan') ? 'has-error' : ''}}">
           <div class="row">
             {!! Form::label('pendidikan', 'Pendidikan', ['class' => 'col-md-3 col-form-label']) !!}
             <div class="col-md-2">
               <div class="form-group">
                  {!! Form::select('pendidikan', ['' => '--Pendidikan--','SD' => 'SD','SMP' => 'SMP','SMA/SMK' => 'SMA/SMK', 'Diploma' => 'Diploma', 'Sarjana' => 'Sarjana', 'Pasca Sarjana' => 'Pasca Sarjana', 'Doktor' => 'Doktor'], $pendidikan, ['class' => 'form-control']) !!}
               </div>
             </div>             
           </div>
         </div>



         <div class="form-group{{ $errors->has('uk_baju') ? 'has-error' : ''}}">
           <div class="row">
             {!! Form::label('uk_baju', 'Ukuran Seragam', ['class' => 'col-md-3 col-form-label']) !!}
             <div class="col-md-2">
               <div class="form-group">
                  {!! Form::select('uk_baju', ['S' => 'Small ( S )','M' => 'Medium ( M )','L' => 'Large ( L )', 'XL' => 'Extra Large ( XL )', 'XXL' => 'Extra Large ( XXL )'], $uk_baju, ['class' => 'form-control']) !!}
               </div>
             </div>             
           </div>
         </div>

         <div class="form-group{{ $errors->has('uk_baju') ? 'has-error' : ''}}">
           <div class="row">
             {!! Form::label('uk_sepatu', 'Ukuran Sepatu', ['class' => 'col-md-3 col-form-label']) !!}
             <div class="col-md-1">
               <div class="form-group">
               {!! Form::text('uk_sepatu', null, ('' == 'required') ? ['class' => 'form-control kode','onkeypress' => 'kode()','required' => 'required'] : ['class' => 'form-control kode','onkeypress' => 'kode()']) !!}
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
                      <img src="{{ url('assets/img/linmas/', $foto) }}" alt="...">
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

    <div class="modal fade bd-example-modal-md" id="modalPendaftaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

          <div class="modal-header" style="text-align:left;display:inline-flex !important;">
            <h5 class="modal-title" id="exampleModalLabel">Buat Nomer SK</h5>
          </div>
          <div class="modal-body">



            <div class="form-group{{ $errors->has('walikota') ? 'has-error' : ''}}">
              <div class="row">
                {!! Form::label('walikota', 'Bupati/ Walikota', ['class' => 'col-md-4']) !!}
                <div class="col-md-7">
                  <div class="form-group">
                {!! Form::text('walikota', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                {!! $errors->first('walikota', '<p class="help-block">:message</p>') !!}
                </div>
              </div>
            </div>
          </div>
        <div class="form-group{{ $errors->has('no_sk') ? 'has-error' : ''}}">
          <div class="row">
            {!! Form::label('no_sk', 'Nomer SK', ['class' => 'col-md-4']) !!}
            <div class="col-md-6">
              <div class="form-group">
            {!! Form::text('no_sk', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('no_sk', '<p class="help-block">:message</p>') !!}
            </div>
          </div>
        </div>
      </div>
        <div class="form-group{{ $errors->has('tgl') ? 'has-error' : ''}}">
          <div class="row">
            {!! Form::label('tgl', 'Tanggal', ['class' => 'col-md-4']) !!}
            <div class="col-md-5">
              <div class="form-group">
            {!! Form::text('tgl', null, ('required' == 'required') ? ['class' => 'form-control datepicker', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('tgl', '<p class="help-block">:message</p>') !!}
            </div>
          </div>
        </div>
      </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Save changes</button>
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
      <a href="{{ url('/linmas/linmas') }}" title="Back" class= "btn btn-danger" style= "width: 100%;font-size: 17px;">
        Batal
      </a>
    </div>
  </div>
</div>










<script type="text/javascript">
function ChangeStatus(){
  var status_linmas = $('#status_linmas').val();
  if(status_linmas === "2"){
      document.getElementById("hideStatus").style.display = "none";
  }else{
      document.getElementById("hideStatus").style.display = "";
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

                      $('select[name="id_kelurahan"]').append('<option value="'+value+'">' +key+ '</option>');

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
