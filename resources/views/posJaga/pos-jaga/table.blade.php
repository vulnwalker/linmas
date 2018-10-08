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
                                  @foreach($posjaga as $item)
                                    <tr >
                                        <td style="text-align: center;width: 0%;line-height: 40px;">{{ $loop->iteration or $item->id }}</td>
                                        <td style="text-align: center;">
                                          <div class="form-check" style="padding-left: 0rem;">
                                            <label class="form-check-label" style="padding-left: 30px;">
                                              <input type="checkbox" class="checkbox" value="{{$item->id}}">
                                              <span class="form-check-sign"></span>
                                            </label>
                                          </div>
                                      </td>
                                      <td>{{ $item->nama }}</td>
                                      <td>{{$item->alamat}}<br>{{$item->alamat_kec}}<br>{{$item->alamat_kel}}</td>
                                      <td>
                                        - @if($item->konstruksi == 1)
                                          Permanen
                                          @elseif($item->konstruksi == 2)
                                          Semi Permanen
                                          @elseif($item->konstruksi == 3)
                                          Darurat
                                          @endif 
                                        <br>- {{$item->luas}} 
                                        <br>
                                        - @if($item->kondisi == 1)
                                          Baik
                                          @elseif($item->kondisi == 2)
                                          Kurang Baik
                                          @elseif($item->konstruksi == 3)
                                          Rusak Berat
                                          @endif 
                                        </td>
                                      <td style="width: 10%;">
                                        - @if($item->kelengkapan == 1)
                                          Lengkap
                                          @elseif($item->kelengkapan == 2)
                                          Cukup
                                          @elseif($item->kelengkapan == 3)
                                          Tidak
                                          @endif  
                                        <br>
                                        - @if($item->sarana == 1)
                                          Baik
                                          @elseif($item->sarana == 2)
                                          Kurang Baik
                                          @endif 
                                      </td>
                                      <td style="text-align: center;width: 1%;">
                                        - @if($item->aktifitas == 1)
                                          Aktif
                                          @elseif($item->aktifitas == 2)
                                          Tidak Aktif
                                          @endif 
                                      </td>
                                      <td>{{$item->keterangan}}</td>
                                    </tr>
                                  @endforeach
                              </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $posjaga->links() !!} </div>
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