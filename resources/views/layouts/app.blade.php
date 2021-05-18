<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  {!! SEO::generate(true) !!}

  <!-- Fonts -->
  <link href="{{ asset('css/fonts.css') }}" rel="preload">
  {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Styles -->
  @yield('head')
</head>

<body class="text-gray-800 antialiased" x-data="{ form: false }">
  @include('layouts.partials.nav')
  @include('layouts.partials.appointmentForm')
  @include('layouts.partials.whapsappAndPhoneIcons')
  @include('layouts.partials.appointmentFormButton')
  @include('layouts.partials.changeLanguage')
  <div>
    @yield('content')
  </div>
  @include('layouts.partials.footer')
  @yield('footer')
</body>
<script>
  function toggleNavbar(collapseID) {
          document.getElementById(collapseID).classList.toggle("hidden");
          document.getElementById(collapseID).classList.toggle("block");
        }
</script>
<script src="{{ asset('js/app.js') }}" defer></script>

</html>