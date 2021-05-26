@extends('layouts.app')

@section('content')
<main class="min-h-screen">
    <div class="bg-contain bg-no-repeat">
        <div class="w-full bg-about-profile lg:h-96 shadow-lg h-1/2">
            <img src="/img/about-hayati-kale.png" alt="hayati kale" class="lg:h-96 lg:absolute lg:right-0 lg:pr-32"
                height="1080">
        </div>
        <div class="flex flex-col shadow-md">
            <p class="text-center py-4 un"><a href="{{ '/' . app()->getLocale() }}"
                    class="hover:text-gray-700 underline">{{ __('Anasayfa') }}</a>
                /<span class="text-xl"> {{ __('Hakkımızda') }}</span></p>
        </div>
        <div class="mt-10 flex flex-col lg:px-32 p-4">
            <div class="flex flex-col lg:flex-row p-2 mb-8">
                <div class="lg:w-1/3 pr-4 pb-4">
                    <h1 class="text-xl text-gray-800 font-extrabold text-center">
                        {{ __('Op. Dr. Hayati Kale Kimdir?') }}
                    </h1>
                </div>
                <div class="lg:w-2/3 pl-2 text-justify text-gray-800">
                    {!! __('about.hayati_kale') !!}
                </div>
            </div>
            <div class="flex flex-col lg:flex-row p-2 pt-4 mb-8 border-t-2">
                <div class="lg:w-1/3 pr-4 pb-4">
                    <h1 class="text-xl text-gray-800 font-extrabold text-center">
                        {{ __('Özel Olarak İlgilendiği Konular:') }}
                    </h1>
                </div>
                <ul class="lg:w-2/3 pl-2 text-justify text-gray-800 list-disc">
                    {!! __('about.special') !!}
                </ul>
            </div>
        </div>

    </div>
</main>
@endsection
