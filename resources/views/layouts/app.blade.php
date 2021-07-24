<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <!-- Styles -->
  <link href="{{ asset('css/fonts.css') }}" rel="preload" as="font">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="/css/splide.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  {!! SEO::generate(true) !!}
  @yield('head')
  <!-- Facebook Pixel Code -->
  {{-- @include('layouts.shared.pixel') --}}
  <!-- End Facebook Pixel Code -->
</head>

<body class="text-gray-800" x-data="{ form: false }">
  @include('layouts.partials.topnav')
  @include('layouts.partials.video')
  @include('layouts.partials.appointmentForm')
  @include('layouts.partials.whapsappAndPhoneIcons')
  @include('layouts.partials.appointmentFormButton')
  @include('layouts.partials.changeLanguage')
  <div>
    @yield('content')
  </div>
  @include('layouts.partials.footer')
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/lazysizes.min.js') }}" defer></script>
  <script src="/js/splide.min.js"></script>
  @yield('script')
</body>

</html>