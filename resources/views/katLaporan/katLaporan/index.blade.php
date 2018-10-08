@extends('layouts.backend')
@section('title')
  Kategori Laporan
@endsection

@section('judul')
  Kategori Laporan
@endsection

@section('content')
    <style type="text/css">
      .nav-tabs {
        border-bottom: unset; 
      }
      .nav-tabs-navigation {
        text-align: unset; 
        border-bottom: 1px solid #f1eae0;
        margin-bottom: unset; 
      }
      .nav-tabs-wrapper {
        display: inline-block;
        margin-bottom: -6px;
        margin-left: unset; 
        margin-right: 1.25%;
        position: relative;
        width: auto;
      }
      .nav-link {
        display: block;
        padding-left: 0px;
        padding-right: 1rem;
      }
      button#search {
        margin: 0%;
        margin-left: 1%;
        margin-top: 0px;
        font-size: 11px;
        padding: 3px;
        float: right;
      }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div id="loadingData"></div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      @php
                        if (Auth::user()->adminis == 1 || Auth::user()->adminis == 3) {
                            $idAdminis  = "adminis";
                            $hrefUser   = "";
                            $class      = "adminis";
                        }else{
                            $idAdminis  = "";
                            $hrefUser   = "href=/katLaporan/katLaporan/create";
                            $class      = "";
                        }
                      @endphp
                      <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                          <ul id="tabs" class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link" href="{{ url("wilayah/wilayah") }}" aria-expanded="true" style="color: red; font-weight: bold; padding-right: .2rem;">Wilayah |</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ url("jenisSapras/jenisSapras") }}" aria-expanded="false" style="color: red; font-weight: bold; padding-right: .2rem;">Jenis Sapras |</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ url("regu/regu") }}" aria-expanded="false" style="color: red; font-weight: bold; padding-right: .2rem;">Regu Anggota |</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ url("publikasi/publikasi") }}" aria-expanded="false" style="color: red; font-weight: bold; padding-right: .2rem;">Kategori Publikasi |</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ url("jabatan/jabatan") }}" aria-expanded="false" style="color: red; font-weight: bold; padding-right: .2rem;">Jabatan |</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ url("katLaporan/katLaporan") }}" aria-expanded="false" style="color: blue; font-weight: bold;">Kategori Laporan</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                            <h4 class="card-title">Kategori Laporan</h4>
                            <p class="card-category"></p>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <button class="btn btn-danger pull-right" id="hapus" name="hapus"><i class="fal fa-trash-alt"></i> Hapus</button>
                              <button class="btn btn-warning pull-right" id="edit" name="edit"><i class="fal fa-pencil-alt"></i> Edit</button>
                              <a {{ $hrefUser }} class="{{ $class }}">
                                <button class="btn btn-success pull-right"><i class="fal fa-plus"></i> Baru</button>
                              </a>
                            </div>
                            <input type="hidden" name="hakAkses" id="hakAkses" value="{{ Auth::user()->adminis }}">
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <label class="control-label">NAMA KATEGORI LAPORAN</label>
                        </div>
                        <div class="col-md-2">
                          <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2">
                          <label class="control-label">JUMLAH DATA</label>
                        </div>
                        <div class="col-md-1">
                          <input type="number" name="jmlData" id="jmlData" class="form-control" style="width: 65px;" value="25">
                        </div>
                        <div class="col-md-1">
                          <button type="button" id="search" name="search" class="btn btn-info" onclick="search()">TAMPILKAN</button>
                        </div>
                      </div>
                      {{-- <div class="row">
                        <div class="col-md-2">
                          <button type="button" id="search" name="search" class="btn btn-primary" onclick="search()">TAMPILKAN</button>
                        </div>
                      </div> --}}
                      </div>
                    <div class="card-body" style="padding: 0px 15px 10px !important;">
                        <br/>
                        <div >
                          <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th style="text-align:center; width: 3%;">NO</th>
                                <th>
                                  <div class="form-check mt-3" style="padding: unset!important;">
                                    <div class="form-check" style="width: 1px; height: 36px; padding: unset!important;">
                                      <label class="form-check-label">
                                        <input type="checkbox" id="select_all">
                                        <span class="form-check-sign"></span>
                                      </label>
                                    </div>
                                  </div>
                                </th>
                                <th>KATEGORI LAPORAN</th>
                              </tr>
                              </thead>
                              <tbody id="tbody">
                                @foreach($slcKatLaporan as $key=>$value)
                                <tr id="{{ $value->id }}">
                                  <td style="text-align: center;">{{ ++$key }}</td>
                                  <td style="width: 3%;">
                                    <div class="form-check mt-3" style="padding: unset!important;">
                                      <div class="form-check" style="width: 1px; height: 36px; padding: unset!important;">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="checkbox" value="{{ $value->id }}">
                                          <span class="form-check-sign"></span>
                                        </label>
                                      </div>
                                    </div>
                                  </td>
                                  <td>{{ $value->nama }}</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <div class="pagination">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      pagePaginathing();
      $('#hapus').on('click', function(){
        var id = [];
        var hakAkses  = $("#hakAkses").val();
        var jmlData = $('#jmlData').val();
        $('.checkbox:checked').each(function(i){
          id[i] = $(this).val();
        });
        if(hakAkses == 1 || hakAkses == 3){
          demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
        }else if(id.length === 0){ //tell you if the array is empty
          demo.showNotification('top','right','Pilih Salah Satu Data');
        }else{
          swal({
            title: 'Apa Anda Yakin?',
            text: 'Data Yang Terhapus Tidak Dapat Dikembalikan!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus!',
            cancelButtonText: 'Batal',
            confirmButtonClass: "btn btn-success",
            cancelButtonClass: "btn btn-danger",
            buttonsStyling: false
          }).then(function() {
            $.ajax({
              url: '/katLaporan/delKatLaporan/',
              type: "GET",
              dataType: "json",
              data:{id:id},
              success:function(){
                swal({
                  title: 'Terhapus!',
                  text: 'Hapus Data Success.',
                  type: 'success',
                  confirmButtonClass: "btn btn-success",
                  buttonsStyling: false
                }).catch(swal.noop);
                search();
                }
              });
          }, function(dismiss) {
            // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
            if (dismiss === 'cancel') {
              swal({
                title: 'Dibatalkan',
                text: 'Data Anda Aman :)',
                type: 'error',
                confirmButtonClass: "btn btn-info",
                buttonsStyling: false
              }).catch(swal.noop);
            }
          }).catch(swal.noop);
        }
      });
      // end hapus
      $('#edit').on('click', function(){
        var id = [];
        var hakAkses  = $("#hakAkses").val();
        $('.checkbox:checked').each(function(i){
          id[i] = $(this).val();
        });
        if(hakAkses == 1 || hakAkses == 3){
          demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
        }else if(id.length === 0){ //tell you if the array is empty
          demo.showNotification('top','right','Pilih Salah Satu Data');
        }else if (id.length >= 2) {
          demo.showNotification('top','right','Pilih Salah Satu Data');
        }else{
          window.location.href = "http://linmas.pilar.web.id/katLaporan/katLaporan/"+id+"/edit";
        }
      });
      // end edit
    });
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
    url: '/katLaporan/srcKatLaporan/',
      data: {
        nama: $("#nama").val()
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
  $(document).ready(function(){
    $('.adminis').on('click', function(){
      demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
    });
  });
</script>
@endsection
