<nav class="z-40 w-full h-full flex-wrap flex flex-col select-none">
  <div class="fixed right-2 top-2 text-white text-4xl font-bold cursor-pointer" @click="openNavbar = false">
    x
  </div>
  <ul class="flex flex-col w-full h-full list-none lg:m-auto lg:items-center justify-start align-middle pt-4">
    <li class="flex items-center rounded pl-4 lg:pl-0">
      <a class="text-white px-3 py-2 lg:py-3 flex items-center text-sm lg:text-md  uppercase font-bold"
        href="{{ '/' . app()->getLocale() }}">{{ (__('Anasayfa')) }}</a>
    </li>
    <li class="flex items-center  rounded pl-4 lg:pl-0">
      <a class="text-white px-3 py-2 lg:py-3 flex items-center text-sm lg:text-md  uppercase font-bold"
        href="{{ '/' . app()->getLocale() . '/' .   trans('routes.about') }}">{{ __('Op. Dr. Hayati Kale') }}</a>
    </li>
    @foreach ($services as $service)
    @if($service->children)
    @include('layouts.partials._dropdown')
    @endif
    @endforeach
    <li class="flex items-center  rounded pl-4 lg:pl-0">
      <a class="text-white px-3 py-2 lg:py-3 flex items-center text-sm lg:text-md  uppercase font-bold"
        href="{{ '/' . app()->getLocale() . '/' .   trans('routes.gallery') }}">{{ __('Galeri Sayfası') }}</a>
    </li>
    <li class="flex items-center  rounded pl-4 lg:pl-0">
      <a class="text-white px-3 py-2 lg:py-3 flex items-center text-sm lg:text-md  uppercase font-bold"
        href="{{ '/' . app()->getLocale() . '/' .   trans('routes.blog') }}">{{ __('Blog') }}</a>
    </li>
    <li class="flex items-center  rounded pl-4 lg:pl-0">
      <a class="text-white px-3 py-2 lg:py-3 flex items-center text-sm lg:text-md  uppercase font-bold"
        href="{{ '/' . app()->getLocale() . '/' .   trans('routes.contact') }}">{{ __('İletişim') }}</a>
    </li>
    <div class="flex-col items-start lg:items-center w-full flex pl-7 py-2 lg:py-3 lg:pl-0">
      <a href="https://www.instagram.com/hayatikale" class="pb-2 lg:pb-3 flex flex-row items-center text-white">
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 100 100" fill="#fff"
          class="pr-1">
          <path
            d="M70 9.999H30c-10.999 0-20 9.001-20 20v40.002c0 10.996 9.001 20 20 20h40c10.999 0 20-9.004 20-20V29.999c0-10.999-9.001-20-20-20zm13.333 60.002c0 7.35-5.979 13.333-13.333 13.333H30c-7.351 0-13.333-5.983-13.333-13.333V29.999c0-7.352 5.982-13.333 13.333-13.333h40c7.354 0 13.333 5.981 13.333 13.333v40.002z" />
          <circle cx="71.667" cy="28.332" r="5" />
          <path
            d="M50 29.999c-11.048 0-20 8.953-20 20 0 11.043 8.952 20.002 20 20.002 11.045 0 20-8.959 20-20.002 0-11.047-8.955-20-20-20zm0 33.335c-7.363 0-13.333-5.97-13.333-13.335S42.637 36.666 50 36.666s13.333 5.968 13.333 13.333S57.363 63.334 50 63.334z" />
        </svg>
        Instagram
      </a>
      <a href="https://www.youtube.com/channel/UCJBK9XF4dY1P96KvHV9omRA/videos"
        class="pb-2 lg:pb-3 flex flex-row items-center text-white">
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 100 100" fill="#fff"
          class="pr-1">
          <path
            d="M88.884 30.939c-.42-3.503-3.721-6.862-7.175-7.312a257.093 257.093 0 00-63.415 0c-3.457.449-6.758 3.809-7.178 7.312-1.487 12.838-1.487 25.286 0 38.121.42 3.503 3.721 6.865 7.178 7.312a257.093 257.093 0 0063.415 0c3.454-.446 6.755-3.809 7.175-7.312 1.487-12.834 1.487-25.283 0-38.121zM43.333 63.335V36.668l20 13.334-20 13.333z" />
        </svg>
        Youtube
      </a>
    </div>
  </ul>
</nav>