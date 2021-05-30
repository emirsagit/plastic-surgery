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
            <h1 class="text-4xl text-gray-800 font-extrabold text-center px-2 uppercase">
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
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
    const pharagraph = document.getElementById('pharagraph');
    const headers = pharagraph.querySelectorAll('h2, h3, h4')

    
    Array.from(headers).forEach((header, index) => {
        header.setAttribute("id", header.innerText)
    })


    tocbot.init({
  // Where to render the table of contents.
  tocSelector: '.table-of-contents',
  // Where to grab the headings to build the table of contents.
  contentSelector: '.ck-editor__editable',
  // Which headings to grab inside of the contentSelector element.
  headingSelector: 'h2, h3, h4',
  // For headings inside relative or absolute positioned containers within content.
  hasInnerContainers: true,
  headingsOffset: 40,
  scrollSmoothOffset: -80
});

});
</script>
@endsection