@extends('layouts.app')

@section('content')
<main>
  <section class="mx-auto">
    @include('home.partials.profilePhoto')
  </section>

  <section class="mx-auto">
    @include('home.partials.title')
  </section>

  <section class="mx-auto px-4 mt-10 lg:mt-20">
    @include('home.partials.rhinoplasty')
  </section>

  <section class="mx-auto mt-10 lg:mt-20">
    @include('home.partials.services')
  </section>

  <section class="mx-auto px-4 mt-10 lg:mt-20">
    @include('home.partials.whyChooseUsRhinoplasty')
  </section>

  <section class="mx-auto mt-10 lg:mt-20">
    @include('home.partials.slider')
  </section>

  <section class="mx-auto px-4 mt-10 lg:mt-20">
    @include('home.partials.whyChooseUsFace')
  </section>

</main>
@endsection