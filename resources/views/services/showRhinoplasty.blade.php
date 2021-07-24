@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="/css/tocbot.css">
@endsection

@section('content')
<main class="min-h-screen lg:ml-10">
    <div class="relative mb-10 min-h-screen flex flex-col">
        <div class="bg-rhino py-24">
            <div class="flex flex-row justify-evenly">
                @include('layouts.shared.telephoneAndOnlineLinks')
            </div>
            <h1 class="text-3xl tracking-wide text-white font-extrabold text-center px-2 uppercase mt-12">
                {{ $service->title }}
            </h1>
        </div>
        <div class="flex flex-col lg:flex-row items-end h-full">
            <div class="lg:w-1/2 w-full lg:pt-0">
                <div class="aspect-w-16 aspect-h-9">
                    <button aria-label="Rinoplasti Nedir? Video Linki" class="youtube" type="button">
                        <img src="/img/efsane-video.jpg" alt="burun estetiği" width="1366" height="768"
                            link="https://www.youtube.com/embed/dRtYqzYuUCI">
                    </button>
                </div>
            </div>
            <div class="lg:w-1/2 w-full">
                <div class="aspect-w-16 aspect-h-9">
                    <button aria-label="Burun Estetiği Nedir? Video Linki" class="youtube" type="button">
                        <img src="/img/video-2.jpg" alt="rinoplasti" width="1366" height="768"
                            link="https://www.youtube.com/embed/8uBfQulwvK4">
                    </button>
                </div>
            </div>
        </div>
    </div>
 
    <div class="flex lg:flex-row flex-col lg:px-20">

        @include('services.partials.rhinoplasty.rhinoplastyBody')

        @include('services.partials.summary')

    </div>


    <div class="flex flex-col p-4 bg-soft-gray">

        @include('services.partials.photos')

    </div>


    <div class="flex flex-col mb-10 lg:px-24">

        @include('services.partials.relatedServices')

    </div>
    </div>
</main>
@endsection

@section('script')
<script src="/js/tocbot.min.js"></script>
<script src="/js/tocbot.call.js"></script>
@endsection