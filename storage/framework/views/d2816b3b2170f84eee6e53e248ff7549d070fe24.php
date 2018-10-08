                             <table id="tableRefresh" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                  <thead>
                                    <tr>
                                        <th style="text-align: center;width: 0%;line-height: 40px;">#</th>
                                        <th style="text-align: center;width: 1%;">
                                            <div class="form-check" style="padding-left: 0rem;">
                                              <label class="form-check-label" style="padding-left: 30px;">
                                                <input type="checkbox" id="select_all">
                                                <span class="form-check-sign"></span>
                                              </label>
                                            </div>
                                        </th>
                                        <th>Nama Pos Jaga</th>
                                        <th>Alamat / Kecamatan / Kelurahan</th>
                                        <th style="width: 14%;">Konstruksi/ Luas/ Kondisi</th>
                                        <th style="width: 13%;">Kelengkapan/ Sarpras</th>
                                        <th style="text-align: center;">Aktifitas</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $__currentLoopData = $posjaga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr >
                                        <td style="text-align: center;width: 0%;line-height: 40px;"><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td style="text-align: center;">
                                          <div class="form-check" style="padding-left: 0rem;">
                                            <label class="form-check-label" style="padding-left: 30px;">
                                              <input type="checkbox" class="checkbox" value="<?php echo e($item->id); ?>">
                                              <span class="form-check-sign"></span>
                                            </label>
                                          </div>
                                      </td>
                                      <td><?php echo e($item->nama); ?></td>
                                      <td><?php echo e($item->alamat); ?><br><?php echo e($item->alamat_kec); ?><br><?php echo e($item->alamat_kel); ?></td>
                                      <td>
                                        - <?php if($item->konstruksi == 1): ?>
                                          Permanen
                                          <?php elseif($item->konstruksi == 2): ?>
                                          Semi Permanen
                                          <?php elseif($item->konstruksi == 3): ?>
                                          Darurat
                                          <?php endif; ?> 
                                        <br>- <?php echo e($item->luas); ?> 
                                        <br>
                                        - <?php if($item->kondisi == 1): ?>
                                          Baik
                                          <?php elseif($item->kondisi == 2): ?>
                                          Kurang Baik
                                          <?php elseif($item->konstruksi == 3): ?>
                                          Rusak Berat
                                          <?php endif; ?> 
                                        </td>
                                      <td style="width: 10%;">
                                        - <?php if($item->kelengkapan == 1): ?>
                                          Lengkap
                                          <?php elseif($item->kelengkapan == 2): ?>
                                          Cukup
                                          <?php elseif($item->kelengkapan == 3): ?>
                                          Tidak
                                          <?php endif; ?>  
                                        <br>
                                        - <?php if($item->sarana == 1): ?>
                                          Baik
                                          <?php elseif($item->sarana == 2): ?>
                                          Kurang Baik
                                          <?php endif; ?> 
                                      </td>
                                      <td style="text-align: center;width: 1%;">
                                        - <?php if($item->aktifitas == 1): ?>
                                          Aktif
                                          <?php elseif($item->aktifitas == 2): ?>
                                          Tidak Aktif
                                          <?php endif; ?> 
                                      </td>
                                      <td><?php echo e($item->keterangan); ?></td>
                                    </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $posjaga->links(); ?> </div>
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


                            <script>
 
                              $(document).on('click','.pagination a', function(e){
                                e.preventDefault();
                                var page = $(this).attr('href').split('page=')[1];
                                getProducts(page);
                                // location.hash = page;
                              });
                              function getProducts(page){
                                $.ajax({
                                  url: '/posJaga/refreshTable?page=' + page
                                }).done(function(data){
                                  $('.content').html(data);
                                  location.hash = page;
                                });
                              }
                            </script>