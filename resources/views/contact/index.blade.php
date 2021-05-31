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
          @include('layouts.shared.contactInformation')
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

        @include('layouts.shared.contactForm')
      </div>
    </div>
  </section>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.3623880677274!2d28.859845214972268!3d40.99544077930199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabbe055a9630f%3A0x476f8687288298f!2sOp.%20Dr.%20Hayati%20KALE!5e0!3m2!1str!2str!4v1622043099430!5m2!1str!2str"
    class="w-full h-96" allowfullscreen="" loading="lazy"></iframe>
</main>
@endsection