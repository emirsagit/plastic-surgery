@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="/css/tocbot.css">
@endsection

@section('content')
<main class="min-h-screen lg:ml-10">
    <div class="bg-gradient-to-b nav-gradient">
        <div class="pt-12">
            <div class="flex flex-row justify-evenly mb-8 mt-4">
                @include('layouts.shared.telephoneAndOnlineLinks')
            </div>
            <h1 class="text-2xl lg:text-4xl text-gray-800 font-extrabold text-center px-2 uppercase">
                {{ $service->title }}
            </h1>
        </div>
    </div>

    <div class="mt-8 border-t border-b border-blue-200 text-sm text-gray-700 font-light lg:pl-24">
        <p class="px-4 uppercase">
            <a href="{{ '/' . app()->getLocale() }}" class="hover:text-gray-900">{{ __('Anasayfa') }} / </a>
            {{ $service->title }}
        </p>
    </div>

    <div class="relative mb-10 lg:px-24">
        <div class="flex lg:flex-row flex-col">

            @include('services.partials.imageAndBody')

            @include('services.partials.summary')

        </div>
    </div>

    <div class="flex flex-col p-4 bg-soft-gray">

        @include('services.partials.photos')

    </div>

    <div class="flex flex-col mb-10 lg:px-24">

        @include('services.partials.relatedServices')

    </div>
</main>
@endsection

@section('script')
<script src="/js/tocbot.min.js"></script>
<script src="/js/tocbot.call.js"></script>
@endsection