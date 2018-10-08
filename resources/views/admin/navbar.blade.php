{{-- <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-minimize">
        <a href="{{ url('/admin') }}">
          <button class="btn btn-icon btn-round" style="border-radius:  50%;">
            <i class="nc-icon nc-minimal-right text-center visible-on-sidebar-mini"></i>
            <i class="nc-icon nc-minimal-left text-center visible-on-sidebar-regular"></i>
          </button>
        </a>
      </div>
      <div class="navbar-toggle">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <a class="navbar-brand" href="#pablo">@yield('judul')</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    
  </div>
</nav> --}}


<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #89ceef !important;">
  <a class="navbar-brand" href="{{ url('/admin') }}">
    <img src="{{ asset('assets/images/logo-serang.png') }}" style="width: 50px; height: 50px;">
  </a>
  <span style="font-size: 17px;">Linmas Kabupaten Serang</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <div class="collapse navbar-collapse justify-content-end" id="navigation" style="z-index: 10;">

        <ul class="navbar-nav">
          <li class="nav-item btn-rotate dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

              <span style="color: black;">
                {{ Auth::user()->name }}
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ url('/logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Logout
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </a>
            </div>
          </li>
        </ul>
        {{-- <a class="btn btn-icon btn-round" href="{{ url('/admin') }}" style="border-radius: 50px;"> --}}
        <a class="btn btn-icon btn-round" href="javascript:close_window();" style="border-radius: 50px;">
            <i class="nc-icon nc-shop text-center"></i>
        </a>
      </div>
    </form>
  </div>
</nav>
<script type="text/javascript">
  function close_window() {
    window.close();
  }
</script>