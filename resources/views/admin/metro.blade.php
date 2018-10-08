
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="twitter:site" content="@metroui">
    <meta name="twitter:creator" content="@pimenov_sergey">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Metro 4 Components Library">
    <meta name="twitter:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
    <meta name="twitter:image" content="../../images/m4-logo-social.png">
    <meta property="og:url" content="https://metroui.org.ua/v4/index.html">
    <meta property="og:title" content="Metro 4 Components Library">
    <meta property="og:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="../../images/m4-logo-social.png">
    <meta property="og:image:secure_url" content="../../images/m4-logo-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="968">
    <meta property="og:image:height" content="504">
    <meta name="author" content="Sergey Pimenov">
    <meta name="description" content="The most popular HTML, CSS, and JS library in Metro style.">
    <meta name="keywords" content="HTML, CSS, JS, Metro, CSS3, Javascript, HTML5, UI, Library, Web, Development, Framework">
    <link href="{{ asset('assets/css/metro-all8e71.css?ver=@@b-version') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/start.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('assets/images/logo-serang.png')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/loading.css') }}">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cretino" />

    {{-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet"> --}}
    @include('admin.assets.cssFile')

    <title>HOME</title>
    <style type="text/css">
        .start-screen-title{
            left: unset;
        }
        .tiles-area{
            width: 1280px!important;
            margin-top: -25px;
        }
        .container-fluid.start-screen.no-overflow{
            padding-top: 0px!important;
        }
        .start-screen {
            padding: 140px 80px 0 40px!important;
        }
        span.branding-bar {
            padding-left: 4px!important;
            padding-right: 0px!important;
        }
        a.bg-cyan.fg-white.tile-medium:hover {
            background-color: #8a8a8a!important;
        }
        a.bg-indigo.fg-white.tile-medium:hover{
            background-color: #8a8a8a!important;
        }
        a.bg-orange.fg-white.tile-wide:hover{
            background-color: #8a8a8a!important;
        }
        a.bg-emerald.fg-white.tile-wide:hover{
            background-color: #8a8a8a!important;
        }
        a.fg-white.tile-wide:hover{
            background-color: #8a8a8a!important;
        }
        a.bg-cobalt.tile-wide:hover{
            background-color: #8a8a8a!important;
        }
        a.bg-teal.fg-white.tile-medium:hover{
            background-color: #8a8a8a!important;
        }
        a.fg-white.tile-medium:hover{
            background-color: #8a8a8a!important;
        }
        a.bg-crimson.fg-white.tile-wide:hover{
            background-color: #8a8a8a!important;
        }
    </style>
</head>
<body class="bg-dark fg-white" style="background-image: url({{ asset('assets/images/argyle.png') }})">
    @if(Auth::user()->status == 2)
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var loader = '<div id="loading"  style="background:  #0a0a0aeb !important;"><ul class="bokeh"><li></li><li></li><li></li></ul></div>';
            if ( $('#loading').length ) {
              $('#loading').remove();
            }
            $('#loadingData').append(loader);
            document.getElementById('logout-form').submit();
        });
    </script>
    <div id="loadingData"></div>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    @else
    <div class="container-fluid start-screen no-overflow">
        <div class="grid" style="margin-bottom: 3rem;">
            <div class="row" style="margin-top: 2rem; width: 1285px;">
                <div class="cell-12" style="padding-right: 0px; padding-left: 0px;">
                    {{-- <p class="start-screen-title" style="line-height: unset; font-size: 35px;">Alpukat KITE</p>
                    <p class="start-screen-title" style="line-height: unset; font-size: 18px; padding-top: 50px;">Aplikasi Perlindungan Masyarakat Kompeten, Inovatif, Terpadu, Efektif</p> --}}
                    <img src="{{ asset('assets/images/linmas_logo_resize.png') }}" style="margin-top: 19px;" align="left">
                    <img src="{{ asset('assets/images/aplukat kite.png') }}" style="width: 295px;" align="left">
                    <img src="{{ asset('assets/images/alamat.png') }}" style="margin-top: 24px; margin-left: 10px;" align="right">
                    <img src="{{ asset('assets/images/satpol pp.png') }}" style="width: 75px;height: 85px;margin-top: 19px;" align="right">
                </div>
            </div>
        </div>
        @php
            if (Auth::user()->anggota == 3) {
                $idAnggota     = "anggota";
                $hrefAnggota   = "";
            }else{
                $idAnggota     = "";
                $hrefAnggota   = "href=linmas/linmas";
            }

            if (Auth::user()->adminis == 3) {
                $idAdmin    = "adminis";
                $hrefAdmin  = "";
            }else{
                $idAdmin    = "";
                $hrefAdmin  = "href=wilayah/wilayah";
            }

            if (Auth::user()->user == 3) {
                $idUser     = "user";
                $hrefUser   = "";
            }else{
                $idUser     = "";
                $hrefUser   = "href=username/username";
            }

            if (Auth::user()->pengasahaan == 3) {
                $idPengasahan     = "pengasahan";
                $hrefPengasahan   = "";
            }else{
                $idPengasahan     = "";
                $hrefPengasahan   = "href=Pengesahan/Pengesahan";
            }

            if (Auth::user()->pembinaan == 3) {
                $idPembinaan     = "pembinaan";
                $hrefPembinaan   = "";
            }else{
                $idPembinaan     = "";
                $hrefPembinaan   = "href=pembinaan/pembinaan";
            }

            if (Auth::user()->posKamling == 3) {
                $idPosKamling     = "posKamling";
                $hrefPosKamling   = "";
            }else{
                $idPosKamling     = "";
                $hrefPosKamling   = "href=posJaga/pos-jaga";
            }

            if (Auth::user()->sapras == 3) {
                $idSapras     = "sapras";
                $hrefSapras   = "";
            }else{
                $idSapras     = "";
                $hrefSapras   = "href=sapras/sapras";
            }

            if (Auth::user()->publikasi == 3) {
                $idPublikasi     = "publikasi";
                $hrefPublikasi   = "";
            }else{
                $idPublikasi     = "";
                $hrefPublikasi   = "href=ContentPublikasi/content-publikasi";
            }

            if (Auth::user()->pelaporan == 3) {
                $idPelaporan     = "pelaporan";
                $hrefPelaporan   = "";
            }else{
                $idPelaporan     = "";
                $hrefPelaporan   = "href=pelaporan/pelaporans";
            }
        @endphp
        <div class="tiles-area">
            <div class="tiles-grid tiles-group size-2 fg-white">
                <a {{ $hrefAnggota }} target="_blank" data-role="tile" class="bg-indigo fg-white" data-size="medium" id="{{ $idAnggota }}">
                    <img src="{{ asset('assets/images/anggota white.png') }}" class="icon" style="height: 80%; max-width: 80%;">
                    <span class="branding-bar">PENDATAAN</span>
                </a>
                <a {{ $hrefPengasahan }} target="_blank" data-role="tile" class="bg-orange fg-white" data-size="medium" id="{{ $idPengasahan }}">
                    <img src="{{ asset('assets/images/pengasahan white.png') }}" class="icon" style="height: 70%; max-width: 80%;">
                    <span class="branding-bar">PENGESAHAN</span>
                </a>
                <a {{ $hrefSapras }} data-role="tile" target="_blank" data-size="medium" class="bg-red fg-white" id="{{ $idSapras }}">
                    <img src="{{ asset('assets/images/prasarana.png') }}" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">SARANA PRASARANA</span>
                </a>
                <a {{ $hrefPosKamling }} target="_blank" data-role="tile" data-size="medium" class="fg-white" id="{{ $idPosKamling }}">
                    <img src="{{ asset('assets/images/pos jaga.png') }}" class="icon" style="height: 80%; max-width: 80%;">
                    <span class="branding-bar">POS KAMLING</span>
                </a>
            </div>

            <div class="tiles-grid tiles-group size-2 fg-white">
                <div data-role="tile" data-size="large" data-effect="animate-slide-left" style="cursor: default;">
                    <div class="slide" data-cover="{{ asset('assets/images/Linmas.jpg') }}"></div>
                    <div class="slide" data-cover="{{ asset('assets/images/Linmas2.jpg') }}"></div>
                    <div class="slide" data-cover="{{ asset('assets/images/Linmas3.jpg') }}"></div>
                    <div class="slide" data-cover="{{ asset('assets/images/Linmas4.jpg') }}"></div>
                    <div class="slide" data-cover="{{ asset('assets/images/Linmas5.jpg') }}"></div>
                    <span class="branding-bar">Gallery</span>
                </div>
            </div>

            <div class="tiles-grid tiles-group size-2 fg-white">
                <a {{ $hrefPembinaan }} target="_blank" data-role="tile" data-size="medium" class="fg-white" id="{{ $idPembinaan }}">
                    <img src="{{ asset('assets/images/pembinaan white.png') }}" class="icon" style="height: 80%; max-width: 80%">
                    <span class="branding-bar">PEMBINAAN</span>
                </a>
                <a {{ $hrefPublikasi }} target="_blank" data-role="tile" data-size="medium" class="bg-cobalt fg-white" id="{{ $idPublikasi }}">
                    <img src="{{ asset('assets/images/publikasi white.png') }}" class="icon" style="max-width: 70%; height: 70%;">
                    <span class="branding-bar">PUBLIKASI</span>
                </a>
                <a {{ $hrefPelaporan }} target="_blank" data-role="tile" data-size="wide" class="bg-emerald fg-white" id="{{ $idPelaporan }}">
                    <img src="{{ asset('assets/images/pelaporan white.png') }}" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">PELAPORAN</span>
                </a>
            </div>

            <div class="tiles-grid tiles-group size-2 fg-white">
                <a {{ $hrefAdmin }} target="_blank" data-role="tile" class="bg-orange fg-white" data-size="medium" id="{{ $idAdmin }}">
                    <img src="{{ asset('assets/images/adminis white.png') }}" class="icon" style="height: 70%; max-width: 80%;">
                    <span class="branding-bar">ADMINISTRASI</span>
                </a>
                <a {{ $hrefUser }} target="_blank" data-role="tile" class="bg-indigo fg-white" data-size="medium" id="{{ $idUser }}">
                    <img src="{{ asset('assets/images/username white.png') }}" class="icon" style="max-width: 80%; height: 70%;">
                    <span class="branding-bar">USER</span>
                </a>
                <a data-toggle="modal" data-target="#noticeModal" data-role="tile" data-size="medium" class="bg-red fg-white">
                {{-- <a href="{{ url('gantiPass/gantiPass/'.Auth::user()->id.'/edit') }}" data-role="tile" target="_blank" data-size="medium" class="bg-red fg-white" id="#"> --}}
                    <img src="{{ asset('assets/images/ganti password.png') }}" class="icon" style="max-width: 70%; height: 70%;">
                    <span class="branding-bar">GANTI PASSWORD</span>
                </a>
                <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-role="tile" data-size="medium" class="bg-grayBlue fg-white">
                    <img src="{{ asset('assets/images/logout white.png') }}" class="icon" style="max-width: 80%; height: 80%;">
                    <span class="branding-bar">LOGOUT</span>
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
            </div>
            <marquee style="margin-right: 0.8%; font-size: 13px;">Copyright © 2018 Satuan Polisi Pamong Praja - Pemerintah Kabupaten Serang</marquee>

            <!-- notice modal -->
            <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-notice" style="width: 500px; height: 400px;">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <h5 class="modal-title" id="myModalLabel" style="color: black;"><i class="nc-icon nc-key-25" style="color: black; margin-right: 10px;"></i>Ganti Password</h5>
                  </div>
                  <div class="modal-body">
                    <div class="instruction">
                      <div class="row">
                        <div class="col-md-12">
                          <strong>Password Lama</strong>
                          <input type="text" name="password" id="password" class="form-control" readonly="readonly" value="{{ Auth::user()->password2nd }}">
                          <input type="hidden" name="id" id="id" value="{{ Auth::user()->id }}">
                        </div>
                      </div>
                    </div>
                    <div class="instruction">
                      <div class="row">
                        <div class="col-md-12">
                          <strong>Password Baru</strong>
                          <input type="password" name="passwordBaru" id="passwordBaru" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-info btn-round" data-dismiss="modal" id="gantiPass" name="gantiPass">SIMPAN</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end notice modal -->
        </div>
        <div class="grid">
            <div class="row" style="width: 1285px;">
                <div class="cell-12" style="padding-right: 0px; padding-left: 0px;">
                	<img src="{{ url('assets/images/alamat kab serang.png') }}" align="right">
                  <img src="{{ url('assets/images/logo-serang.png') }}" align="right">
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/metro.js') }}"></script>
    <script src="{{ asset('assets/js/start.js') }}"></script>
    @include('admin.assets.jsFile')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#adminis').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#user').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#anggota').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#pengasahan').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#pembinaan').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#posKamling').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#sapras').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#publikasi').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
            $('#pelaporan').on('click', function(){
                demo.showNotification('top','right','Anda Tidak Memiliki Hak Akses');
            });
        });
    </script>
<script type="text/javascript">
    $(document).ready(function(){
      $('#gantiPass').on('click', function(){
        if ($("#passwordBaru").val() == "") {
          demo.showNotification('top','right','Password Baru Tidak Boleh Kosong');
        }else{
          $.ajax({
          url: '/gantiPass/editPassword/',
            data: {
              passwordBaru:   $("#passwordBaru").val(),
              id:             $("#id").val()
            },
            type: "GET",
            // dataType: "json",
            success:function(data){
              var resp = eval('(' + data + ')');
              if (resp.err != "") {
                demo.showNotification('top','right',resp.err);
              }else{
                demo.showNotification('top','right','Successfully!');
                window.setTimeout(function(){
                  document.getElementById('logout-form').submit();
                }, 1000);
              }
            }
          });
        }
      });
      // end insert
    });
</script>
@endif
</body>
</html>