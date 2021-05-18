<nav
  class="top-0 absolute z-40 w-full flex flex-wrap items-center justify-between lg:justify-around px-2 py-3 navbar-expand-lg bg-gradient-to-b from-gray-700">
  <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
    <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start items-center">
      <a class="text-sm font-bold leading-relaxed inline-block mr-4 whitespace-no-wrap uppercase text-white" href="/">
        <img src="/img/logo_white.png" alt="">
      </a>
      <button
        class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
        type="button" onclick="toggleNavbar('example-collapse-navbar')">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" class="w-8 h-8">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
      </button>
    </div>
    <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden rounded-md shadow-lg"
      id="example-collapse-navbar">
      <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
        <li class="flex items-center lg:hover:bg-indigo-400 rounded transition duration-500 ease-in-out">
          <a class="lg:text-white text-gray-800 px-3 py-4 lg:py-2 flex items-center text-sm lg:text-lg uppercase font-bold"
            href="{{ '/' . app()->getLocale() }}">{{ (__('Anasayfa')) }}</a>
        </li>
        @include('layouts.partials._dropdown')
        <li class="flex items-center lg:hover:bg-indigo-400 transition duration-500 ease-in-out rounded">
          <a class="lg:text-white text-gray-800 px-3 py-4 lg:py-2 flex items-center text-sm lg:text-lg uppercase font-bold"
            href="{{ '/' . app()->getLocale() . '/' .   trans('routes.about') }}">{{ __('Hakkımızda') }}</a>
        </li>
        <li class="flex items-center lg:hover:bg-indigo-400 transition duration-500 ease-in-out rounded">
          <a class="lg:text-white text-gray-800 px-3 py-4 lg:py-2 flex items-center text-sm lg:text-lg uppercase font-bold"
            href="{{ '/' . app()->getLocale() . '/' .   trans('routes.blog') }}">{{ __('Blog') }}</a>
        </li>
        <li class="flex items-center lg:hover:bg-indigo-400 transition duration-500 ease-in-out rounded">
          <a class="lg:text-white text-gray-800 px-3 py-4 lg:py-2 flex items-center text-sm lg:text-lg uppercase font-bold"
            href="{{ '/' . app()->getLocale() . '/' .   trans('routes.contact') }}">{{ __('İletişim') }}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>