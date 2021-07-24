@if ($relateds->count())
<p class="lg:text-2xl mb-4 text-lg px-2 text-center mt-4 lg:mt-8 text-gray-700">
    {{ __('Bu Yazılar İlginizi Çekebilir') }}
</p>
<div class="w-full flex flex-row justify-center relative">
    @forelse ($relateds as $related)
    <a class="lg:w-1/3 w-full justify-center flex flex-col shadow lg:mr-1 transform transition duration-500 hover:bg-gray-800 hover:bg-opacity-20"
    href="{{ route('services.show', $related->slug) }}">
        <div class="relative inner-shadow">
            <img src="{{ $related->image }}" alt="{{ $related->alt }}" width="1080" height="1080" loading="lazy">
        </div>
        <button class="px-4 font-bold py-1 text-white rounded absolute bottom-8 left-0 uppercase">{{ $related->title }}</button>
        <button class="text-indigo-900">{{ __('Devamı için tıklayınız') }}</button>
    </a>
    @endforeach
</div>
@endif