@extends('layouts.backend')
@section('title')
  Publikasi
@endsection

@section('judul')
  Publikasi
@endsection
@section('content')
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <div id="loadingData">

 </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="card-title">Data Publikasi</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-3" style="text-align:right;">
                          {{-- <a class="btn btn-info btn-lg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="border-radius:  50%;">
                            <i class="fa fa-search  "></i>
                          </a> --}}
                          <a href="{{ url('/ContentPublikasi/content-publikasi/create') }}" class="btn btn-success btn-sm" title="Add New Kecamatan" >
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
                    <div class="row">
                      <div class="col-md-2">
                        <label class="control-label">KATEGORI PUBLIKASI</label>
                      </div>
                      <div class="col-md-2">
                        <input type="text" name="nama" id="nama" class="form-control">
                      </div>

                      <div class="col-md-2">
                        <label class="control-label">JUDUL</label>
                      </div>
                      <div class="col-md-2">
                        <input type="text" name="judul" id="judul" class="form-control">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <label class="control-label">JUMLAH DATA</label>
                      </div>
                      <div class="col-md-2">
                        <input type="number" name="jmlData" id="jmlData" class="form-control" style="width: 65px;" value="25">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <button type="button" id="search" name="search" class="btn btn-primary" onclick="search()">TAMPILKAN</button>
                      </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <div>
                             <table  class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                        <th>Kategori Publikasi</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                @foreach($contentpublikasi as $item)
                                  <?php
                                     $isi = strip_tags($item['deskripsi']);
                                      if (strlen($isi) > 250) {
                                          $stringCut = substr($isi, 0, 250);
                                          $isi = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
                                      }
                                  ?>
                                    <tr>
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
                                        <td>
                                          {{ $item->id_publikasi }}</td><td>{{ $item->judul }}
                                        </td>
                                        <td>
                                          {{-- {!! $item->deskripsi !!} --}}
                                          {{ $isi }}
                                        </td>
                                        <td>
                                            <a href="{{ url('/content-publikasi/PDF/' . $item->id) }}" target="_blank" title="View ContentPublikasi"><button class="btn btn-info btn-sm">Download</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                           <div class="pagination"></div>
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
    });


    function DeleteData(){
        var id = [];
        $('.checkbox:checked').each(function(i){
          id[i] = $(this).val();
        });

      if(id.length === 0){ 
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
            url: '/content-publikasi/Delete',
            type:"GET",
            data: 'ids='+id,
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
      $('.checkbox:checked').each(function(i){
        id[i] = $(this).val();
      });
      if(id.length === 0){ //tell you if the array is empty
        swal("Maaf", "Pilih Data Terlebih Dahulu", "error");
      }else if(id.length > 1 ){
        swal("Maaf", "Pilih data lebih Dari 1", "error");
      }else{
        location.href="/ContentPublikasi/content-publikasi/"+id+"/edit";
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

                          $('select[name="id_kelurahan"]').append('<option value="'+ key +'">' + value + '</option>');

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

<script type="text/javascript">
  function search(){
    var jmlData = $('#jmlData').val();
    var loader = '<div id="loading"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
      if ( $('#loading').length ) {
        $('#loading').remove();
      }
      $('#loadingData').append(loader);
    $.ajax({
    url: '/content-publikasi/srcContent/',
      data: {
        nama:   $("#nama").val(),
        judul:  $("#judul").val()
      },
      type: "GET",
      dataType: "json",
      success:function(data){
        $('#loading').remove();
        $('#tbody').empty();
        var noColumn = 1;
        $.each(data, function(index, element){
          $('#tbody').append("<tr id="+ element.id +"><td style='text-align: center;'>"+ noColumn +"</td><td style='width: 3%;'><div class='form-check mt-3' style='padding: unset!important'><div class='form-check' style='width: 1px; height: 36px; padding: unset!important;'><label class='form-check-label'><input type='checkbox' class='checkbox' value="+ element.id +"><span class='form-check-sign'></span></label></div></div></td><td>"+ element.nama +"</td></tr>");

            // start paginathing
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
                $("#jmlData").val(25);
                var limitPerPage = jmlFix;
              }else{
                var limitPerPage = $('#jmlData').val();
              }
              // var limitPerPage = 25;
              // Total pages rounded upwards
              var totalPages = Math.ceil(numberOfItems / limitPerPage);
              // Number of buttons at the top, not counting prev/next,
              // but including the dotted buttons.
              // Must be at least 5:
              var paginationSize = 13; 
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
            // end paginathing
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

@endsection


