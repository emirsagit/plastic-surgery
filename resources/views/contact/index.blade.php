@extends('layouts.app')

@section('content')
<main class="w-full min-h-screen flex flex-col text-white justify-center items-center bg-blue-pattern lg:-mb-20 -mb-10">
  <section class="w-full text-white flex flex-col lg:justify-between overflow-hidden items-center">
    <div class="flex justify-start items-start flex-col w-full">
      <a class="relative py-1 px-2 bg-blue-800 hover:bg-blue-900 rounded text-white text-left text-sm"
        href="{{ '/' . app()->getLocale() }}">{{ (__('Anasayfa')) }}</a>
    </div>
    <div class="flex flex-col py-2 mt-4 mb-4">
      <h1 class="font-bold text-3xl text-center">{{ __(' İletişim') }}</h1>
    </div>
    <div class="flex flex-col lg:flex-row justify-between pb-10">
      <div class="flex flex-col lg:ml-10 lg:justify-center p-4 lg:py-0 lg:w-1/2">
        <div class="flex flex-col">
          <p class="pb-4 text-sm text-gray-100">{{ __('İletişim Bilgilerimiz:') }}</p>
          <a href="tel:{{ config('admin.tel') }}" class="flex w-full pb-4">
            <span class="pr-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="#fff" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </span>
            {{ config('admin.tel') }}
          </a>

          <a href="mailto:{{ config('admin.email') }}" class="flex w-full pb-4">
            <span class="pr-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="white" stroke="white">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
              </svg>
            </span>
            {{ config('admin.email') }}
          </a>

          <p class="flex w-full pb-4">
            <span class="pr-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
            </span>
            {{ config('admin.address') }}
          </p>
        </div>

        <div class="flex flex-col mt-6">
          <p class="text-sm text-gray-200 pb-4">{{ __('Sosyal Medya Hesaplarımız:') }}</p>
          <div class="flex flex-row">
            @include('layouts.shared.social')
          </div>

        </div>

      </div>
      <div class="relative lg:w-1/2">
        <div class="absolute z-0 w-40 h-40 rounded-full bg-purple-500 -right-24 -top-20"></div>
        <div class="absolute z-0 w-40 h-40 rounded-full bg-purple-500 -left-24 -bottom-20"></div>

        <form class="flex-auto lg:p-10 z-10 p-4 bg-gray-700 rounded bg-opacity-50 lg:mr-8">
          <p class="text-sm mb-1 lg:text-center z-10">
            {{ __('İletişim Formu') }}
          </p>
          <div class="relative w-full mb-3">
            <label class="block text-white text-xs font-bold mb-2" for="full-name">{{ __('İsim') }}</label>
            <input type="text"
              class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
              name="name" placeholder="{{ __('İsim') }}" />
          </div>
          <div class="relative w-full mb-3">
            <label class="block text-white text-xs font-bold mb-2" for="email">{{ __('E-posta') }}</label><input
              type="email" name="email"
              class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
              placeholder="{{ __('E-posta adresiniz') }}" />
          </div>
          <div class="relative w-full mb-3">
            <label class="block text-white text-xs font-bold mb-2" for="email">{{ __('Telefon') }}</label><input
              type="tel" name="tel"
              class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
              placeholder="{{ __('Telefon') }}" />
          </div>
          <div class="relative w-full mb-3">
            <label class="block text-white text-xs font-bold mb-2" for="message">{{ __('Mesajınız') }}</label><textarea
              rows="4" cols="80"
              class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
              placeholder="{{ __('Mesajınız') }}"></textarea>
          </div>
          <div class="text-center mt-6">
            <button
              class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 px-3 py-2 hover:bg-gray-700"
              type="button">
              {{ __('Gönder') }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.3623880677274!2d28.859845214972268!3d40.99544077930199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabbe055a9630f%3A0x476f8687288298f!2sOp.%20Dr.%20Hayati%20KALE!5e0!3m2!1str!2str!4v1622043099430!5m2!1str!2str"
    class="w-full h-96" allowfullscreen="" loading="lazy"></iframe>
</main>
@endsection