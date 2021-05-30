@if ($images->count())

<p class="text-center text-xl lg:text-2xl text-red-700 font-bold px-4">
    {{ ucwords($service->title) . ' ' . __('Fotoğraflar') }}
</p>

<div class="w-full mt-4 flex px-6 lg:px-4 flex-row justify-center items-center flex-wrap" id="galeri">
    @foreach ($images as $image)
    <div class="lg:w-1/3 w-full p-2">
        <a href="{{ '/' . app()->getLocale() . '/' .   trans('routes.gallery') . "?service=$service->slug" }}">
            <img src="{{ $image->path }}" alt="{{ $image->alt }}" width="1080" height="1080"
                class="transform transition duration-500 hover:scale-105" loading="lazy">
        </a>
    </div>
    @endforeach
</div>

@endif
<div class="flex flex-row mt-4 lg:mt-8 justify-around items-center">
    <a class="flex flex-row items-center" href="https://www.instagram.com/hayatikale/">
        @include('services.partials.instagram')
        <span class="text-gray-700 lg:pl-2 pl-1 lg:text-xl text-md">@hayatikale</span>
    </a>
    <div class="flex flex-row justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        <p class="lg:text-2xl text-xs px-2 text-center text-gray-700">
            {{ __('Daha Fazla Fotoğraf') }}
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </div>
    <a class="flex flex-row items-center"
        href="{{ '/' . app()->getLocale() . '/' .   trans('routes.gallery') . "?service=$service->slug" }}">
        <span class="text-gray-700 lg:pr-2 pr-1 lg:text-xl text-md">{{ __('Galeri Sayfası') }}</span>
        <svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" enable-background="new 0 0 48 48"
            class="lg:w-32 lg:h-32 w-10 h-10">
            <path fill="#E65100"
                d="M41,42H13c-2.2,0-4-1.8-4-4V18c0-2.2,1.8-4,4-4h28c2.2,0,4,1.8,4,4v20C45,40.2,43.2,42,41,42z" />
            <path fill="#F57C00"
                d="M35,36H7c-2.2,0-4-1.8-4-4V12c0-2.2,1.8-4,4-4h28c2.2,0,4,1.8,4,4v20C39,34.2,37.2,36,35,36z" />
            <circle fill="#FFF9C4" cx="30" cy="16" r="3" />
            <polygon fill="#942A09" points="17,17.9 8,31 26,31" />
            <polygon fill="#BF360C" points="28,23.5 22,31 34,31" />
        </svg>
    </a>
</div>