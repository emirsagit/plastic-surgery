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
@section('script')
<script>
  document.addEventListener( 'DOMContentLoaded', function () {
                new Splide( '.splide', {
                      type : 'loop',
                      perPage: 3,
                      gap: '1em',
                      cover : true,
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
@endsection