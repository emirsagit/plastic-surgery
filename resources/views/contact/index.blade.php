@extends('layouts.app')

@section('content')
<div class="min-h-screen pb-24 lg:pb-32 bg-gray-900 flex flex-col">
  <div class="bg-contain bg-no-repeat pt-32">
    <div class="h-14 flex justify-center items-center">
      <h1 class="text-4xl text-white font-extrabold text-center">
        {{ __('İletişim') }}
      </h1>
    </div>
  </div>
  @include('layouts.shared.whyUsSvgs')
  <div class="px-4 pt-16 w-full">
    <div class="flex justify-center">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex flex-col break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
          <form class="flex-auto p-5 lg:p-10">
            <h4 class="text-2xl font-semibold">{{ __('İletişim Formu') }}</h4>
            <p class="leading-relaxed mt-1 mb-4 text-gray-600">
              {{ __('Formu doldurun. En kısa sürede sizi arayalım') }}
            </p>
            <div class="relative w-full mb-3 mt-8">
              <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                for="full-name">{{ __('İsim') }}</label>
              <input type="text"
                class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                name="name" placeholder="{{ __('İsim') }}" style="transition: all 0.15s ease 0s;" />
            </div>
            <div class="relative w-full mb-3">
              <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                for="email">{{ __('E-posta') }}</label><input type="email" name="email"
                class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                placeholder="{{ __('E-posta adresiniz') }}" style="transition: all 0.15s ease 0s;" />
            </div>
            <div class="relative w-full mb-3">
              <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                for="email">{{ __('Telefon') }}</label><input type="tel" name="tel"
                class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                placeholder="{{ __('Telefon') }}" style="transition: all 0.15s ease 0s;" />
            </div>
            <div class="relative w-full mb-3">
              <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                for="message">{{ __('Mesajınız') }}</label><textarea rows="4" cols="80"
                class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                placeholder="{{ __('Mesajınız') }}"></textarea>
            </div>
            <div class="text-center mt-6">
              <button
                class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                type="button" style="transition: all 0.15s ease 0s;">
                {{ __('Gönder') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection