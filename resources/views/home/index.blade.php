@extends('layouts.app')

@section('content')
<main>
  <div class="flex content-center items-center justify-center">
    @include('home.partials.title')
  </div>

  <section class="mx-auto px-4 mt-10 lg:mt-20">
    @include('home.partials.rhinoplasty')
  </section>

  <section class="mx-auto mt-10 lg:mt-20">
    @include('home.partials.services')
  </section>

  {{-- <section class="">
    @include('home.partials.about')
  </section>

  <section class="relative">
    @include('home.partials.whyUs')
  </section> --}}
</main>
@endsection