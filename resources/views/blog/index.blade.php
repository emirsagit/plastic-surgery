@extends('layouts.app')

@section('content')
<main class="min-h-screen mb-32">
    <div class="bg-gradient-to-b from-blue-500 bg-contain bg-no-repeat pt-32">
        <h1 class="text-4xl text-gray-800 font-extrabold text-center">
            {{ __('Blog') }}
        </h1>
    </div>
    <div class="border-b text-sm text-gray-700 font-light lg:pl-32 ml-auto pt-8">
        <p class="px-4"><a href="{{ '/' . app()->getLocale() }}" class="hover:text-gray-900">{{ __('Anasayfa') }} /</a>
            {{ __('Blog') }}</p>
    </div>
    <div class="lg:pt-4 mb-32 lg:px-32 flex flex-row flex-wrap">
        @forelse($blogs as $blog)
        <div
            class="lg:w-4/12 md:w-6/12 mb-4 md:mb-4 md:px-4 cursor-pointer transform hover:scale-105 transition duration-500 ease-in-out">
            <a href="{{ route('services.show', $service) }}">
                <img src="{{ $service->image }}" alt="{{ $service->alt }}" width="1000" height="562.5" loading="lazy"
                    class="rounded-t shadow-2xl">
                <p class="text-white bg-blue-500 font-bold text-center rounded-b">{{ $service->title }}</p>
            </a>
        </div>
        @empty
            <div>
                Sayfamız yapım aşamasındadır.
            </div>
        @endforelse
    </div>
</main>
@endsection