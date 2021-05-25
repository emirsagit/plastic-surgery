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
  <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Styles -->
  @yield('head')
</head>

<body class="text-gray-800" x-data="{ form: false }">
  @include('layouts.partials.topnav')
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
<script src="{{ asset('js/splide.min.js') }}" defer></script>
<script src="{{ asset('js/lazysizes.min.js') }}" defer></script>
<script>
  function goto() {
    console.log('burada');
    document.getElementById('who-is-doctor-hayati').scrollIntoView({ behavior: 'smooth' });
  }

  document.addEventListener( 'DOMContentLoaded', function () {
  new Splide( '.splide', {
    type   : 'loop',
    perPage: 3,
    gap: '1em',
    cover  : true,
    heightRatio: 0.3,
    breakpoints: {
    1024: {
      perPage: 1,
            heightRatio: 1,
      },
    }
}).mount();
});

</script>



</html>