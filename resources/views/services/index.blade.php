@extends('layouts.app')

@section('content')
<main class="min-h-screen mb-32">
    <div class="bg-gradient-to-b from-blue-500 md:h-96 bg-contain bg-no-repeat pt-8">
        <div class="h-16"></div>
        <div class="h-32 flex flex-row">
            <div class="flex flex-row justify-around w-full m-auto">
                <div>
                    <img src="/img/varlik0.svg" alt="/kalp-seridi" class="h-28 w-28">
                </div>
                <div class="hidden lg:flex">
                    <img src="/img/varlik1.svg" alt="/kalp-seridi" class="h-28 w-28">
                </div>
                <div class="hidden lg:flex">
                    <img src="/img/varlik2.svg" alt="/kalp-seridi" class="h-28 w-28">
                </div>
                <div>
                    <img src="/img/varlik3.svg" alt="/kalp-seridi" class="h-28 w-28">
                </div>
            </div>
        </div>
        <div class="h-2">

        </div>
        <div class="h-32 mb-4">
            <div class="flex flex-row justify-around w-full m-auto">
                <div>
                    <img src="/img/varlik5.svg" alt="/kalp-seridi" class="h-28 w-28">
                </div>
                <div class="hidden lg:flex">
                    <img src="/img/varlik4.svg" alt="/kalp-seridi" class="h-28 w-28">
                </div>
                <div class="hidden lg:flex">
                    <img src="/img/varlik6.svg" alt="/kalp-seridi" class="h-28 w-28">
                </div>
                <div>
                    <img src="/img/varlik8.svg" alt="/kalp-seridi" class="h-28 w-28">
                </div>
            </div>
        </div>
        <div class="h-14 flex justify-center items-center">
            <h1 class="text-4xl text-gray-800 font-extrabold text-center">
                {{ __('Hizmetlerimiz') }}
            </h1>
        </div>
    </div>
    <div class="border-b text-sm text-gray-700 font-light lg:pl-32 ml-auto pt-8">
        <p class="px-4"><a href="{{ '/' . app()->getLocale() }}" class="hover:text-gray-900">{{ __('Anasayfa') }} /</a>
            {{ __('Hizmetlerimiz') }}</p>
    </div>
    <div class="lg:pt-4 mb-32 lg:px-32 flex flex-row flex-wrap">
        @foreach($services as $service)
        <div class="lg:w-4/12 md:w-6/12 mb-4 md:mb-4 md:px-4 cursor-pointer transform hover:scale-105 transition duration-500 ease-in-out">
            <a href="{{ route('services.show', $service) }}">
                <img src="{{ $service->image }}" alt="{{ $service->alt }}" width="1000" height="562.5" loading="lazy" class="rounded-t shadow-2xl">
                <p class="text-white bg-blue-500 font-bold text-center rounded-b">{{ $service->title }}</p>
            </a>
        </div>
        @endforeach
    </div>
</main>
@endsection