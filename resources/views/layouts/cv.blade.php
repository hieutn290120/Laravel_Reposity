<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <noscript>
        <style type="text/css">
          [data-aos] {
              opacity: 1 !important;
              transform: translate(0) scale(1) !important;
          }
        </style>
      </noscript>
      {{-- Link --}}
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <link rel="stylesheet" href="{{asset('assets/cv/css/aos.css')}}">
      <link rel="stylesheet" href="{{asset('assets/cv/css/bootstrap.min.css')}}">
    
      <link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('assets/cv/css/main.css')}}">

</head>
<body>
    {{-- Header --}}
    <header>
        @include('includes.cv.header')
    </header>
    {{-- main --}}
    <main>  
        @yield('content')
    </main>
    {{-- footer --}}
    <footer class="footer">
        @include('includes.cv.footer')
    </footer>
    
    {{-- Script --}}
    <script type="text/javascript" src="{{ asset('assets/cv/js/core/jquery.3.2.1.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('assets/cv/js/aos.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/cv/js/now-ui-kit.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/cv/js/plugins/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/cv/js/plugins/bootstrap-switch.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/cv/js/plugins/jquery.sharrre.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/cv/js/plugins/nouislider.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('assets/cv/js/core/popper.min.js')}}"></script>
     <script type="text/javascript" src="{{ asset('assets/cv/js/core/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/cv/scripts/main.js')}}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('script')
</body>
</html>