<div class="pb-24 pt-12 bg-blue-pattern">
    <p class="text-white text-3xl pb-8 text-center">{{ __('Galeri Sayfası') }}</p>
    <div class="splide w-full h-full text-gray-800" id="splide">
        <div class="splide__track">
            <div class="splide__list">
                @foreach ($images as $image)
                <div class="splide__slide m-auto flex justify-center items-end pb-12 relative">
                    <img data-splide-lazy="{{ $image->path }}" alt="{{ $image->alt }}" src="{{ $image->path }}" width="1080" height="1080" loading="lazy">
                    <a class="p-2 bg-gray-700 bg-opacity-50 text-gray-200 rounded absolute bottom-1/4" @if ($service=$image->services->where('language', app()->getLocale())->first())
                        href="{{ '/' . app()->getLocale() . '/' .   trans('routes.gallery') . '/?service=' . $service->slug }}">
                        <p class="font-bold capitalize flex justify-center">{{ $service->title }}<span class="bg-red-500 text-xs rounded px-2 py-1 ml-1">{{ __('Daha Fazla') }}</span></p>
                        @else
                        href="{{ '/' . app()->getLocale() . '/' .   trans('routes.gallery')}}">
                        <p class="font-bold capitalize flex justify-center">{{ __('Galeri Sayfası') }}<span class="bg-red-500 text-xs rounded px-2 py-1 ml-1">{{ __('Daha Fazla') }}</span></p>
                        @endif
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>