<div class="flex lg:flex-row flex-col justify-between bg-soft-gray py-10 lg:pb-0 lg:ml-10">
  <div class="lg:w-1/2 px-4 hidden lg:flex flex-col justify-center">
    {{-- <img src="/img/hayati-kale-profile3.png" alt="hayati kale fotoğraf" width="761" height="1080"
    class="" loading="lazy"> --}}
  </div>
  <div class="lg:w-1/2 flex m-auto lg:justify-center justify-start pl-4 lg:pl-0 border-l-4 border-blue-800">
    <div class="px-4 text-gray-800">
      <h2 class="font-bold text-lg lg:text-3xl">{{ __('İstanbul Burun Estetiği') }}</h2>
      <div class="py-4">{!! __('home.istanbulBurunEstetigi') !!}</div>
      <a href="{{ route('services.show', 'burun-estetigi') }}" class="text-md text-blue-600 hover:text-blue-700 cursor-pointer mb-10">{{ __("Devamı için tıklayınız") }}-></a>
    </div>
  </div>
</div>