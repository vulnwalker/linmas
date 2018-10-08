{{-- <div class="col-md-3">
    @foreach($laravelAdminMenus->menus as $section)
        @if($section->items)
            <div class="card">
                <div class="card-header">
                    {{ $section->section }}
                </div>

                <div class="card-body">
                    <ul class="nav flex-column" role="tablist">
                        @foreach($section->items as $menu)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="{{ url($menu->url) }}">
                                    {{ $menu->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <br/>
        @endif
    @endforeach
</div> --}}


<div class="sidebar" data-color="brown" data-active-color="danger">

  <div class="logo">
    <a href="http://www.creative-tim.com/" class="simple-text logo-mini">
      <div class="logo-image-small">
        <img src="../assets/img/logo-small.png">
      </div>
    </a>
    <a href="http://www.creative-tim.com/" class="simple-text logo-normal">
       SIMLINMAS
      <!-- <div class="logo-image-big">
        <img src="../assets/img/logo-big.png">
      </div> -->
    </a>
  </div>
  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" />
      </div>
      <div class="info">
        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
          <span>
            {{ Auth::user()->name }}
            <b class="caret"></b>
          </span>
        </a>
        <div class="clearfix"></div>
        <div class="collapse" id="collapseExample">
          <ul class="nav">
            <li>
              <a href="#">
                <span class="sidebar-mini-icon">MP</span>
                <span class="sidebar-normal">My Profile</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="sidebar-mini-icon">L</span>
                <span class="sidebar-normal">Logout</span>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <ul class="nav">
      <li class="{{ active('admin') }}">
        <a href="{{ url('admin') }}">
          <i class="nc-icon nc-layout-11"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="{{ active('pendaftaran*') }}">
        <a href="{{ url('pendaftaran/pendaftaran') }}">
          <i class="nc-icon nc-badge"></i>
          <p>Pendaftaran</p>
        </a>
      </li>
      <li class="{{ active('kecamatan*') }}">
        <a href="{{ url('kecamatan/kecamatan') }}">
          <i class="nc-icon nc-bank"></i>
          <p>Kecamatan</p>
        </a>
      </li>
      <li class="{{ active('kelurahan*') }}">
        <a href="{{ url('kelurahan/kelurahan') }}">
          <i class="nc-icon nc-shop"></i>
          <p>Kelurahan</p>
        </a>
      </li>


      <li class="{{ active(['jenisLinmas*', 'linmas*','asetLimas*']) }}">
        <a data-toggle="collapse" href="#tablesExamples" >
          <i class="nc-icon nc-book-bookmark"></i>
          <p>
            Linmas
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ active(['jenisLinmas*', 'linmas*','asetLimas*'], 'show') }}" id="tablesExamples">
          <ul class="nav">
            <li class="{{ active('jenisLinmas*') }}">
              <a href="{{ url('jenisLinmas/jenis-linmas') }}">
                <span class="sidebar-mini-icon">J</span>
                <span class="sidebar-normal"> Jenis Linmas </span>
              </a>
            </li>
            <li class="{{ active('linmas*') }}">
              <a href="{{ url('linmas/linmas') }}">
                <span class="sidebar-mini-icon">L</span>
                <span class="sidebar-normal"> Linmas </span>
              </a>
            </li>

            <li class="{{ active('asetLimas*') }}">
              <a href="{{ url('asetLimas/aset-limas') }}">
                <span class="sidebar-mini-icon">A</span>
                <span class="sidebar-normal"> Aset Linmas </span>
              </a>
            </li>

          </ul>
        </div>
      </li>

      <li class="{{ active('lokasi*') }}">
        <a href="{{ url('lokasi/lokasi') }}">
          <i class="fa fa-map-marker"></i>
          <p>Lokasi</p>
        </a>
      </li>

    </ul>
  </div>
</div>
