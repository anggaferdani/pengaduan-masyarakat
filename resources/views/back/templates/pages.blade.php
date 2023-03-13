
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta17
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <!-- CSS files -->
    <link href="{{ asset('back/dist/css/tabler.min.css?1674944402') }}" rel="stylesheet"/>
    <link href="{{ asset('back/dist/css/tabler-flags.min.css?1674944402') }}" rel="stylesheet"/>
    <link href="{{ asset('back/dist/css/tabler-payments.min.css?1674944402') }}" rel="stylesheet"/>
    <link href="{{ asset('back/dist/css/tabler-vendors.min.css?1674944402') }}" rel="stylesheet"/>
    <link href="{{ asset('back/dist/css/demo.min.css?1674944402') }}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body style="background-color: white;">
    <script src="{{ asset('back/dist/js/demo-theme.min.js?1674944402') }}"></script>
    <div class="page">
      <!-- Navbar -->
      @if(auth()->user()->level == 1 or auth()->user()->level == 2)
        @include('back.templates.subtemplates.administrator')
      @elseif(auth()->user()->level == 3)
        @include('back.templates.subtemplates.user')
      @endif
      <div class="page-wrapper">
        <div class="page-header d-print-none">
          <div class="container-xl">
            @yield('header')
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            @yield('content')
          </div>
        </div>
        @include('back.templates.subtemplates.footer')
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('back/dist/js/tabler.min.js?1674944402') }}" defer></script>
    <script src="{{ asset('back/dist/js/demo.min.js?1674944402') }}" defer></script>
  </body>
</html>