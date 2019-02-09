

<!DOCTYPE html>
<html>
<head>
  <title>Linmas</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
        <style type="text/css">
        .table-bordered td, .table-bordered th {
            border: 1px solid #000000 !important;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }
        @page { margin: 5px; }
      </style>

      <style type="text/css" >
        table { 
      
          border:1px solid black !important;
      }

        body{
          margin: 5px;
          margin-top: 20px;
          width:210mm;
          height: auto;
          font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            padding: 3px 7px;
            font-size: 11px;
            vertical-align: unset;
        }

        .tablekec>tbody>tr>td, .tablekec>tbody>tr>th, .tablekec>tfoot>tr>td, .tablekec>tfoot>tr>th, .tablekec>thead>tr>td, .tablekec>thead>tr>th {
            padding: 0px;
            border: unset !important;
        }

        .table-bordered {
            border: 1px solid #000000;
        } 
        hr {
            margin-top: 0.5%; 
            margin-bottom: 0.5%; 
            border: 0;
            border-top: 1px solid rgb(0, 0, 0);
        }


        .table {
          width: 100%;
          max-width: 100%;
          margin-bottom: 1rem;
          background-color: transparent;
          font-size: 16px;

      }

      .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05) !important;
        }


      </style>
<body>
<table class="table table-bordered" style="margin-bottom:1%; border: 1px solid white !important;">
  <thead>
    <tr style="margin-bottom:0%;">
      <th style="padding-top: 0% !important; text-align: center; vertical-align: middle; width: 10%; border: 1px solid white!important;" rowspan="1">
        <img src="{{asset('assets/PrintCard/linmas.png')}}" style="width: 4200%; height: 7%; max-width: 4200%;">
      </th>
      <th style="font-style: 0.4rem; border: 1px solid white!important; padding-top: 0% !important; ">
        <div style="padding-left: 25%; width:50%; text-align:center; ">
         <span style="text-align: center;text-transform: uppercase;"><h2>Daftar Anggota Linmas</h2></span>
          <table style="margin-top: -10px;size: 11px;width: 100%;text-align:center; vertical-align: -webkit-center;border: 1px solid white!important;" class="tablekec">
            <tr>
              <td style=" width: 15%;"></td>
              <td style=" width: 35%;">
                <span style="float:  left;">Kecamatan</span></td>
              <td style="width: 5%; text-align: center;">:</td>
              <td>
                <span style="float:  left;">{{$Kecamatan}}</span>
              </td>
            </tr>
            <tr>
              <td style=" width: 15%;"></td>
              <td style="width: 35%;">
                <span style="float: left;">Kelurahan/Desa</span>
              </td>
              <td style="width: 5%; text-align: center;">:</td>
              <td>
                <span style="float:  left;">{{$Kelurahan}}</span>
              </td>
            </tr>
            <tr>
              <td style=" width: 15%;"></td>
              <td style="width: 35%;">
                <span style="float: left;">Status</span>
              </td>
              <td style="width: 5%; text-align: center;">:</td>
              <td>
                <span style="float:  left;">{{$statusLinmas}}</span>
              </td>
            </tr>
          </table>
        </div>
        {{-- <p style="padding: 0px; margin: 0px; text-align: left;">Kelurahan / Desa</p> --}}
      </th>

      <th style="padding-top: 0% !important; text-align: center; vertical-align: middle; width: 10%; border: 1px solid white!important;" rowspan="1">
        <img src="{{asset('assets/PrintCard/satpolpp.png')}}" style="width: 4000%; height: 6%; max-width: 4000%;">
      </th>
    </tr>
  </thead>
</table>
          <table class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead style="text-transform:uppercase;background: #e2e2e2 !important;">
                <tr >
                    <th style="text-align: center;width: 1%;vertical-align: middle;">NO</th>
                    <th style="width: 19%;vertical-align: middle;">Nama/ Kelamin/ Tgl Lahir</th>
                    <th style="width: 11.4%;vertical-align: middle;">Agama / Status</th>
                    <th style="vertical-align: middle;">Alamat</th>
                    <th style="vertical-align: middle;">No KTP/ NO HP</th>
                    <th style="width: 9%;text-align: left;vertical-align: middle;">Ukuran</th>
                    <th style="width: 12%;vertical-align: middle;">Keterangan</th>
                    <th style="width: 8%;text-align: center;vertical-align: middle;">Status</th>
                </tr>
            </thead>

            <tbody id="tbody">
            @foreach($linmas as $item)
                <tr>
                    <td style="text-align: center;">{{ $loop->iteration or $item->id }}</td>
                    <td>{{ $item->nama }} <br>
                        {{ $item->jenis_kelamin }} <br>
                        <?php
                          $ExplodeTanggal = explode('/',$item->tgl_lahir);
                          $TanggalLahir =  $ExplodeTanggal[1].'-'.$ExplodeTanggal[0].'-'.$ExplodeTanggal[2];
                        ?>
                        {{ $item->tempat_lahir }}, {{ $TanggalLahir }}</td>
                    <td>   {{ $item->agama }}
                      <br> {{ $item->pendidikan }}
                      <br> {{ $item->status }}
                    </td>
                    <td>   {{ $item->alamat }}
                      <br> Rt {{ $item->rt }} - Rw {{ $item->rw }}
                      <br> Kec. {{ $item->alamat_kecamatan }}
                      <br> Kel/Des. {{ $item->alamat_kelurahan}}
                    </td>
                    <td style="width: 13%;">{{ $item->no_ktp }}
                      <br>{{ $item->hp }}
                    </td>
                    <td style="text-align: left;padding-right: 0% !important;">Baju : {{$item->uk_baju}}<br> Sepatu : {{$item->uk_sepatu}}
                    </td>
                    <td>{{ $item->keterangan }}
                    </td>
                    <td>
                      @if($item->status_linmas == 1)
                         Telah Disahkan
                      @elseif($item->status_linmas == 0)
                         Belum Disahkan
                      @else

                      @endif
                    </td>
                </tr>


            @endforeach
        </tbody>

        </table>



  <script type="text/php">
    if ( isset($pdf) ) {
        $font = $fontMetrics->get_font("helvetica", "bold");
        echo $pdf->page_text(545, 920, "Page: {PAGE_NUM} Dari {PAGE_COUNT}", $font, 8, array(0,0,0));
    }
</script> 

</body>

</html>
<!-- <link href="{{ asset('assets/css/paper-dashboard.min790f.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"> -->
