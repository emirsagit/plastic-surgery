@if ($relateds->count())
<p class="lg:text-2xl mb-4 text-lg px-2 text-center mt-4 lg:mt-8 text-gray-700">
    {{ __('Bu Yazılar İlginizi Çekebilir') }}
</p>
<div class="w-full flex flex-row justify-center">
    @forelse ($relateds as $related)
    <a class="lg:w-1/3 w-full justify-center flex flex-col shadow mr-1 transform transition duration-500 hover:bg-gray-800 hover:bg-opacity-20"
    href="{{ route('services.show', $related->slug) }}">
        <img src="{{ $related->image }}" alt="{{ $related->alt }}" width="1080" height="1080" loading="lazy"    >
        <div class="flex justify-center">
            <button class="px-4 py-1 bg-navbar text-white rounded -mt-6">{{ $related->title }}</button>
        </div>
        <button class="mt-2 text-indigo-900">{{ __('Devamı için tıklayınız') }}</button>
    </a>
    @endforeach
</div>
@endif