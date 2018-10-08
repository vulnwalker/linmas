<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="icon" type="image/png" href="{{asset('assets/images/logo-serang.png')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->

      @include('admin.assets.cssFile')
      <style type="text/css">
        .card {
            margin-bottom: 3px;
            margin-left: -15px;
            margin-right: -10px;
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            padding: 0px 7px;
            vertical-align: unset;
        }

      </style>
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/loading.css') }}">
</head>
<body>
    <div class="wrapper ">
       {{-- @include('admin.sidebar') --}}
      <div class="main-panel" style="width:  100%;">
        @include('admin.navbar')
        @yield('content')
      </div>
    </div>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
  @include('admin.assets.jsFile')

</body>
</html>
