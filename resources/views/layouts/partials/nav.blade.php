@include('layouts.partials.topnav')
<nav class="z-30 w-full fixed top-0 lg:sticky flex-wrap items-center px-2 lg:py-3 navbar-expand-lg bg-white lg:px-32 lg:border-b-2 border-primary">
  <div class="lg:flex flex-grow items-center lg:bg-transparent lg:shadow-none hidden rounded-md"
    id="example-collapse-navbar">
    <ul class="flex flex-col lg:flex-row list-none m-auto">
      <li class="flex items-center rounded">
        <a class="lg:text-gray-800 text-gray-800 px-3 py-3 lg:py-2 flex items-center text-sm lg:text-md uppercase font-bold"
          href="{{ '/' . app()->getLocale() }}">{{ (__('Anasayfa')) }}</a>
      </li>
      <li class="flex items-center  rounded">
        <a class="lg:text-gray-800 text-gray-800 px-3 py-3 lg:py-2 flex items-center text-sm lg:text-md uppercase font-bold"
          href="{{ '/' . app()->getLocale() . '/' .   trans('routes.about') }}">{{ __('Hakkımızda') }}</a>
      </li>
      @foreach ($services as $service)
      @if($service->children)
      @include('layouts.partials._dropdown')
      @endif
      @endforeach
      <li class="flex items-center  rounded">
        <a class="lg:text-gray-800 text-gray-800 px-3 py-3 lg:py-2 flex items-center text-sm lg:text-md uppercase font-bold"
          href="{{ '/' . app()->getLocale() . '/' .   trans('routes.blog') }}">{{ __('Blog') }}</a>
      </li>
      <li class="flex items-center  rounded">
        <a class="lg:text-gray-800 text-gray-800 px-3 py-3 lg:py-2 flex items-center text-sm lg:text-md uppercase font-bold"
          href="{{ '/' . app()->getLocale() . '/' .   trans('routes.contact') }}">{{ __('İletişim') }}</a>
      </li>
    </ul>
  </div>
</nav>