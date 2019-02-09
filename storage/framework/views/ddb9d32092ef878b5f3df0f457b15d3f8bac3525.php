
<?php $__env->startSection('title'); ?>
  Data Anggota Linmas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style type="text/css">
  .modal-content {
    height: auto;
    min-height: 30%;
    border-radius: 0;
    width: 100%;
    margin: 2%;
    text-align: left;
}
.modal-footer {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 0%;
    border-top: 1px solid #e9ecef;
    padding-right: 1%;
}
.modal-body {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem;
    padding-bottom: 0%;
}
</style>
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
 <div id="loadingData"></div>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header" style="margin-top: -1%;">
                    <?php
                      if (Auth::user()->anggota == 1 || Auth::user()->anggota == 3) {
                          $idUser     = "anggota";
                          $hrefUser   = "";
                          $class      = "anggota";
                      }else{
                          $idUser     = "";
                          $hrefUser   = "href=/linmas/linmas/create";
                          $class      = "";
                      }
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                          <h4 class="card-title">Data Anggota Linmas</h4>
                         
                        </div>
                        <div class="col-md-6" style="text-align:right;">
                          <a <?php echo e($hrefUser); ?> class="btn btn-success btn-sm <?php echo e($class); ?>" title="Add New Kecamatan">
                              
                                <i class="fal fa-plus"></i> Baru
                          </a>
                          <input type="hidden" name="hakAkses" id="hakAkses" value="<?php echo e(Auth::user()->anggota); ?>">
                          <a onclick="editData()" class="btn btn-warning btn-sm" title="Edit New Kecamatan" style="color:white;">
                              
                             <i class="fal fa-pencil-alt"></i> Edit
                          </a>
                          <a onclick="checkDetele()" class="btn btn-danger btn-sm" title="Edit New Kecamatan" style="color:white;">
                              
                              <i class="fal fa-trash-alt"></i> Hapus
                          </a>

                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#btnSearch">
                           <i class="fal fa-search"></i>  Cari
                          </button>

                          <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#btnPrint">
                            <i class="fal fa-print"></i> Print
                          </button>
                        </div>
                      
                      </div>

                    </div>
                    <hr style="margin-top: 0%;margin-bottom: 0%;">
                    </div>
                    <div class="card-body"  style="padding: 1px 15px 10px !important;">
                     <div class="row">
                      <div class="col-md-4">
                        <div class="">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-5">
                                  <span>Kecamatan </span>
                                </div>
                                <div class="col-md-7">
                                  <?php echo Form::select('id_kecamatan', $Kecamatan, null, ('required' == 'required') ? ['id' => 'id_kecamatan','style' => 'width:100%;margin-bottom: 2%;','class' => 'form-control','onChange' => 'ChangeKecamatan()'] : ['class' => 'form-control']); ?>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-5">
                                  <span>Kelurahan / Desa</span>
                                </div>
                                <div class="col-md-7">
                                  <?php echo Form::select('id_kelurahan',$kelurahan, null, ('required' == 'required') ? ['id' => 'id_kelurahan','style' => 'width:100%;margin-bottom: 2%;','class' => 'form-control'] : ['class' => 'form-control']); ?>

                                </div>
                              </div>

                            </div>
                        </div>

                        <div class="row">
                          <div class="col-md-5">
                            <span>Data/ halaman </span>
                          </div>
                          <div class="col-md-2">
                            <input type="text" id="page" class="form-control" placeholder="25" value="<?php echo e(request('paging')); ?>" style="text-align: center;font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 6%;padding-right: 5px !important;">
                          </div>
                          <div class="col-md-5">
                            <button onclick="searchData()" id="search" class="btn btn-info btn-sm" style="margin: 0%;margin-left:  1%;padding: 0%;margin-top: 0px;font-size: 11px;padding: 3px;float: right;width: 100%;">Tampilkan</button>
                          </div>
                          <div class="col-md-2">
                          </div>
                      </div>

                      </div>
                    </div>


                    </div>




                        <div>
                              <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;width: 1%;line-height: 40px;">NO</th>
                                        <th style="text-align: center;width: 1%;">
                                            <div class="form-check" style="padding-left: 0rem;">
                                              <label class="form-check-label" style="padding-left: 30px;">
                                                <input type="checkbox" id="select_all">
                                                <span class="form-check-sign"></span>
                                              </label>
                                            </div>
                                        </th>
                                        <th style="width: 20%;">Nama/ Kelamin/ Tgl Lahir</th>
                                        <th style="width: 12%;">Agama/ Status</th>
                                        <th>Alamat</th>
                                        <th>No KTP/ NO HP</th>
                                        <th style="width: 8%;text-align: left;">Ukuran</th>
                                        <th style="width: 8%;text-align: center;">Pengesahan</th>
                                        <th >Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                <?php $__currentLoopData = $linmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="text-align: center;line-height: 40px;"><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td style="text-align: center;">
                                          <div class="form-check" style="padding-left: 0rem;">
                                            <label class="form-check-label" style="padding-left: 30px;">
                                              <input type="checkbox" class="checkbox" value="<?php echo e($item->id); ?>">
                                              <span class="form-check-sign"></span>
                                            </label>
                                          </div>
                                      </td>
                                        <td><?php echo e($item->nama); ?> <br>
                                            <?php echo e($item->jenis_kelamin); ?> <br>
                                            <?php
                                              $ExplodeTanggal = explode('/',$item->tgl_lahir);
                                              $TanggalLahir =  $ExplodeTanggal[1].'-'.$ExplodeTanggal[0].'-'.$ExplodeTanggal[2];
                                            ?>
                                            <?php echo e($item->tempat_lahir); ?>, <?php echo e($TanggalLahir); ?></td>
                                        <td>   <?php echo e($item->agama); ?>

                                          <br> <?php echo e($item->pendidikan); ?>

                                          <br> <?php echo e($item->status); ?>

                                        </td>
                                        <td>   <?php echo e($item->alamat); ?>

                                          <br> Rt <?php echo e($item->rt); ?> - Rw <?php echo e($item->rw); ?>

                                          <br> Kec. <?php echo e($item->alamat_kecamatan); ?>

                                          <br> Kel/Des. <?php echo e($item->alamat_kelurahan); ?>

                                        </td>
                                        <td style="width: 13%;">
                                          <?php echo e($item->no_ktp); ?>

                                          <br><?php echo e($item->hp); ?>

                                        </td>
                                        <td style="text-align: left;">
                                          Baju : <?php echo e($item->uk_baju); ?> <br> 
                                          Sepatu : <?php echo e($item->uk_sepatu); ?> <br>
                                          <?php if($item->foto): ?>
                                             Sudah DiFoto
                                          <?php else: ?>
                                             Belum DiFoto
                                          <?php endif; ?>
                                        </td>
                                        <td>
                                          <?php if($item->status_linmas == 1): ?>
                                             Telah Disahkan
                                          <?php elseif($item->status_linmas == 0): ?>
                                             Belum Disahkan
                                          <?php else: ?>

                                          <?php endif; ?>
                                        </td>
                                        <td>
                                          <br><?php echo e($item->keterangan); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination">
                            </div>

                        </div>


                      <div class="modal fade bd-example-modal-lg" id="btnSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" style="text-align: -webkit-center;padding-left: 0px !important;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">

                            <div class="modal-header" style="text-align:left;display:inline-flex !important;">
                              <h5 class="modal-title" id="exampleModalLabel">  <i class="fal fa-search"></i> Cari Data</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                          <div class="row" style="width: 104%;">
                            <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" id = "nama"  name="nama" class="form-control" placeholder="Cari Nama Linmas.." value="<?php echo e(request('nama')); ?>" style="font-size: 15px; border: 1px solid #b5daff;width: 100%;margin-bottom: 2%;">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <?php echo Form::select('status_linmas', [
                                       '0' => 'Belum Disahkan',
                                       '1' => 'Disahkan',
                                     ],'0', ['id'=>'status_linmas','class' => 'form-control','style' => 'font-size: 15px;margin-bottom: 3%; width:100%;']); ?>

                                   </div>
                                </div>

                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" id = "alamat"  name="alamat" class="form-control" placeholder="Alamat" value="<?php echo e(request('alamat')); ?>" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 2%;">
                                  </div>
                                </div>



                                <div class="row">
                                  <div class="col-md-3">
                                    <input type="text" id = "rt"  name="rt" class="form-control" placeholder="RT" value="<?php echo e(request('rt')); ?>" style="font-size: 15px;border: 1px solid #b5daff; width: 100%; margin-bottom: 3%;">
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" id = "rw"  name="rw" class="form-control" placeholder="RW" value="<?php echo e(request('rw')); ?>" style="font-size: 15px;border: 1px solid #b5daff; width: 100%; margin-bottom: 3%;">
                                  </div>
                                </div>

                              </div>
                            </div>


                          <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-8">
                                    <input type="text" id = "no_ktp" name="no_ktp" class="form-control" placeholder="No KTP" value="<?php echo e(request('no_ktp')); ?>" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 3%;">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-8">
                                    <input type="text" id = "hp" name="hp" class="form-control" placeholder="Nomer Hp" value="<?php echo e(request('hp')); ?>" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;">
                                  </div>
                                </div>

                              </div>
                            </div>


                            <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-6">
                                    <?php echo Form::select('agama', ['' => '-- Agama --','Islam' => 'Islam','Kristen' => 'Kristen','Kartolik' => 'Kartolik', 'Budha' => 'Budha', 'Hindu' => 'Hindu', 'Konghucu' => 'Konghucu'], '', ['id'=>'agama','class' => 'form-control','style' => 'margin-bottom: 3%']); ?>

                                  </div>
                                

                                <div class="col-md-6">
                                   <?php echo Form::select('jenis_kelamin', ['' => '-- Jenis Kelamin --', 'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], '', ['id'=>'jenis_kelamin','class' => 'form-control']); ?>

                                  </div>
                                  </div>

                               <div class="row">
                                  <div class="col-md-6">
                                    <?php echo Form::select('pendidikan', ['' => '--Pendidikan--','SD' => 'SD','SMP' => 'SMP','SMA/SMK' => 'SMA/SMK', 'Diploma' => 'Diploma', 'Sarjana' => 'Sarjana', 'Pasca Sarjana' => 'Pasca Sarjana', 'Doktor' => 'Doktor'],'', ['id'=>'pendidikan','class' => 'form-control']); ?>

                                  </div>
                                

                                <div class="col-md-6">
                                   <?php echo Form::select('status', ['' => '--Status--','Janda' => 'Janda','Duda' => 'Duda','Kawin' => 'Kawin', 'Belum Kawin' => 'Belum Kawin'],'', ['id'=>'status','class' => 'form-control']); ?>

                                  </div>
                                </div>

                                </div>
                              </div>


                          </div>

                          <div class="row" style="margin-bottom: 1%;">
                            <div class="col-md-12">
                              <div style="margin-top: 1%;margin-left: 0px;margin-bottom: 3%;">
                                <button onclick="searchData()" id="search" class="btn btn-info btn-sm" style="margin:  0%;">Cari</button>
                              </div>
                            </div>
                          </div>

                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="modal fade bd-example-modal-lg" id="btnPrint" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" style="text-align: -webkit-center;padding-left: 0px !important;">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">

                            <div class="modal-header" style="text-align:left;display:inline-flex !important;">
                              <h5 class="modal-title" id="exampleModalLabel">  <i class="fal fa-print"></i> Print Data / Export Excel</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                          <div class="row" style="width: 104%;">
                            <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" id = "nama2"  name="nama2" class="form-control" placeholder="Cari Nama Linmas.." value="<?php echo e(request('nama')); ?>" style="font-size: 15px; border: 1px solid #b5daff;width: 100%;margin-bottom: 2%;">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <?php echo Form::select('status_linmas', [
                                       '0' => 'Belum Disahkan',
                                       '1' => 'Disahkan',
                                     ],'0', ['id'=>'status_linmas2','class' => 'form-control','style' => 'font-size: 15px;margin-bottom: 3%; width:100%;']); ?>

                                   </div>
                                </div>

                              </div>
                            </div>


                            <div class="col-md-6">
                              <div class="">
                                <div class="row">
                                  <div class="col-md-6">
                                    <?php echo Form::select('agama', ['' => '-- Agama --','Islam' => 'Islam','Kristen' => 'Kristen','Kartolik' => 'Kartolik', 'Budha' => 'Budha', 'Hindu' => 'Hindu', 'Konghucu' => 'Konghucu'], '', ['id'=>'agama2','class' => 'form-control','style' => 'margin-bottom: 3%']); ?>

                                  </div>
                                

                                <div class="col-md-6">
                                   <?php echo Form::select('jenis_kelamin', ['' => '-- Jenis Kelamin --', 'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], '', ['id'=>'jenis_kelamin2','class' => 'form-control']); ?>

                                  </div>
                                  </div>

                               <div class="row">
                                  <div class="col-md-6">
                                    <?php echo Form::select('pendidikan', ['' => '--Pendidikan--','SD' => 'SD','SMP' => 'SMP','SMA/SMK' => 'SMA/SMK', 'Diploma' => 'Diploma', 'Sarjana' => 'Sarjana', 'Pasca Sarjana' => 'Pasca Sarjana', 'Doktor' => 'Doktor'],'', ['id'=>'pendidikan2','class' => 'form-control']); ?>

                                  </div>
                                

                                <div class="col-md-6">
                                   <?php echo Form::select('status', ['' => '--Status--','Janda' => 'Janda','Duda' => 'Duda','Kawin' => 'Kawin', 'Belum Kawin' => 'Belum Kawin'],'', ['id'=>'status2','class' => 'form-control']); ?>

                                  </div>
                                </div>

                                </div>
                              </div>


                          </div>

                          <div class="row" style="margin-bottom: 1%;">
                            <div class="col-md-12">
                              <div style="margin-top: 1%;margin-left: 0px;margin-bottom: 3%;">
                                <button onclick="PrintData()" id="search" class="btn btn-default btn-sm" style="margin:  0%;"> <i class="fal fa-print"></i> Print</button>
                                <button onclick="ExportExcel()" id="search" class="btn btn-success btn-sm" style="margin:  0%;"> <i class="fal fa-file-excel"></i> Export Excel</button>
                              </div>
                            </div>
                          </div>

                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
        pagePaginathing();
        searchData();
    });

    function checkDetele() {
      var id = [];
      $('.checkbox:checked').each(function(i){
        id[i] = $(this).val();
        var hakAkses  = $("#hakAkses").val();
      });
      $.ajax({
        url: '/linmas/Delete',
        type:"GET",
        data: 'ids='+id+'&hapus='+'',
        success:function(data) {
          if (data === '0') {
            swal("Maaf", "Data Linmas Disahkan Tidak bisa Di Hapus", "error");
          }else{
            DeleteData()
          }
          
        }
    });
    }

    function PrintData() {
      window.open('/linmas/data/print?id_kecamatan_print='+ $("#id_kecamatan").val()+'&id_kelurahan_print='+ $("#id_kelurahan").val()+'&status_linmas_print='+ $("#status2").val()+'&nama='+$("#nama2").val()+'&agama='+$("#agama2").val()+'&jenis_kelamin='+$("#jenis_kelamin2").val()+'&status_linmas='+$("#status_linmas2").val()+'&pendidikan='+$("#pendidikan2").val(), '_blank');
    }
    function ExportExcel() {
      window.open('/linmas/export?id_kecamatan_print='+ $("#id_kecamatan").val()+'&id_kelurahan_print='+ $("#id_kelurahan").val()+'&status_kawin='+ $("#status2").val()+'&nama='+$("#nama2").val()+'&agama='+$("#agama2").val()+'&jenis_kelamin='+$("#jenis_kelamin2").val()+'&status_linmas='+$("#status_linmas2").val()+'&pendidikan='+$("#pendidikan2").val(),'_blank');
    
    }

    function DeleteData(){
      var id = [];
      var hakAkses  = $("#hakAkses").val();
        $('.checkbox:checked').each(function(i){
          id[i] = $(this).val();
        });

    if(hakAkses == 1 || hakAkses == 3){
      demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
    }else if(id.length === 0){ 
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
      }else{
      swal({
        title: 'Apa Anda Yakin?',
        text: 'Jika data Dihapus Tidak Bisa diKembalikan!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus Sekarang!',
        cancelButtonText: 'Batalkan',
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false
      }).then(function() {
        swal({
          title: 'Terhapus!',
          text: 'Hapus Data Success.',
          type: 'success',
          confirmButtonClass: "btn btn-success",
          buttonsStyling: false
        }).catch(swal.noop);
          var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
                if ( $('#loading').length ) {
                  $('#loading').remove();
                }
                $('#loadingData').append(loader);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


          $.ajax({
            url: '/linmas/Delete',
            type:"GET",
            data: 'ids='+id+'&hapus='+'1',
            success:function(data) {
                $('#loading').remove();
                searchData();
              
              
            }
        });
      
      

      }, function(dismiss) {
        // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
        if (dismiss === 'cancel') {
          swal({
            title: 'Dibatalkan',
            text: '',
            type: 'error',
            confirmButtonClass: "btn btn-info",
            buttonsStyling: false
          }).catch(swal.noop);
        }
      }).catch(swal.noop);
  }
    }

    function editData() {
      var id = [];
      var hakAkses  = $("#hakAkses").val();
      $('.checkbox:checked').each(function(i){
        id[i] = $(this).val();
        var hakAkses  = $("#hakAkses").val();
      });
      if(hakAkses == 1 || hakAkses == 3){
        demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
      }else if(id.length === 0){ //tell you if the array is empty
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
      }else if(id.length > 1 ){
        swal("Maaf", "Pilih data lebih Dari 1", "error");
      }else{
        location.href="/linmas/linmas/"+id+"/edit";
        // location.href="/posJaga/pos-jaga/create";
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
                      var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
                      if ( $('#loading').length ) {
                        $('#loading').remove();
                      }
                      $('#loadingData').append(loader);
                  },

                  success:function(data) {

                      $('select[name="id_kelurahan"]').empty();

                      $.each(data, function(key, value){

                          $('select[name="id_kelurahan"]').append('<option value="'+ value +'">' + key + '</option>');

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

    function ChangeKecamatanPrint() {

          var id_kecamatan = $('#id_kecamatan_print').val();
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

                      $('select[name="id_kelurahan_print"]').empty();

                      $.each(data, function(key, value){

                          $('select[name="id_kelurahan_print"]').append('<option value="'+ value +'">' + key + '</option>');

                      });
                  },
                  complete: function(){
                      $('#loading').remove();
                  }
              });
          } else {
              $('select[name="id_kelurahan_print"]').empty();
          }


    }

    </script>



  <script type="text/javascript">
     function searchData() {
          var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
	          if ( $('#loading').length ) {
	            $('#loading').remove();
	          }
          $('#loadingData').append(loader);
          var jmlData = $('#page').val();
          $.ajax({
          url: '/linmas/refreshTable',
            data: {
              id_kecamatan: $("#id_kecamatan").val(),
              id_kelurahan: $("#id_kelurahan").val(),
              nama: $("#nama").val(),
              status_linmas: $("#status_linmas").val(),
              no_ktp: $("#no_ktp").val(),
              hp: $("#hp").val(),
              rt: $("#rt").val(),
              rw: $("#rw").val(),
              agama: $("#agama").val(),
              jenis_kelamin: $("#jenis_kelamin").val(),
              status: $("#status").val(),
              pendidikan: $("#pendidikan").val(),
              alamat: $("#alamat").val()
            },
            type: "GET",
            dataType: "json",
            success:function(data){
            	$('#loading').remove();
               $('#btnSearch').modal('hide');
              $('#tbody').empty();
              var noColumn = 1;
              $.each(data, function(index, element){
              var status_linmas;
              if (element.status_linmas == 1) {
               var status_linmas = 'Telah Disahkan';
              }else if (element.status_linmas == 0) {
               var status_linmas = 'Belum Disahkan';
              }else{
               var status_linmas = '';
              }

              if (element.hp == null) {
              	no_hp = '';
              }else{
              	no_hp = element.hp;
              }

              if (element.keterangan == null) {
              	keterangan = '';
              }else{
              	keterangan = element.keterangan;
              }

              if (element.keterangan == null) {
              	keterangan = '';
              }else{
              	keterangan = element.keterangan;
              }

              if(element.foto){
                foto = "<span style='color:green'>Sudah DiFoto</span>";
              }else{
                foto = "<span style='color:red'>Belum DiFoto</span>";
              }

                var ExplodeTanggal = element.tgl_lahir.split('/');
                var ExplodeTanggalBuat = element.updated_at.split(' ');
                var TanggalCreate = ExplodeTanggalBuat[0];
                var ExplodeGetTanggalBuat = TanggalCreate.split('-');
                var TanggalLahir = ExplodeTanggal[1]+'-'+ExplodeTanggal[0]+'-'+ExplodeTanggal[2];
                var TanggalBuat = ExplodeGetTanggalBuat[2]+'-'+ExplodeGetTanggalBuat[1]+'-'+ExplodeGetTanggalBuat[0];

                $('#tbody').append("<tr><td style='text-align: center;width: 0%;line-height: 40px;'>"+ noColumn +"</td><td style='text-align: center;'><div class='form-check' style='padding-left: 0rem;'><label class='form-check-label' style='padding-left: 30px;'><input type='checkbox' class='checkbox' value='"+element.id+"'><span class='form-check-sign'></span></label></div></td><td>"+element.nama+" <br>"+element.jenis_kelamin+" <br>"+element.tempat_lahir+", "+TanggalLahir+"<br>"+ element.pendidikan +"</td><td>"+ element.agama +"<br>"+ element.pendidikan +" <br>"+ element.status +"</td><td>"+element.alamat+"<br> Rt "+element.rt+" - Rw "+element.rw+"<br> Kec. "+element.alamat_kecamatan+"<br> Kel/Des. "+element.alamat_kelurahan+"</td><td style='width: 13%;'>"+element.no_ktp+"<br>"+no_hp+"</td><td style='text-align: left;'>Baju : "+element.uk_baju+"<br> Sepatu : "+element.uk_sepatu+"<br>"+ foto +"</td><td>"+ status_linmas +"</td><td>"+keterangan+"<br><span style='font-size: 11px;color: blue;'>Update Terakhir : <br></span><span style='font-size: 11px;color: blue;'>"+ TanggalBuat +", "+element.name+"</span></td>");

                  function getPageList(totalPages, page, maxLength) {
                    if (maxLength < 5) throw "maxLength must be at least 5";

                    function range(start, end) {
                        return Array.from(Array(end - start + 1), (_, i) => i + start); 
                    }

                    var sideWidth = maxLength < 9 ? 1 : 2;
                    var leftWidth = (maxLength - sideWidth*2 - 1) >> 1;
                    var rightWidth = (maxLength - sideWidth*2 - 2) >> 1;
                    if (totalPages <= maxLength) {
                        // no breaks in list
                        return range(1, totalPages);
                    }
                    if (page <= maxLength - sideWidth - 1 - rightWidth) {
                        // no break on left of page
                        return range(1, maxLength-sideWidth-1)
                            .concat([0])
                            .concat(range(totalPages-sideWidth+1, totalPages));
                    }
                    if (page >= totalPages - sideWidth - 1 - rightWidth) {
                        // no break on right of page
                        return range(1, sideWidth)
                            .concat([0])
                            .concat(range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
                    }
                    // Breaks on both sides
                    return range(1, sideWidth)
                        .concat([0])
                        .concat(range(page - leftWidth, page + rightWidth)) 
                        .concat([0])
                        .concat(range(totalPages-sideWidth+1, totalPages));
                  }

                  $(function () {
                    // Number of items and limits the number of items per page
                    var numberOfItems = $("#tbody tr").length;
                    if (jmlData <= 0) {
                      var jmlFix = 25;
                      var limitPerPage = jmlFix;
                    }else{
                      var limitPerPage = jmlData;
                    }
                    // var limitPerPage = 25;
                    // Total pages rounded upwards
                    var totalPages = Math.ceil(numberOfItems / limitPerPage);
                    // Number of buttons at the top, not counting prev/next,
                    // but including the dotted buttons.
                    // Must be at least 5:
                    var paginationSize = 7; 
                    var currentPage;

                    function showPage(whichPage) {
                      if (whichPage < 1 || whichPage > totalPages) return false;
                      currentPage = whichPage;
                      $("#tbody tr").hide()
                          .slice((currentPage-1) * limitPerPage, 
                                  currentPage * limitPerPage).show();
                      // Replace the navigation items (not prev/next):            
                      $(".pagination li").slice(1, -1).remove();
                      getPageList(totalPages, currentPage, paginationSize).forEach( item => {
                          $("<li>").addClass("page-item")
                                   .addClass(item ? "current-page" : "disabled")
                                   .toggleClass("active", item === currentPage).append(
                              $("<a>").addClass("page-link").attr({
                                  href: "javascript:void(0)"}).text(item || "...")
                          ).insertBefore("#next-page");
                      });
                      // Disable prev/next when at first/last page:
                      $("#previous-page").toggleClass("disabled", currentPage === 1);
                      $("#next-page").toggleClass("disabled", currentPage === totalPages);
                      return true;
                    }

                    // Include the prev/next buttons:
                    $(".pagination").append(
                      $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
                          $("<a>").addClass("page-link").attr({
                              href: "javascript:void(0)"}).text("Prev")
                      ),
                      $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
                          $("<a>").addClass("page-link").attr({
                              href: "javascript:void(0)"}).text("Next")
                      )
                    );
                    // Show the page links
                    $("#tbody").show();
                    showPage(1);

                    // Use event delegation, as these items are recreated later    
                    $(document).on("click", ".pagination li.current-page:not(.active)", function () {
                        return showPage(+$(this).text());
                    });
                    $("#next-page").on("click", function () {
                        return showPage(currentPage+1);
                    });

                    $("#previous-page").on("click", function () {
                        return showPage(currentPage-1);
                    });
                  });
                noColumn = noColumn + 1;
              });
            }
          });
    }
  </script>

  <script type="text/javascript">
    var select_all = document.getElementById("select_all"); //select all checkbox
      var checkboxes = document.getElementsByClassName("checkbox"); //checkbox items

      //select all checkboxes
      select_all.addEventListener("change", function(e){
        for (i = 0; i < checkboxes.length; i++) {
          checkboxes[i].checked = select_all.checked;
        }
      });


      for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].addEventListener('change', function(e){ //".checkbox" change
          //uncheck "select all", if one of the listed checkbox item is unchecked
          if(this.checked == false){
              select_all.checked = false;
          }
          //check "select all" if all checkbox items are checked
          if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
              select_all.checked = true;
          }
        });
      }
  </script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.anggota').on('click', function(){
      demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
    });
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>