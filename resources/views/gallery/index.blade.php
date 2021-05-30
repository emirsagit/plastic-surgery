@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="/css/simple-lightbox.min.css">
@endsection

@section('content')
<div class="flex flex-col lg:pl-12">
    <div class="flex flex-col justify-between">
        <a class="text-gray-700 hover:text-gray-800 pl-1" href="{{ '/' . app()->getLocale() }}">
            <-{{ (__('Anasayfa')) }}</a> <div class="mt-6">
                @include('layouts.shared.serviceSelect')
    </div>
</div>
<h1 class="mt-6 lg:mt-10 mb-8 text-center lg:text-4xl text-2xl border-b-2 border-blue-800 pb-2">
    Fotoğraf Galerisi</h1>
<div class="flex flex-row flex-wrap gallery">
    @foreach ($images as $image)
    <a href="{{ $image->path }}"
        class="lg:w-1/3 w-1/2 p-2 rounded transform transition duration-500 hover:scale-105"><img
            src="{{ $image->path }}" alt="{{ $image->alt }}" title="{{ $image->alt }}" height="1080" width="1080"
            loading="lazy" /></a>
    @endforeach
</div>
{{ $images->appends(request()->query())->links() }}
</div>
{{-- <a class="hidden" href="{{ '/' . app()->getLocale() . '/' .   trans('routes.gallery') . "?service=$service->slug" }}"
id="link"> --}}
@endsection


@section('script')
<script src="/js/simple-lightbox.min.js"></script>
<script>
    var lightbox = new SimpleLightbox('.gallery a', { });

    function selected(event) {
        const firstPath = window.location.pathname.split('/')[1];

        window.location.href = "/" + firstPath + '/galeri/?service='  + event.target.value;
    }
</script>
@endsection