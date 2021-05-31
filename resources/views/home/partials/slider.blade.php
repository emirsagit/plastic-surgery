<div class="pb-24 pt-12 bg-blue-pattern">
    <p class="text-white text-3xl pb-8 text-center">Galeri</p>
    <div class="splide w-full h-full text-gray-800" id="splide">
        <div class="splide__track">
            <div class="splide__list">
                @foreach ($images as $image)
                <div class="splide__slide m-auto flex justify-center items-end pb-12">
                    <img src="{{ $image->path }}" alt="{{ $image->alt }}" loading="lazy" width="1080" height="1080">
                    <a class="p-2 bg-gray-700 bg-opacity-50 text-gray-200 rounded" href="{{ route('services.show', $service = $image->services->first()) }}">
                        <p class="font-bold capitalize flex justify-center">{{ $service->title }}<span
                                class="bg-red-500 text-xs rounded px-2 py-1 ml-1">Daha Fazla</span></p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>