<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <!-- Styles -->
  <link href="{{ asset('css/fonts.css') }}" rel="preload" as="font">
  {{-- <link rel="stylesheet" href="{{asset(mix('/css/app.css'))}}"> --}}
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  <link rel="stylesheet" href="{{asset('/css/splide.min.css')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  {!! SEO::generate(true) !!}
  <!-- Google Tag Manager Code -->
  {{-- @include('layouts.shared.tagHead') --}}
  <!-- End Google Tag Manager Code -->
  @yield('head')
</head>

<body class="text-gray-800" x-data="{ form: false }">
  <!-- Google Tag Manager Code -->
  {{-- @include('layouts.shared.tagBody') --}}
  <!-- End Google Tag Manager Code -->
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
  <script src="{{asset(mix('/js/app.js'))}}" defer></script>
  <script src="{{ asset('/js/splide.min.js') }}" defer></script>
  @yield('script')
</body>

</html>