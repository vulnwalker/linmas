<!DOCTYPE html>
<html lang="en">

<head>
  @include('linkCSS')
  <style type="text/css">
    .card.card-login{
      margin-bottom: 0px;
    }
    .full-page>.content{
      padding-bottom: 9vh;
    }
    .wrapper{
      height: 0vh!important;
      min-height: 0vh!important;
    }
    body{
      color: white;
    }
  </style>
</head>

<body class="login-page" style="background-image: url({{ asset('assets/images/argyle.png') }})">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
      {{-- <div class="navbar-wrapper" style="width: 100%;">
        <div class="row">
          <div class="col-md-6">
            
          </div>
        </div>
        <img src="{{asset('assets/images/linmas_logo_resize.png')}}">
        <img src="{{ asset('assets/images/aplukat kite.png') }}" style="width: 295px;" align="left">
        <a class="navbar-brand" href="#" style="padding-top: 0px; text-align: right; width: 100%; margin-right: 10px;">
          <img src="{{asset('assets/images/satpol pp.png')}}" style="width: 75px; height: 85px;">
        </a>
        <a class="navbar-brand" href="#" style="padding-top: 0px;text-align: right;width: 38%; margin-right: 0px;">
          <img src="{{ asset('assets/images/alamat.png') }}" style="/* width: 75px; *//* height: 85px; */">
        </a>
      </div> --}}
      <div class="row" style="width: 100%;">
          <div class="col-md-6">
            <img src="{{ url('assets/images/linmas_logo_resize.png') }}">
            <img src="{{ url('assets/images/aplukat kite.png') }}" style="width: 295px;">
          </div>
          <div class="col-md-6" style="text-align: right;">
            <img src="{{ url('assets/images/satpol pp.png') }}" style="width: 75px;height: 85px;position: relative;top: 50%;transform: translateY(-50%);">
            <img src="{{ url('assets/images/alamat.png') }}" style="position: relative;top: 45%;transform: translateY(-50%);">
          </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page ">
    {{-- <div class="full-page section-image" filter-color="black" data-image="{{asset('images/bg/fabio-mangione.jpg')}}"> --}}
    <div class="full-page section-image" filter-color="black" data-image="{{asset('assets/images/Linmas.jpg')}}">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="content">
        <div class="container">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <form class="form" method="POST" action="{{ route('login') }}" autocomplete="off">
              @csrf
              <div class="card card-login">
                <div class="card-header ">
                  <div class="card-header ">
                    <h3 class="header text-center">LOGIN</h3>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-single-02"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Username" name="email" id="email" value="{{ old('email') }}" required autofocus>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-key-25"></i>
                      </span>
                    </div>
                    <input type="password" id="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required="">
                  </div>
                  <br/>
                </div>
                <div class="card-footer ">
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary btn-block mb-3">
                        {{ __('Login') }}
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer footer-black  footer-white" style="padding-right: 16px; padding-left: 16px; padding-bottom: 0px; padding-bottom: 0px;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <marquee style="font-size: 13px; position: relative; top: 50%; transform: translateY(-50%);">Copyright © 2018 Satuan Polisi Pamong Praja - Pemerintah Kabupaten Serang</marquee>
            </div>
            {{-- <div class="col-md-4" style="padding-left: 0px;">
              <img src="{{ url('assets/images/logo alamat kab serang.png') }}">
              <img src="{{ url('assets/images/logo-serang.png') }}">
              <img src="{{ url('assets/images/alamat_kab_serang2nd.png') }}">
            </div> --}}
          </div>
        </div>
    </footer>
  </div>



  @include('linkJS')
  {{-- <script> --}}
    {{-- // $(document).ready(function() {
    //   demo.checkFullPageBackgroundImage();
    // }); --}}
  {{-- </script> --}}

  @if ($errors->has('email'))
    <script type="text/javascript">
      $(document).ready(function() {
      swal({
        title: "Gagal Login",
        text: "Username / Password Salah!",
        type: 'error',
        button: "Oke",
      });
      });
    </script>
  @endif
</body>
</html>