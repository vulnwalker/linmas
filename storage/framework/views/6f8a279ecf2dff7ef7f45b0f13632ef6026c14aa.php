<?php $__env->startSection('title'); ?>
  Data Penugasan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Data Penugasan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="card-title">Data Penugasan</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-3" style="text-align:right;">
                          
                          <a href="<?php echo e(url('/penugasan/penugasan/create')); ?>" class="btn btn-success btn-sm" title="Add New Kecamatan" >
                              Baru
                          </a>
                          <a onclick="editData()" class="btn btn-warning btn-sm" title="Edit New Kecamatan" style="color:white;">
                              Edit
                          </a>
                          <a onclick="DeleteData()" class="btn btn-danger btn-sm" title="Edit New Kecamatan" style="color:white;">
                              Hapus
                          </a>
                        </div>
                    </div>
                    </div>
                    <div class="card-body" style="padding-top: 0%;">

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
                                   <span>Kelurahan </span>
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
                           <div class="col-md-3">
                             <input type="text" name="paging" class="form-control" placeholder="25" value="<?php echo e(request('paging')); ?>" style="text-align: center;font-size: 15px; border: 1px solid #b5daff;width: 100%;">
                           </div>
                           <div class="col-md-2">
                           </div>
                       </div>


                       <div class="row" style="margin-bottom: 1%;">
                         <div class="col-md-5">
                         </div>
                         <div class="col-md-7">
                           <div style="margin-top: 2%;margin-left: -2px;margin-bottom: 3% width: 100%;">
                             <button class="btn btn-info btn-sm" style="margin:  0%; margin-left:  1%;">Search</button>
                           </div>
                         </div>
                       </div>

                       </div>
                     </div>
                     </div>

                        


                        <div >
                          <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="text-align: center;width: 0%;">#</th>
                                    <th style="text-align: center;width: 1%;">
                                        <div class="form-check" style="padding-left: 0rem;">
                                          <label class="form-check-label" style="padding-left: 30px;">
                                            <input type="checkbox" id="select_all">
                                            <span class="form-check-sign"></span>
                                          </label>
                                        </div>
                                    </th>
                                    <th>Jenis Penugasan</th>
                                    <th style="width: 14%;">Tanggal</th>
                                    <th style="width: 13%;">Nama Linmas</th>
                                    <th >Nama Lokasi</th>
                                    <th>Alamat</th>
                                    <th>kec/kel/des</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                                <tbody>

                                    <tr>
                                        <td style="text-align: center;width: 0%;">1</td>
                                        <td style="text-align: center;">
                                          <div class="form-check" style="padding-left: 0rem;">
                                            <label class="form-check-label" style="padding-left: 30px;">
                                              <input type="checkbox" class="checkbox" value="1">
                                              <span class="form-check-sign"></span>
                                            </label>
                                          </div>
                                      </td>
                                      <td>Pilkada 2019</td>
                                      <td>1 Mei 2019 s/d Maret 2019</td>
                                      <td>
                                        - Zakir <br>
                                        - Julius <br>
                                        - Ananda <br>
                                        - Sifa <br>
                                        - Topan
                                      </td>
                                      <td>
                                        - TPU 1 <br>
                                        - TPU 2 <br>
                                        - TPU 3 <br>
                                        - TPU 4 <br>
                                        - TPU 5
                                      </td>
                                      <td>
                                        - RT 02 RW 11 CIBODAS <br>
                                        - RT 03 RW 11 CIBODAS <br>
                                        - RT 04 RW 11 CIBODAS <br>
                                        - RT 05 RW 11 CIBODAS <br>
                                        - RT 06 RW 11 CIBODAS
                                      </td>
                                      <td>
                                        - Cimahi Selatan <br>
                                        - Utama
                                      </td>
                                      <td>-</td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center;width: 0%;">1</td>
                                        <td style="text-align: center;">
                                          <div class="form-check" style="padding-left: 0rem;">
                                            <label class="form-check-label" style="padding-left: 30px;">
                                              <input type="checkbox" class="checkbox" value="1">
                                              <span class="form-check-sign"></span>
                                            </label>
                                          </div>
                                      </td>
                                      <td>Olimpiade 2020</td>
                                      <td>1 Mei 2020 s/d Maret 2020</td>
                                      <td>
                                        - Zakir <br>
                                        - Julius <br>
                                        - Ananda <br>
                                        - Sifa <br>
                                        - Topan
                                      </td>
                                      <td>
                                        - Lomba 1 <br>
                                        - Lomba 2 <br>
                                        - Lomba 3 <br>
                                        - Lomba 4 <br>
                                        - Lomba 5
                                      </td>
                                      <td>
                                        - RT 02 RW 11 CIBODAS <br>
                                        - RT 03 RW 11 CIBODAS <br>
                                        - RT 04 RW 11 CIBODAS <br>
                                        - RT 05 RW 11 CIBODAS <br>
                                        - RT 06 RW 11 CIBODAS
                                      </td>
                                      <td>
                                        - Cimahi Selatan <br>
                                        - Utama
                                      </td>
                                      <td>-</td>
                                    </tr>


                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $penugasans->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

    function DeleteData(){
      swal({
        title: 'Are you sure?',
        text: 'You will not be able to recover this imaginary file!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, keep it',
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false
      }).then(function() {
        swal({
          title: 'Deleted!',
          text: 'Your imaginary file has been deleted.',
          type: 'success',
          confirmButtonClass: "btn btn-success",
          buttonsStyling: false
        }).catch(swal.noop);
        var id = [];
        $(':checkbox:checked').each(function(i){
          id[i] = $(this).val();
        });
        // $.ajax({
        //     url: '/linmas/delete/'+id,
        //     type:"GET",
        //     dataType:"json",
        //
        //     success:function(data) {
        //     }
        // });
      }, function(dismiss) {
        // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
        if (dismiss === 'cancel') {
          swal({
            title: 'Cancelled',
            text: 'Your imaginary file is safe :)',
            type: 'error',
            confirmButtonClass: "btn btn-info",
            buttonsStyling: false
          }).catch(swal.noop);
        }
      }).catch(swal.noop);
    }

    function editData() {
      var id = [];
      $(':checkbox:checked').each(function(i){
        id[i] = $(this).val();
      });
      if(id.length === 0){ //tell you if the array is empty
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
      }else if(id.length > 1 ){
        swal("Maaf", "Pilih data lebih Dari 1", "error");
      }else{
        // location.href="/linmas/linmas/"+id+"/edit";
        location.href="/penugasan/penugasan/create";
      }

    }

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>